<?php
// src/Service/DatabaseNotificationService.php
namespace App\Service;

use App\Entity\Notification;
use App\Entity\user\Utilisateur;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;

class DatabaseNotificationService
{
    private EntityManagerInterface $entityManager;
    private NotificationRepository $notificationRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        NotificationRepository $notificationRepository
    ) {
        $this->entityManager = $entityManager;
        $this->notificationRepository = $notificationRepository;
    }

    /**
     * Ajoute une notification simple
     */
    public function addNotification(
        string $title,
        string $message,
        Utilisateur $user,
        string $type = 'info',
        ?int $relatedId = null,
        ?string $relatedType = null
    ): Notification {
        $notification = new Notification();
        $notification->setTitle($title);
        $notification->setMessage($message);
        $notification->setUser($user);
        $notification->setType($type);
        $notification->setRelatedId($relatedId);
        $notification->setRelatedType($relatedType);

        $this->entityManager->persist($notification);
        $this->entityManager->flush();

        return $notification;
    }

    /**
     * Ajoute une notification pour un prêt entre amis
     */
    public function addFriendLoanNotification(
        array $data,
        Utilisateur $user
    ): void {
        $type = $data['action'] ?? 'received';
        $loanId = $data['loanId'] ?? null;
        $senderName = $data['senderName'] ?? '';
        $receiverName = $data['receiverName'] ?? '';
        $amount = (float) ($data['amount'] ?? 0);
        $interestRate = (float) ($data['interestRate'] ?? 0);
        $durationMonths = (int) ($data['durationMonths'] ?? 0);
        $total = (float) ($data['total'] ?? 0);
       
        if ($type === 'received') {
            $title = '💰 New Loan Request';
            $message = sprintf(
                '<div class="loan-notification">
                    <strong>%s</strong> wants to lend you: <strong>%.2f DT</strong><br>
                    📈 Rate: %.1f%% | ⏱️ Duration: %d months<br>
                    <strong>💵 Total to repay: %.2f DT</strong><br>
                    <div class="mt-2">
                        <a href="/friend-loan/accept-with-wallet/%d" class="btn btn-sm btn-success">✓ Accept</a>
                        <button onclick="declineLoan(%d)" class="btn btn-sm btn-danger">✗ Decline</button>
                    </div>
                </div>',
                htmlspecialchars($senderName, ENT_QUOTES, 'UTF-8'),
                $amount,
                $interestRate,
                $durationMonths,
                $total,
                $loanId,
                $loanId
            );
        } elseif ($type === 'accepted') {
            $title = '✅ Loan Accepted';
            $message = sprintf(
                '<div class="loan-notification">
                    <strong>%s</strong> has accepted your loan of <strong>%.2f DT</strong>.
                </div>',
                htmlspecialchars($receiverName, ENT_QUOTES, 'UTF-8'),
                $amount
            );
        } elseif ($type === 'declined') {
            $title = '❌ Loan Declined';
            $message = sprintf(
                '<div class="loan-notification">
                    <strong>%s</strong> has declined your loan request of <strong>%.2f DT</strong>.
                </div>',
                htmlspecialchars($receiverName, ENT_QUOTES, 'UTF-8'),
                $amount
            );
        } elseif ($type === 'sent') {
            $title = '📤 Loan Request Sent';
            $message = sprintf(
                '<div class="loan-notification">
                    <strong>✅ Loan request sent successfully!</strong><br>
                    You offered <strong>%.2f DT</strong> to <strong>%s</strong><br>
                    📈 Rate: %.1f%% | Duration: %d months<br>
                    <strong>💵 Total to receive: %.2f DT</strong>
                </div>',
                $amount,
                htmlspecialchars($receiverName, ENT_QUOTES, 'UTF-8'),
                $interestRate,
                $durationMonths,
                $total
            );
        } else {
            return;
        }
       
        $this->addNotification($title, $message, $user, 'info', $loanId, 'friend_loan');
    }

    /**
     * Récupère les notifications pour un utilisateur
     */
    public function getNotificationsForUser(Utilisateur $user, int $limit = 50): array
    {
        return $this->notificationRepository->findForUser($user, $limit);
    }

    /**
     * Récupère le nombre de notifications non lues
     */
    public function getUnreadCountForUser(Utilisateur $user): int
    {
        return $this->notificationRepository->countUnreadForUser($user);
    }

    /**
     * Marque une notification comme lue
     */
    public function markAsRead(int $id, Utilisateur $user): void
    {
        $notification = $this->notificationRepository->find($id);
        if ($notification && $notification->getUser()->getId() === $user->getId()) {
            $notification->setIsRead(true);
            $this->entityManager->flush();
        }
    }

    /**
     * Marque toutes les notifications comme lues
     */
    public function markAllAsRead(Utilisateur $user): void
    {
        $this->notificationRepository->markAllAsReadForUser($user);
    }

    /**
     * Supprime une notification
     */
    public function deleteNotification(int $id, Utilisateur $user): void
    {
        $notification = $this->notificationRepository->find($id);
        if ($notification && $notification->getUser()->getId() === $user->getId()) {
            $this->entityManager->remove($notification);
            $this->entityManager->flush();
        }
    }

    /**
     * Supprime toutes les notifications d'un utilisateur
     */
    public function deleteAllForUser(Utilisateur $user): void
    {
        $notifications = $this->notificationRepository->findForUser($user);
        foreach ($notifications as $notification) {
            $this->entityManager->remove($notification);
        }
        $this->entityManager->flush();
    }

    /**
     * Supprime toutes les notifications liées à un prêt pour un utilisateur
     *
     * @param int $loanId L'ID du prêt
     * @param Utilisateur $user L'utilisateur cible
     * @param string|null $action Action spécifique à filtrer (received, accepted, etc.)
     */
    public function deleteLoanNotifications(int $loanId, Utilisateur $user, ?string $action = null): void
    {
        $qb = $this->notificationRepository->createQueryBuilder('n')
            ->where('n.user = :user')
            ->andWhere('n.relatedId = :loanId')
            ->andWhere('n.relatedType = :type')
            ->setParameter('user', $user)
            ->setParameter('loanId', $loanId)
            ->setParameter('type', 'friend_loan');
        
        if ($action !== null) {
            // Filtrer par le contenu du message pour trouver la notification "received"
            if ($action === 'received') {
                $qb->andWhere('n.message LIKE :actionPattern')
                   ->setParameter('actionPattern', '%wants to lend you%');
            } elseif ($action === 'accepted') {
                $qb->andWhere('n.message LIKE :actionPattern')
                   ->setParameter('actionPattern', '%has accepted your loan%');
            } elseif ($action === 'declined') {
                $qb->andWhere('n.message LIKE :actionPattern')
                   ->setParameter('actionPattern', '%has declined your loan%');
            }
        }
        
        $notifications = $qb->getQuery()->getResult();
        
        foreach ($notifications as $notification) {
            $this->entityManager->remove($notification);
        }
        
        $this->entityManager->flush();
    }
}