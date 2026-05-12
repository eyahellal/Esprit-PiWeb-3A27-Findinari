<?php

namespace App\Controller\managment;

use App\Entity\management\MoneyTransfer;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\MoneyTransferRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\WalletRepository;
use App\Service\DatabaseNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

#[Route('/transfer')]
class MoneyTransferController extends AbstractController
{
    private function getCurrentUser(): Utilisateur
    {
        $user = $this->getUser();
        if (!$user instanceof Utilisateur) {
            throw new AccessDeniedHttpException('User not authenticated.');
        }
        return $user;
    }

    #[Route('/', name: 'app_transfer_index', methods: ['GET'])]
    public function index(
        WalletRepository $walletRepository,
        MoneyTransferRepository $transferRepository
    ): Response {
        $user    = $this->getCurrentUser();
        $wallets = $walletRepository->findBy(['utilisateur' => $user]);

        $sentTransfers = $transferRepository->createQueryBuilder('t')
            ->where('t.sender = :user')
            ->setParameter('user', $user)
            ->orderBy('t.createdAt', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $receivedTransfers = $transferRepository->createQueryBuilder('t')
            ->where('t.receiver = :user')
            ->setParameter('user', $user)
            ->orderBy('t.createdAt', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return $this->render('management/transfer/index.html.twig', [
            'wallets'           => $wallets,
            'sentTransfers'     => $sentTransfers,
            'receivedTransfers' => $receivedTransfers,
        ]);
    }

    #[Route('/search-users', name: 'app_transfer_search_users', methods: ['GET'])]
    public function searchUsers(
        Request $request,
        UtilisateurRepository $userRepository
    ): JsonResponse {
        $query       = (string) $request->query->get('q', '');
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
                'id'     => $user->getId(),
                'name'   => $user->getNom() . ' ' . $user->getPrenom(),
                'email'  => $user->getGmail(),
                'avatar' => 'https://ui-avatars.com/api/?name=' . urlencode((string) $user->getNom()),
            ];
        }

        return $this->json(['users' => $results]);
    }

