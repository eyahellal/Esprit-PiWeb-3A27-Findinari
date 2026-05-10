<?php

namespace App\Controller\Loan;

use App\Entity\user\Utilisateur;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Entity\Loan\FriendLoanRequest;
use App\Entity\Loan\Investissementobligation;
use App\Repository\ObligationRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\WalletRepository;
use App\Service\DatabaseNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/friend-loan')]
class FriendLoanController extends AbstractController
{
    private function getCurrentUser(): Utilisateur
    {
        $user = $this->getUser();

        if (!$user instanceof Utilisateur) {
            throw new AccessDeniedHttpException('User not authenticated.');
        }

        return $user;
    }

    #[Route('/search-users', name: 'friend_loan_search_users', methods: ['GET'])]
    public function searchUsers(Request $request, UtilisateurRepository $userRepository): JsonResponse
    {
        $query = (string) $request->query->get('q', '');
        $currentUser = $this->getCurrentUser();

        if (strlen($query) < 2) {
            return $this->json(['users' => []]);
        }

        $users = $userRepository->createQueryBuilder('u')
            ->where('u.nom LIKE :query OR u.prenom LIKE :query OR u.gmail LIKE :query')
            ->andWhere('u.id != :currentId')
            ->setParameter('query', '%' . $query . '%')
            ->setParameter('currentId', $currentUser->getId())
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $results = [];

        foreach ($users as $user) {
            /** @var Utilisateur $user */
            $results[] = [
                'id' => $user->getId(),
                'name' => $user->getNom() . ' ' . $user->getPrenom(),
                'email' => $user->getGmail(),
                'avatar' => 'https://ui-avatars.com/api/?name=' . urlencode((string)$user->getNom()),
            ];
        }

        return $this->json(['users' => $results]);
    }

    #[Route('/obligations-list', name: 'friend_loan_obligations', methods: ['GET'])]
    public function getObligationsList(ObligationRepository $obligationRepository): JsonResponse
    {
        $obligations = $obligationRepository->findAll();

        $results = [];

        foreach ($obligations as $obligation) {
            $results[] = [
                'id' => $obligation->getIdObligation(),
                'name' => $obligation->getNom(),
                'rate' => (float)$obligation->getTauxInteret(),
                'duration' => (int)$obligation->getDuree(),
            ];
        }

        return $this->json(['obligations' => $results]);
    }

