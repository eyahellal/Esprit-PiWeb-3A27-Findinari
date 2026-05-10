<?php

namespace App\Service;

use App\Entity\user\Utilisateur;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SimpleNotificationService
{
    private const SESSION_KEY = 'user_notifications';
   
    /** @var SessionInterface */
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
       
        if (!$this->session->has(self::SESSION_KEY)) {
            $this->session->set(self::SESSION_KEY, []);
        }
    }

    /**
     * Ajoute une notification pour un utilisateur spécifique
     *
     * @param string $title Le titre de la notification
     * @param string $message Le message de la notification
     * @param string $type Le type (info, success, warning, danger)
     * @param Utilisateur|null $user L'utilisateur cible (optionnel)
     */
    public function addNotification(string $title, string $message, string $type = 'info', ?Utilisateur $user = null): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        $notification = [
            'id' => uniqid('', true),
            'title' => $title,
            'message' => $message,
            'type' => $type,
            'createdAt' => date('Y-m-d H:i:s'),
            'isRead' => false,
            'userId' => $user?->getId()
        ];
       
        array_unshift($notifications, $notification);
       
        // Keep only last 50 notifications
        $notifications = array_slice($notifications, 0, 50);
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    /**
     * Ajoute une notification pour un prêt entre amis
     *
     * @param array{
     *     action?: string,
     *     loanId?: int|null,
     *     senderName?: string,
     *     receiverName?: string,
     *     amount?: float|int,
     *     interestRate?: float|int,
     *     durationMonths?: int,
     *     total?: float|int
     * } $data
     * @param Utilisateur|null $user L'utilisateur cible
     */
    public function addFriendLoanNotification(array $data, ?Utilisateur $user = null): void
    {
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
                        <a href="/friend-loan/accept-with-wallet/%d" class="btn btn-sm btn-success" style="background: #28a745; color: white; padding: 4px 12px; border-radius: 20px; text-decoration: none; margin-right: 8px;">✓ Accept</a>
                        <button onclick="declineLoan(%d)" class="btn btn-sm btn-danger" style="background: #dc3545; color: white; border: none; padding: 4px 12px; border-radius: 20px; cursor: pointer;">✗ Decline</button>
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
                    <strong>%s</strong> has accepted your loan of <strong>%.2f DT</strong>.<br>
                    They will repay <strong>%.2f DT</strong> in %d months.
                </div>',
                htmlspecialchars($receiverName, ENT_QUOTES, 'UTF-8'),
                $amount,
                $total,
                $durationMonths
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
       
        $this->addNotification($title, $message, 'info', $user);
    }

    /**
     * Récupère toutes les notifications
     *
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool,
     *     userId: int|null
     * }>
     */
    public function getNotifications(): array
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        return $notifications;
    }

    /**
     * Récupère les notifications pour un utilisateur spécifique
     *
     * @param Utilisateur $user L'utilisateur
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool,
     *     userId: int|null
     * }>
     */
    public function getNotificationsForUser(Utilisateur $user): array
    {
        $all = $this->getNotifications();
       
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $userNotifications
         */
        $userNotifications = array_values(array_filter($all, function($notification) use ($user) {
            return $notification['userId'] === $user->getId();
        }));
       
        return $userNotifications;
    }

    /**
     * Récupère les notifications non lues pour un utilisateur
     *
     * @param Utilisateur $user L'utilisateur
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool,
     *     userId: int|null
     * }>
     */
    public function getUnreadNotificationsForUser(Utilisateur $user): array
    {
        $userNotifications = $this->getNotificationsForUser($user);
       
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $unread
         */
        $unread = array_values(array_filter($userNotifications, function(array $notification): bool {
            return !$notification['isRead'];
        }));
       
        return $unread;
    }

    /**
     * Récupère le nombre de notifications non lues pour un utilisateur
     */
    public function getUnreadCountForUser(Utilisateur $user): int
    {
        return count($this->getUnreadNotificationsForUser($user));
    }

    /**
     * Récupère toutes les notifications (sans filtre utilisateur - pour compatibilité)
     *
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool,
     *     userId: int|null
     * }>
     */
    public function getAllNotifications(): array
    {
        return $this->getNotifications();
    }

    /**
     * Récupère les notifications non lues (sans filtre - pour compatibilité)
     *
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool,
     *     userId: int|null
     * }>
     */
    public function getUnreadNotifications(): array
    {
        $notifications = $this->getNotifications();
       
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $unread
         */
        $unread = array_values(array_filter($notifications, function(array $notification): bool {
            return !$notification['isRead'];
        }));
       
        return $unread;
    }

    /**
     * Récupère le nombre de notifications non lues (pour compatibilité)
     */
    public function getUnreadCount(): int
    {
        return count($this->getUnreadNotifications());
    }

    /**
     * Marque une notification comme lue
     */
    public function markAsRead(string $id): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        foreach ($notifications as $key => $notification) {
            if ($notification['id'] === $id) {
                $notifications[$key]['isRead'] = true;
                break;
            }
        }
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    /**
     * Marque toutes les notifications comme lues pour un utilisateur
     */
    public function markAllAsReadForUser(Utilisateur $user): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        foreach ($notifications as $key => $notification) {
            if ($notification['userId'] === $user->getId()) {
                $notifications[$key]['isRead'] = true;
            }
        }
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    /**
     * Marque toutes les notifications comme lues (pour compatibilité)
     */
    public function markAllAsRead(): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        foreach ($notifications as $key => $notification) {
            $notifications[$key]['isRead'] = true;
        }
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    /**
     * Supprime une notification
     */
    public function deleteNotification(string $id): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        foreach ($notifications as $key => $notification) {
            if ($notification['id'] === $id) {
                unset($notifications[$key]);
                break;
            }
        }
       
        $this->session->set(self::SESSION_KEY, array_values($notifications));
    }

    /**
     * Supprime toutes les notifications d'un utilisateur
     */
    public function deleteAllNotificationsForUser(Utilisateur $user): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool,
         *     userId: int|null
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        $notifications = array_values(array_filter($notifications, function($notification) use ($user) {
            return $notification['userId'] !== $user->getId();
        }));
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    /**
     * Supprime toutes les notifications (pour compatibilité)
     */
    public function deleteAllNotifications(): void
    {
        $this->session->set(self::SESSION_KEY, []);
    }
}