<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SimpleNotificationService
{
    private const SESSION_KEY = 'user_notifications';
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
        
        if (!$this->session->has(self::SESSION_KEY)) {
            $this->session->set(self::SESSION_KEY, []);
        }
    }

    public function addNotification(string $title, string $message, string $type = 'info'): void
    {
        $notifications = $this->session->get(self::SESSION_KEY);
        
        $notification = [
            'id' => uniqid(),
            'title' => $title,
            'message' => $message,
            'type' => $type, // 'success', 'warning', 'danger', 'info'
            'createdAt' => date('Y-m-d H:i:s'),
            'isRead' => false
        ];
        
        array_unshift($notifications, $notification); // Add to beginning
        
        // Keep only last 50 notifications
        $notifications = array_slice($notifications, 0, 50);
        
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    public function getNotifications(): array
    {
        return $this->session->get(self::SESSION_KEY, []);
    }

    public function getUnreadCount(): int
    {
        $notifications = $this->session->get(self::SESSION_KEY, []);
        $unread = array_filter($notifications, function($n) {
            return !$n['isRead'];
        });
        return count($unread);
    }

    public function markAsRead(string $id): void
    {
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
        $notifications = $this->session->get(self::SESSION_KEY, []);
        
        foreach ($notifications as $key => $notification) {
            $notifications[$key]['isRead'] = true;
        }
        
        $this->session->set(self::SESSION_KEY, $notifications);
    }

    public function deleteNotification(string $id): void
    {
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