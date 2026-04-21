<?php

namespace App\Controller\advancedfeature;

use App\Service\MaturityAlertService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AlertController extends AbstractController
{
    #[Route('/alerts/maturity', name: 'app_alerts_maturity', methods: ['GET'])]
    public function getMaturityAlerts(MaturityAlertService $alertService): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->json(['alerts' => []]);
        }
        
        $alerts = $alertService->getMaturityAlerts($user);
        
        $formattedAlerts = [];
        foreach ($alerts as $alert) {
            $formattedAlerts[] = [
                'id' => $alert['id'],
                'obligationName' => $alert['obligationName'],
                'amount' => number_format($alert['amount'], 2),
                'maturityDate' => $alert['maturityDate']->format('d/m/Y'),
                'daysLeft' => $alert['daysLeft'],
                'expectedReturn' => number_format($alert['expectedReturn'], 2),
                'severity' => $alert['severity']
            ];
        }
        
        return $this->json([
            'alerts' => $formattedAlerts,
            'count' => count($formattedAlerts),
            'hasAlerts' => count($formattedAlerts) > 0
        ]);
    }
}