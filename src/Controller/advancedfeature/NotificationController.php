<?php

namespace App\Controller\advancedfeature;

use App\Service\SimpleNotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class NotificationController extends AbstractController
{
    #[Route('/notifications', name: 'app_notifications')]
    public function index(SimpleNotificationService $notificationService): JsonResponse
    {
        $notifications = $notificationService->getNotifications();
        $unreadCount = $notificationService->getUnreadCount();
        
        return $this->json([
            'notifications' => $notifications,
            'unreadCount' => $unreadCount
        ]);
    }
    
    #[Route('/notifications/mark-read', name: 'app_notification_mark_read', methods: ['POST'])]
    public function markAsRead(Request $request, SimpleNotificationService $notificationService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $id = $data['id'] ?? null;
        
        if ($id) {
            $notificationService->markAsRead($id);
        }
        
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/mark-all-read', name: 'app_notification_mark_all_read', methods: ['POST'])]
    public function markAllAsRead(SimpleNotificationService $notificationService): JsonResponse
    {
        $notificationService->markAllAsRead();
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/delete', name: 'app_notification_delete', methods: ['POST'])]
    public function deleteNotification(Request $request, SimpleNotificationService $notificationService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $id = $data['id'] ?? null;
        
        if ($id) {
            $notificationService->deleteNotification($id);
        }
        
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/delete-all', name: 'app_notification_delete_all', methods: ['POST'])]
    public function deleteAllNotifications(SimpleNotificationService $notificationService): JsonResponse
    {
        $notificationService->deleteAllNotifications();
        return $this->json(['success' => true]);
    }
    
    #[Route('/notifications/unread-count', name: 'app_notification_unread_count', methods: ['GET'])]
    public function getUnreadCount(SimpleNotificationService $notificationService): JsonResponse
    {
        return $this->json(['count' => $notificationService->getUnreadCount()]);
    }
}