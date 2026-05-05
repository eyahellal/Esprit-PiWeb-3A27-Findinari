<?php

namespace App\Controller\Loan;

use App\Entity\user\Utilisateur;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Entity\Loan\FriendLoanRequest;
use App\Entity\Loan\Investissementobligation;
use App\Repository\ObligationRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\WalletRepository;
use App\Service\SimpleNotificationService;
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
        $query = $request->query->get('q', '');
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
            $results[] = [
                'id' => $user->getId(),
                'name' => $user->getNom() . ' ' . $user->getPrenom(),
                'email' => $user->getGmail(),
                'avatar' => 'https://ui-avatars.com/api/?name=' . urlencode($user->getNom()),
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
                'rate' => $obligation->getTauxInteret(),
                'duration' => $obligation->getDuree(),
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
        SimpleNotificationService $notificationService
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        $sender = $this->getCurrentUser();

        $receiverId = $data['receiverId'] ?? null;
        $obligationId = $data['obligationId'] ?? null;
        $senderWalletId = $data['senderWalletId'] ?? null;
        $amount = $data['amount'] ?? 0;

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

        if (!$senderWallet || $senderWallet->getUtilisateur()->getId() !== $sender->getId()) {
            return $this->json(['error' => 'Invalid wallet'], 400);
        }

        if ($senderWallet->getSolde() < $amount) {
            return $this->json(['error' => 'Insufficient balance'], 400);
        }

        $existingRequest = $em->getRepository(FriendLoanRequest::class)
            ->findOneBy([
                'sender' => $sender,
                'receiver' => $receiver,
                'status' => 'pending',
            ]);

        if ($existingRequest) {
            return $this->json(['error' => 'A request is already pending'], 400);
        }

        $interestRate = $obligation->getTauxInteret();
        $durationMonths = $obligation->getDuree();

        $friendLoan = new FriendLoanRequest();
        $friendLoan->setSender($sender);
        $friendLoan->setReceiver($receiver);
        $friendLoan->setAmount($amount);
        $friendLoan->setInterestRate($interestRate);
        $friendLoan->setDurationMonths($durationMonths);
        $friendLoan->setSenderInvestmentId($obligationId);

        $em->persist($friendLoan);
        $em->flush();

        $interest = $amount * ($interestRate / 100) * ($durationMonths / 12);
        $total = $amount + $interest;

        $notificationMessage = sprintf(
            '<div class="loan-notification">
                <strong>%s %s</strong> wants to lend you <strong>%.2f DT</strong><br>
                📈 Obligation: <strong>%s</strong> | Rate: <strong>%.1f%%</strong> | Duration: <strong>%d months</strong><br>
                <strong>💵 Total to repay: %.2f DT</strong><br>
                <div class="mt-2">
                    <a href="/friend-loan/accept-with-wallet/%d" class="btn btn-sm btn-success">✓ Accept</a>
                    <button onclick="declineLoan(%d)" class="btn btn-sm btn-danger">✗ Decline</button>
                </div>
            </div>',
            $sender->getNom(),
            $sender->getPrenom(),
            $amount,
            $obligation->getNom(),
            $interestRate,
            $durationMonths,
            $total,
            $friendLoan->getId(),
            $friendLoan->getId()
        );

        $notificationService->addNotification(
            '💰 New Loan Request',
            $notificationMessage,
            'info'
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
            $interest = $request->getAmount() * ($request->getInterestRate() / 100) * ($request->getDurationMonths() / 12);
            $total = $request->getAmount() + $interest;

            $results[] = [
                'id' => $request->getId(),
                'senderName' => $request->getSender()->getNom() . ' ' . $request->getSender()->getPrenom(),
                'senderEmail' => $request->getSender()->getGmail(),
                'amount' => $request->getAmount(),
                'interestRate' => $request->getInterestRate(),
                'durationMonths' => $request->getDurationMonths(),
                'interest' => round($interest, 2),
                'totalToReturn' => round($total, 2),
                'createdAt' => $request->getCreatedAt()->format('Y-m-d H:i'),
                'expiresAt' => $request->getExpiresAt()->format('Y-m-d H:i'),
            ];
        }

        return $this->json(['requests' => $results]);
    }

    #[Route('/respond/{id}', name: 'friend_loan_respond', methods: ['POST'])]
    public function respond(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        SimpleNotificationService $notificationService
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        $action = $data['action'] ?? '';
        $receiver = $this->getCurrentUser();

        $friendLoan = $em->getRepository(FriendLoanRequest::class)->find($id);

        if (!$friendLoan) {
            return $this->json(['error' => 'Request not found'], 404);
        }

        if (!$friendLoan->getReceiver() || $friendLoan->getReceiver()->getId() !== $receiver->getId()) {
            return $this->json(['error' => 'You are not the intended receiver'], 403);
        }

        if ($friendLoan->getStatus() !== 'pending') {
            return $this->json(['error' => 'This request has already been processed'], 400);
        }

        $now = new \DateTimeImmutable();

        if ($now > $friendLoan->getExpiresAt()) {
            $friendLoan->setStatus('expired');
            $em->flush();

            return $this->json(['error' => 'This request has expired'], 400);
        }

        if ($action === 'decline') {
            $friendLoan->setStatus('declined');
            $friendLoan->setRespondedAt($now);
            $em->flush();

            $notificationService->addNotification(
                '❌ Loan Request Declined',
                sprintf(
                    'Your loan request to %s %s has been declined',
                    $receiver->getNom(),
                    $receiver->getPrenom()
                ),
                'danger'
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
        SimpleNotificationService $notificationService
    ): Response {
        $user = $this->getCurrentUser();

        $friendLoan = $em->getRepository(FriendLoanRequest::class)->find($id);

        if (!$friendLoan) {
            throw $this->createNotFoundException('Request not found');
        }

        if (!$friendLoan->getReceiver() || $friendLoan->getReceiver()->getId() !== $user->getId()) {
            $this->addFlash('error', 'You are not the intended receiver');

            return $this->redirectToRoute('app_dashboard');
        }

        if ($friendLoan->getStatus() !== 'pending') {
            $this->addFlash('error', 'This request has already been processed');

            return $this->redirectToRoute('app_dashboard');
        }

        $now = new \DateTimeImmutable();

        if ($now > $friendLoan->getExpiresAt()) {
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

        $obligation = $obligationRepository->find($friendLoan->getSenderInvestmentId());

        $interest = $friendLoan->getAmount() * ($friendLoan->getInterestRate() / 100) * ($friendLoan->getDurationMonths() / 12);
        $total = $friendLoan->getAmount() + $interest;

        if ($request->isMethod('POST')) {
            $selectedWalletId = $request->request->get('wallet_id');
            $selectedWallet = $walletRepository->find($selectedWalletId);

            if (!$selectedWallet || $selectedWallet->getUtilisateur()->getId() !== $user->getId()) {
                $this->addFlash('error', 'Invalid wallet selected');

                return $this->redirectToRoute('friend_loan_accept_with_wallet', ['id' => $id]);
            }

            $senderWallet = $walletRepository->findOneBy(['utilisateur' => $friendLoan->getSender()]);

            if (!$senderWallet || $senderWallet->getSolde() < $friendLoan->getAmount()) {
                $this->addFlash('error', 'The lender no longer has sufficient funds');

                return $this->redirectToRoute('app_dashboard');
            }

            $senderWallet->setSolde($senderWallet->getSolde() - $friendLoan->getAmount());
            $selectedWallet->setSolde($selectedWallet->getSolde() + $friendLoan->getAmount());

            $maturityDate = (new \DateTime())->modify('+' . $friendLoan->getDurationMonths() . ' months');

            $senderInvestment = new Investissementobligation();
            $senderInvestment->setWalletId($senderWallet->getId());
            $senderInvestment->setMontantInvesti($friendLoan->getAmount());
            $senderInvestment->setDateAchat(new \DateTime());
            $senderInvestment->setDateMaturite($maturityDate);

            if ($obligation) {
                $senderInvestment->setObligationId($obligation->getIdObligation());
            }

            $em->persist($senderInvestment);
            $em->flush();

            $friendLoan->setStatus('accepted');
            $friendLoan->setRespondedAt(new \DateTimeImmutable());
            $friendLoan->setSenderInvestmentId($senderInvestment->getIdInvestissement());

            $em->flush();

            $notificationService->addNotification(
                '✅ Loan Accepted!',
                sprintf(
                    'Your loan of <strong>%.2f DT</strong> to %s %s has been accepted.',
                    $friendLoan->getAmount(),
                    $user->getNom(),
                    $user->getPrenom()
                ),
                'success'
            );

            $notificationService->addNotification(
                '💸 Money Received',
                sprintf(
                    'You received <strong>%.2f DT</strong> from %s %s.',
                    $friendLoan->getAmount(),
                    $friendLoan->getSender()->getNom(),
                    $friendLoan->getSender()->getPrenom()
                ),
                'info'
            );

            $this->addFlash('success', 'Loan accepted! Money transferred successfully.');

            return $this->redirectToRoute('app_investment_index');
        }

        return $this->render('loan/accept_loan.html.twig', [
            'loan' => $friendLoan,
            'wallets' => $wallets,
            'obligation' => $obligation,
            'interest' => round($interest, 2),
            'total' => round($total, 2),
        ]);
    }
}