    #[Route('/send', name:'app_transfer_send', methods: ['POST'])]
    public function send(
        Request $request,
        EntityManagerInterface $em,
        WalletRepository $walletRepository,
        UtilisateurRepository $userRepository,
        DatabaseNotificationService $notificationService  // ✅ Added
    ): JsonResponse {
        $data = json_decode((string) $request->getContent(), true);

        $sender         = $this->getCurrentUser();
        $receiverId     = $data['receiverId'] ?? null;
        $senderWalletId = $data['senderWalletId'] ?? null;
        $amount         = (float) ($data['amount'] ?? 0);
        $message        = $data['message'] ?? null;

        if (!$receiverId || !$senderWalletId || $amount <= 0) {
            return $this->json(['error' => 'Invalid data'], 400);
        }

        $receiver = $userRepository->find($receiverId);
        if (!$receiver instanceof Utilisateur) {
            return $this->json(['error' => 'User not found'], 404);
        }

        $senderWallet = $walletRepository->find($senderWalletId);
        if (!$senderWallet instanceof Wallet) {
            return $this->json(['error' => 'Wallet not found'], 404);
        }

        if ($senderWallet->getUtilisateur()?->getId() !== $sender->getId()) {
            return $this->json(['error' => 'Invalid wallet'], 400);
        }

        if ($senderWallet->getSolde() < $amount) {
            return $this->json(['error' => 'Insufficient balance'], 400);
        }

        // Create transfer
        $transfer = new MoneyTransfer();
        $transfer->setSender($sender);
        $transfer->setReceiver($receiver);
        $transfer->setSenderWallet($senderWallet);
        $transfer->setAmount($amount);
        $transfer->setDevise($senderWallet->getDevise());
        $transfer->setMessage($message);
        $transfer->setStatus('pending');

        // Deduct from sender
        $senderWallet->setSolde($senderWallet->getSolde() - $amount);

        $em->persist($transfer);
        $em->flush();

        // ✅ Fix — add the Choose Wallet button in the message
$notificationService->addNotification(
    sprintf('💸 %s sent you money!',
        $sender->getNom() . ' ' . $sender->getPrenom()),
    sprintf(
        '<div class="loan-notification">
            <strong>%s</strong> sent you <strong>%.2f %s</strong>!<br>
            %s
            <div class="mt-2">
                <a href="/transfer" class="btn btn-sm btn-success">
                    💳 Choose Wallet
                </a>
            </div>
        </div>',
        htmlspecialchars($sender->getNom() . ' ' . $sender->getPrenom(), ENT_QUOTES, 'UTF-8'),
        $amount,
        $senderWallet->getDevise(),
        $message ? '<em>"' . htmlspecialchars((string)$message, ENT_QUOTES, 'UTF-8') . '"</em><br>' : '',
        $transfer->getId()
    ),
    $receiver,
    'info',
    $transfer->getId(),
    'money_transfer'
);
        // ✅ Notify SENDER — confirmation
        $notificationService->addNotification(
            '✅ Money sent successfully!',
            sprintf(
                '<div class="loan-notification">
                    You sent <strong>%.2f %s</strong> to <strong>%s</strong>.<br>
                    Waiting for them to choose a wallet.
                </div>',
                $amount,
                $senderWallet->getDevise(),
                htmlspecialchars($receiver->getNom() . ' ' . $receiver->getPrenom(), ENT_QUOTES, 'UTF-8')
            ),
            $sender,
            'success',
            $transfer->getId(),
            'money_transfer'
        );

        return $this->json([
            'success'    => true,
            'message'    => 'Transfer sent! Waiting for receiver to choose their wallet.',
            'transferId' => $transfer->getId(),
        ]);
    }

    #[Route('/pending', name: 'app_transfer_pending', methods: ['GET'])]
    public function getPending(
        MoneyTransferRepository $transferRepository
    ): JsonResponse {
        $user = $this->getCurrentUser();

        $transfers = $transferRepository->createQueryBuilder('t')
            ->where('t.receiver = :user')
            ->andWhere('t.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', 'pending')
            ->orderBy('t.createdAt', 'DESC')
            ->getQuery()
            ->getResult();

        $results = [];
        foreach ($transfers as $transfer) {
            /** @var MoneyTransfer $transfer */
            $results[] = [
                'id'         => $transfer->getId(),
                'senderName' => $transfer->getSender()?->getNom() . ' ' . $transfer->getSender()?->getPrenom(),
                'amount'     => $transfer->getAmountFloat(),
                'devise'     => $transfer->getDevise(),
                'message'    => $transfer->getMessage(),
                'createdAt'  => $transfer->getCreatedAt()?->format('Y-m-d H:i'),
            ];
        }

        return $this->json(['transfers' => $results]);
    }

