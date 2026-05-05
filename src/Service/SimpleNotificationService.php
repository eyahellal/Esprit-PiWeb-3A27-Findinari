<?php

namespace App\Service;

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
     */
    public function addFriendLoanNotification(array $data): void
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
                '<strong>%s</strong> has accepted your loan of <strong>%.2f DT</strong>.<br>
                They will repay <strong>%.2f DT</strong> in %d months.',
                htmlspecialchars($receiverName, ENT_QUOTES, 'UTF-8'),
                $amount,
                $total,
                $durationMonths
            );
        } elseif ($type === 'declined') {
            $title = '❌ Loan Declined';
            $message = sprintf(
                '<strong>%s</strong> has declined your loan request of <strong>%.2f DT</strong>.',
                htmlspecialchars($receiverName, ENT_QUOTES, 'UTF-8'),
                $amount
            );
        } else {
            return;
        }
       
        $this->addNotification($title, $message, 'info');
    }

    /**
     * @param string $title  The notification title
     * @param string $message The notification message
     * @param string $type   The notification type (info, success, warning, danger)
     */
    public function addNotification(string $title, string $message, string $type = 'info'): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        $notification = [
            'id' => uniqid('', true),
            'title' => $title,
            'message' => $message,
            'type' => $type,
            'createdAt' => date('Y-m-d H:i:s'),
            'isRead' => false
        ];
       
        array_unshift($notifications, $notification);
       
        // Keep only last 50 notifications
        $notifications = array_slice($notifications, 0, 50);
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    /**
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool
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
         *     isRead: bool
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        return $notifications;
    }

    /**
     * @return list<array{
     *     id: string,
     *     title: string,
     *     message: string,
     *     type: string,
     *     createdAt: string,
     *     isRead: bool
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
         *     isRead: bool
         * }> $unread
         */
        $unread = array_values(array_filter($notifications, function(array $notification): bool {
            return !$notification['isRead'];
        }));
       
        return $unread;
    }

    public function getUnreadCount(): int
    {
        $notifications = $this->getNotifications();
        $unread = array_filter($notifications, function(array $notification): bool {
            return !$notification['isRead'];
        });
        return count($unread);
    }

    public function markAsRead(string $id): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool
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

    public function markAllAsRead(): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool
         * }> $notifications
         */
        $notifications = $this->session->get(self::SESSION_KEY, []);
       
        foreach ($notifications as $key => $notification) {
            $notifications[$key]['isRead'] = true;
        }
       
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    public function deleteNotification(string $id): void
    {
        /** @var list<array{
         *     id: string,
         *     title: string,
         *     message: string,
         *     type: string,
         *     createdAt: string,
         *     isRead: bool
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

    public function deleteAllNotifications(): void
    {
        $this->session->set(self::SESSION_KEY, []);
    }
}