    #[Route('/send-request', name: 'friend_loan_send', methods: ['POST'])]
    public function sendRequest(
        Request $request,
        EntityManagerInterface $em,
        WalletRepository $walletRepository,
        ObligationRepository $obligationRepository,
        DatabaseNotificationService $notificationService
    ): JsonResponse {
        $data = json_decode((string)$request->getContent(), true);
        $sender = $this->getCurrentUser();

        $receiverId = $data['receiverId'] ?? null;
        $obligationId = $data['obligationId'] ?? null;
        $senderWalletId = $data['senderWalletId'] ?? null;
        $amount = (float)($data['amount'] ?? 0);

        if (!$receiverId || !$obligationId || !$senderWalletId || $amount <= 0) {
            return $this->json(['error' => 'Invalid data'], 400);
        }

        $receiver = $em->getRepository(Utilisateur::class)->find($receiverId);

        if (!$receiver instanceof Utilisateur) {
            return $this->json(['error' => 'User not found'], 404);
        }

        $obligation = $obligationRepository->find($obligationId);

        if (!$obligation) {
            return $this->json(['error' => 'Obligation not found'], 404);
        }

        $senderWallet = $walletRepository->find($senderWalletId);

        if (!$senderWallet || !$senderWallet->getUtilisateur() || $senderWallet->getUtilisateur()->getId() !== $sender->getId()) {
            return $this->json(['error' => 'Invalid wallet'], 400);
        }

        if ($senderWallet->getSolde() < $amount) {
            return $this->json(['error' => 'Insufficient balance'], 400);
        }

        // Annuler les anciennes demandes en attente
        $existingRequests = $em->getRepository(FriendLoanRequest::class)
            ->findBy([
                'sender' => $sender,
                'receiver' => $receiver,
                'status' => 'pending',
            ]);

        foreach ($existingRequests as $oldRequest) {
            $oldRequest->setStatus('cancelled');
        }
        $em->flush();

        $interestRate = (float) $obligation->getTauxInteret();
        $durationMonths = (int) $obligation->getDuree();

        $friendLoan = new FriendLoanRequest();
        $friendLoan->setSender($sender);
        $friendLoan->setReceiver($receiver);
        $friendLoan->setAmount((string)$amount);
        $friendLoan->setInterestRate((string)$interestRate);
        $friendLoan->setDurationMonths($durationMonths);
        $friendLoan->setSenderInvestmentId((int)$obligationId);

        $em->persist($friendLoan);
        $em->flush();

        $interest = $amount * ($interestRate / 100) * ($durationMonths / 12);
        $total = $amount + $interest;

        $notificationService->addFriendLoanNotification(
            [
                'action' => 'received',
                'loanId' => $friendLoan->getId(),
                'senderName' => $sender->getNom() . ' ' . $sender->getPrenom(),
                'receiverName' => $receiver->getNom() . ' ' . $receiver->getPrenom(),
                'amount' => $amount,
                'interestRate' => $interestRate,
                'durationMonths' => $durationMonths,
                'total' => $total,
            ],
            $receiver
        );

        $notificationService->addFriendLoanNotification(
            [
                'action' => 'sent',
                'loanId' => $friendLoan->getId(),
                'senderName' => $sender->getNom() . ' ' . $sender->getPrenom(),
                'receiverName' => $receiver->getNom() . ' ' . $receiver->getPrenom(),
                'amount' => $amount,
                'interestRate' => $interestRate,
                'durationMonths' => $durationMonths,
                'total' => $total,
            ],
            $sender
        );

        return $this->json([
            'success' => true,
            'message' => 'Request sent successfully',
            'requestId' => $friendLoan->getId(),
        ]);
    }

    #[Route('/my-requests', name: 'friend_loan_my_requests', methods: ['GET'])]
    public function myRequests(EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getCurrentUser();

        $requests = $em->getRepository(FriendLoanRequest::class)
            ->createQueryBuilder('r')
            ->where('r.receiver = :user')
            ->andWhere('r.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', 'pending')
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();

        $results = [];

        foreach ($requests as $request) {
            /** @var FriendLoanRequest $request */
            $sender = $request->getSender();
           
            if (!$sender) continue;

            $amount = (float)$request->getAmount();
            $interestRate = (float)$request->getInterestRate();
            $durationMonths = (int)$request->getDurationMonths();

            $interest = $amount * ($interestRate / 100) * ($durationMonths / 12);
            $total = $amount + $interest;

            $results[] = [
                'id' => $request->getId(),
                'senderName' => $sender->getNom() . ' ' . $sender->getPrenom(),
                'senderEmail' => $sender->getGmail(),
                'amount' => $amount,
                'interestRate' => $interestRate,
                'durationMonths' => $durationMonths,
                'interest' => round($interest, 2),
                'totalToReturn' => round($total, 2),
                'createdAt' => $request->getCreatedAt() ? $request->getCreatedAt()->format('Y-m-d H:i') : null,
                'expiresAt' => $request->getExpiresAt() ? $request->getExpiresAt()->format('Y-m-d H:i') : null,
            ];
        }

        return $this->json(['requests' => $results]);
    }