    #[Route('/accept/{id}', name: 'app_transfer_accept', methods: ['GET', 'POST'])]
    public function accept(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        MoneyTransferRepository $transferRepository,
        WalletRepository $walletRepository,
        DatabaseNotificationService $notificationService  // ✅ Added
    ): Response {
        $user     = $this->getCurrentUser();
        $transfer = $transferRepository->find($id);

        if (!$transfer) {
            throw $this->createNotFoundException('Transfer not found');
        }

        if ($transfer->getReceiver()?->getId() !== $user->getId()) {
            $this->addFlash('error', 'You are not the intended receiver');
            return $this->redirectToRoute('app_transfer_index');
        }

        if ($transfer->getStatus() !== 'pending') {
            $this->addFlash('error', 'This transfer has already been processed');
            return $this->redirectToRoute('app_transfer_index');
        }

        $wallets = $walletRepository->findBy(['utilisateur' => $user]);

        if (empty($wallets)) {
            $this->addFlash('error', 'You need to create a wallet first');
            return $this->redirectToRoute('app_wallet_new');
        }

        if ($request->isMethod('POST')) {
            $selectedWalletId = $request->request->get('wallet_id');
            $selectedWallet   = $walletRepository->find($selectedWalletId);

            if (!$selectedWallet instanceof Wallet ||
                $selectedWallet->getUtilisateur()?->getId() !== $user->getId()) {
                $this->addFlash('error', 'Invalid wallet selected');
                return $this->redirectToRoute('app_transfer_accept', ['id' => $id]);
            }

            // ✅ Add money to receiver wallet
$senderCurrency   = $transfer->getDevise() ?? 'USD';
$receiverCurrency = $selectedWallet->getDevise() ?? 'USD';
$amountToAdd      = $transfer->getAmountFloat();

// ✅ Convert if currencies differ
if ($senderCurrency !== $receiverCurrency) {
    try {
        $rateUrl  = "https://api.exchangerate-api.com/v4/latest/{$senderCurrency}";
        $rateJson = file_get_contents($rateUrl);
        if ($rateJson !== false) {
            $rateData = json_decode($rateJson, true);
            $rate     = $rateData['rates'][$receiverCurrency] ?? 1.0;
            $amountToAdd = $transfer->getAmountFloat() * $rate;
        }
    } catch (\Exception $e) {
        // fallback — no conversion
    }
}

$selectedWallet->setSolde((float) $selectedWallet->getSolde() + $amountToAdd);
            $transfer->setReceiverWallet($selectedWallet);
            $transfer->setStatus('completed');
            $transfer->setCompletedAt(new \DateTimeImmutable());

            $em->flush();

            // ✅ Notify sender that money was received
            $sender = $transfer->getSender();
            if ($sender instanceof Utilisateur) {
                $notificationService->addNotification(
    '✅ Money received!',
    sprintf(
        '<div class="loan-notification">
            <strong>%s</strong> received your money!<br>
            Sent: <strong>%.2f %s</strong> → Received: <strong>%.2f %s</strong>
        </div>',
        htmlspecialchars($user->getNom() . ' ' . $user->getPrenom(), ENT_QUOTES, 'UTF-8'),
        $transfer->getAmountFloat(),
        $senderCurrency,
        $amountToAdd,
        $receiverCurrency
    ),
    $sender,
    'success',
    $transfer->getId(),
    'money_transfer'
);
            }

            $this->addFlash('success', sprintf(
    '%.2f %s received successfully! (converted from %.2f %s)',
    $amountToAdd,
    $receiverCurrency,
    $transfer->getAmountFloat(),
    $senderCurrency
));

            return $this->redirectToRoute('app_transfer_index');
        }

        return $this->render('management/transfer/accept.html.twig', [
            'transfer' => $transfer,
            'wallets'  => $wallets,
        ]);
    }

    #[Route('/cancel/{id}', name: 'app_transfer_cancel', methods: ['POST'])]
    public function cancel(
        int $id,
        MoneyTransferRepository $transferRepository,
        EntityManagerInterface $em
    ): JsonResponse {
        $user     = $this->getCurrentUser();
        $transfer = $transferRepository->find($id);

        if (!$transfer) {
            return $this->json(['error' => 'Transfer not found'], 404);
        }

        if ($transfer->getSender()?->getId() !== $user->getId()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        if ($transfer->getStatus() !== 'pending') {
            return $this->json(['error' => 'Cannot cancel a completed transfer'], 400);
        }

        // Refund sender
        $senderWallet = $transfer->getSenderWallet();
        if ($senderWallet instanceof Wallet) {
            $senderWallet->setSolde($senderWallet->getSolde() + $transfer->getAmountFloat());
        }

        $transfer->setStatus('cancelled');
        $em->flush();

        return $this->json(['success' => true, 'message' => 'Transfer cancelled and refunded']);
    }
}