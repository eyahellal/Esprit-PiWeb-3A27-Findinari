<?php
// src/Controller/advancedfeature/NotificationController.php
namespace App\Controller\advancedfeature;

use App\Entity\user\Utilisateur;
use App\Service\DatabaseNotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class NotificationController extends AbstractController
{
    #[Route('/notifications', name: 'app_notifications')]
    public function index(DatabaseNotificationService $notificationService): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user instanceof Utilisateur) {
            return $this->json(['notifications' => [], 'unreadCount' => 0]);
        }
        
        $notifications = $notificationService->getNotificationsForUser($user);
        $unreadCount = $notificationService->getUnreadCountForUser($user);
        
        $formatted = [];
        foreach ($notifications as $notif) {
            $formatted[] = [
                'id' => $notif->getId(),
                'title' => $notif->getTitle(),
                'message' => $notif->getMessage(),
                'type' => $notif->getType(),
                'createdAt' => $notif->getCreatedAt()->format('Y-m-d H:i:s'),
                'isRead' => $notif->isRead(),
                'userId' => $notif->getUser()->getId()
            ];
        }
        
        return $this->json([
            'notifications' => $formatted,
            'unreadCount' => $unreadCount
        ]);
    }
    
    #[Route('/notifications/mark-read', name: 'app_notification_mark_read', methods: ['POST'])]
    public function markAsRead(Request $request, DatabaseNotificationService $notificationService): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user instanceof Utilisateur) {
            return $this->json(['success' => false, 'error' => 'User not authenticated'], 401);
        }
        
        $data = json_decode($request->getContent(), true);
        $id = $data['id'] ?? null;
        
        if ($id) {
            $notificationService->markAsRead((int)$id, $user);
        }
        
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/mark-all-read', name: 'app_notification_mark_all_read', methods: ['POST'])]
    public function markAllAsRead(DatabaseNotificationService $notificationService): JsonResponse
    {
        $user = $this->getUser();
        
        if ($user instanceof Utilisateur) {
            $notificationService->markAllAsRead($user);
        }
        
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/delete', name: 'app_notification_delete', methods: ['POST'])]
    public function deleteNotification(Request $request, DatabaseNotificationService $notificationService): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user instanceof Utilisateur) {
            return $this->json(['success' => false, 'error' => 'User not authenticated'], 401);
        }
        
        $data = json_decode($request->getContent(), true);
        $id = $data['id'] ?? null;
        
        if ($id) {
            $notificationService->deleteNotification((int)$id, $user);
        }
        
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/delete-all', name: 'app_notification_delete_all', methods: ['POST'])]
    public function deleteAllNotifications(DatabaseNotificationService $notificationService): JsonResponse
    {
        $user = $this->getUser();
        
        if ($user instanceof Utilisateur) {
            $notificationService->deleteAllForUser($user);
        }
        
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/unread-count', name: 'app_notification_unread_count', methods: ['GET'])]
    public function getUnreadCount(DatabaseNotificationService $notificationService): JsonResponse
    {
        $user = $this->getUser();
        
        if ($user instanceof Utilisateur) {
            $count = $notificationService->getUnreadCountForUser($user);
        } else {
            $count = 0;
        }
        
        return $this->json(['count' => $count]);
    }
}