    #[Route('/respond/{id}', name: 'friend_loan_respond', methods: ['POST'])]
    public function respond(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        DatabaseNotificationService $notificationService
    ): JsonResponse {
        $data = json_decode((string)$request->getContent(), true);
        $action = $data['action'] ?? '';
        $receiver = $this->getCurrentUser();

        $friendLoan = $em->getRepository(FriendLoanRequest::class)->find($id);

        if (!$friendLoan) {
            return $this->json(['error' => 'Request not found'], 404);
        }

        $loanReceiver = $friendLoan->getReceiver();
        if (!$loanReceiver || $loanReceiver->getId() !== $receiver->getId()) {
            return $this->json(['error' => 'You are not the intended receiver'], 403);
        }

        if ($friendLoan->getStatus() !== 'pending') {
            return $this->json(['error' => 'This request has already been processed'], 400);
        }

        $now = new \DateTimeImmutable();

        if ($friendLoan->getExpiresAt() && $now > $friendLoan->getExpiresAt()) {
            $friendLoan->setStatus('expired');
            $em->flush();

            return $this->json(['error' => 'This request has expired'], 400);
        }

        if ($action === 'decline') {
            $friendLoan->setStatus('declined');
            $friendLoan->setRespondedAt($now);
            $em->flush();

            // Supprimer la notification "received" de l'emprunteur
            $notificationService->deleteLoanNotifications($friendLoan->getId(), $receiver, 'received');

            $notificationService->addFriendLoanNotification(
                [
                    'action' => 'declined',
                    'loanId' => $friendLoan->getId(),
                    'senderName' => ($friendLoan->getSender()?->getNom() ?? '') . ' ' . ($friendLoan->getSender()?->getPrenom() ?? ''),
                    'receiverName' => $receiver->getNom() . ' ' . $receiver->getPrenom(),
                    'amount' => (float)$friendLoan->getAmount(),
                ],
                $friendLoan->getSender()
            );

            return $this->json(['success' => true, 'message' => 'Request declined']);
        }

        return $this->json(['error' => 'Invalid action'], 400);
    }

    #[Route('/accept-with-wallet/{id}', name: 'friend_loan_accept_with_wallet', methods: ['GET', 'POST'])]
    public function acceptWithWallet(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        WalletRepository $walletRepository,
        ObligationRepository $obligationRepository,
        DatabaseNotificationService $notificationService
    ): Response {
        $user = $this->getCurrentUser();

        $friendLoan = $em->getRepository(FriendLoanRequest::class)->find($id);

        if (!$friendLoan) {
            throw $this->createNotFoundException('Request not found');
        }

        $receiver = $friendLoan->getReceiver();
        if (!$receiver || $receiver->getId() !== $user->getId()) {
            $this->addFlash('error', 'You are not the intended receiver');
            return $this->redirectToRoute('app_dashboard');
        }

        if ($friendLoan->getStatus() !== 'pending') {
            $this->addFlash('error', 'This request has already been processed');
            return $this->redirectToRoute('app_dashboard');
        }

        $now = new \DateTimeImmutable();

        if ($friendLoan->getExpiresAt() && $now > $friendLoan->getExpiresAt()) {
            $friendLoan->setStatus('expired');
            $em->flush();
            $this->addFlash('error', 'This request has expired');
            return $this->redirectToRoute('app_dashboard');
        }

        $wallets = $walletRepository->findBy(['utilisateur' => $user]);

        if (count($wallets) === 0) {
            $this->addFlash('error', 'You need to create a wallet first');
            return $this->redirectToRoute('app_wallet_new');
        }

        $obligation = $obligationRepository->find((int)$friendLoan->getSenderInvestmentId());

        $amount = (float)$friendLoan->getAmount();
        $interestRate = (float)$friendLoan->getInterestRate();
        $durationMonths = (int)$friendLoan->getDurationMonths();

        $interest = $amount * ($interestRate / 100) * ($durationMonths / 12);
        $total = $amount + $interest;

        if ($request->isMethod('POST')) {
            $selectedWalletId = $request->request->get('wallet_id');
            $selectedWallet = $walletRepository->find($selectedWalletId);

            if (!$selectedWallet || !$selectedWallet->getUtilisateur() || $selectedWallet->getUtilisateur()->getId() !== $user->getId()) {
                $this->addFlash('error', 'Invalid wallet selected');
                return $this->redirectToRoute('friend_loan_accept_with_wallet', ['id' => $id]);
            }

            $sender = $friendLoan->getSender();
            $senderWallet = $walletRepository->findOneBy(['utilisateur' => $sender]);

            if (!$senderWallet || $senderWallet->getSolde() < $amount) {
                $this->addFlash('error', 'The lender no longer has sufficient funds');
                return $this->redirectToRoute('app_dashboard');
            }

            $senderWallet->setSolde($senderWallet->getSolde() - $amount);
            $selectedWallet->setSolde($selectedWallet->getSolde() + $amount);

            $maturityDate = (new \DateTime())->modify('+' . $durationMonths . ' months');

            $senderInvestment = new Investissementobligation();
            $senderInvestment->setWalletId((string)$senderWallet->getId());
            $senderInvestment->setMontantInvesti((string)$amount);
            $senderInvestment->setDateAchat(new \DateTime());
            $senderInvestment->setDateMaturite($maturityDate);

            if ($obligation) {
                $senderInvestment->setObligationId($obligation->getIdObligation());
            }

            $em->persist($senderInvestment);
            $em->flush();

            $friendLoan->setStatus('accepted');
            $friendLoan->setRespondedAt(new \DateTimeImmutable());
            $friendLoan->setSenderInvestmentId((int)$senderInvestment->getIdInvestissement());

            $em->flush();

            // Supprimer la notification "received" de l'emprunteur
            $notificationService->deleteLoanNotifications($friendLoan->getId(), $user, 'received');

            // ✅ Notification POUR LE PRÊTEUR SEULEMENT
            $notificationService->addFriendLoanNotification(
                [
                    'action' => 'accepted',
                    'loanId' => $friendLoan->getId(),
                    'senderName' => $sender->getNom() . ' ' . $sender->getPrenom(),
                    'receiverName' => $user->getNom() . ' ' . $user->getPrenom(),
                    'amount' => $amount,
                    'interestRate' => $interestRate,
                    'durationMonths' => $durationMonths,
                    'total' => $total,
                ],
                $sender
            );

            // ✅ Notification POUR L'EMPRUNTEUR (ordre des paramètres corrigé)
            $notificationService->addNotification(
                '💸 Money Received',
                sprintf('You have received <strong>%.2f DT</strong> from %s %s.', $amount, $sender->getNom(), $sender->getPrenom()),
                $user,  // ✅ 3ème paramètre: Utilisateur
                'info',
                $friendLoan->getId(),
                'friend_loan'
            );

            $this->addFlash('success', 'Loan accepted! Money transferred successfully.');
            return $this->redirectToRoute('app_investment_index');
        }

        return $this->render('loan/investment/accept_loan.html.twig', [
            'loan' => $friendLoan,
            'wallets' => $wallets,
            'obligation' => $obligation,
            'interest' => round($interest, 2),
            'total' => round($total, 2),
        ]);
    }

