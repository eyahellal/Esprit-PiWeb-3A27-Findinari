<?php

namespace App\Controller\advancedfeature;

use App\Entity\user\Utilisateur;
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
       
        // Vérifier si l'utilisateur est connecté et est une instance de Utilisateur
        if (!$user instanceof Utilisateur) {
            return $this->json(['alerts' => [], 'count' => 0, 'hasAlerts' => false]);
        }
       
        $alerts = $alertService->getMaturityAlerts($user);
       
        $formattedAlerts = [];
        foreach ($alerts as $alert) {
            // Vérification des clés existantes pour éviter les erreurs
            $maturityDate = $alert['maturityDate'] ?? null;
            $formattedAlerts[] = [
                'id' => $alert['id'] ?? null,
                'obligationName' => $alert['obligationName'] ?? 'Unknown',
                'amount' => number_format($alert['amount'] ?? 0, 2),
                'maturityDate' => $maturityDate instanceof \DateTime ? $maturityDate->format('d/m/Y') : 'N/A',
                'daysLeft' => $alert['daysLeft'] ?? 0,
                'expectedReturn' => number_format($alert['expectedReturn'] ?? 0, 2),
                'severity' => $alert['severity'] ?? 'info'
            ];
        }
       
        $alertsCount = count($formattedAlerts);
       
        return $this->json([
            'alerts' => $formattedAlerts,
            'count' => $alertsCount,
            'hasAlerts' => $alertsCount > 0
        ]);
    }
}