    // ✅ MÉTHODE POUR LES DETTES (MONEY TO REPAY)
    #[Route('/my-debts', name: 'friend_loan_my_debts', methods: ['GET'])]
    public function myDebts(EntityManagerInterface $em): JsonResponse
    {
        try {
            $user = $this->getCurrentUser();
            
            $acceptedLoans = $em->getRepository(FriendLoanRequest::class)
                ->createQueryBuilder('r')
                ->where('r.receiver = :user')
                ->andWhere('r.status = :status')
                ->setParameter('user', $user)
                ->setParameter('status', 'accepted')
                ->orderBy('r.createdAt', 'DESC')
                ->getQuery()
                ->getResult();
            
            $debts = [];
            foreach ($acceptedLoans as $loan) {
                $amount = (float)$loan->getAmount();
                $interestRate = (float)$loan->getInterestRate();
                $durationMonths = $loan->getDurationMonths();
                
                $interest = $amount * ($interestRate / 100) * ($durationMonths / 12);
                $total = $amount + $interest;
                
                $createdAt = $loan->getCreatedAt();
                $maturityDate = $createdAt ? (clone $createdAt)->modify('+' . $durationMonths . ' months') : null;
                
                $debts[] = [
                    'id' => $loan->getId(),
                    'lenderName' => ($loan->getSender()?->getNom() ?? '') . ' ' . ($loan->getSender()?->getPrenom() ?? ''),
                    'amount' => number_format($amount, 2),
                    'interestRate' => $interestRate,
                    'durationMonths' => $durationMonths,
                    'totalToRepay' => number_format($total, 2),
                    'maturityDate' => $maturityDate ? $maturityDate->format('d/m/Y') : 'N/A',
                ];
            }
            
            return $this->json(['debts' => $debts]);
            
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }
}