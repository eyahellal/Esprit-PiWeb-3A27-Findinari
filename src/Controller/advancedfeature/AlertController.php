<?php

namespace App\Controller\advancedfeature;

use App\Entity\user\Utilisateur;
use App\Service\MaturityAlertService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AlertController extends AbstractController
{
    #[Route('/alerts/maturity', name: 'app_alerts_maturity', methods: ['GET'])]
    public function getMaturityAlerts(MaturityAlertService $alertService): JsonResponse
    {
        $user = $this->getUser();

        if (!$user instanceof Utilisateur) {
            return $this->json([
                'alerts' => [],
                'count' => 0,
                'hasAlerts' => false,
            ]);
        }

        $alerts = $alertService->getMaturityAlerts($user);

        $formattedAlerts = [];

        foreach ($alerts as $alert) {
            $maturityDate = $alert['maturityDate'];

            $formattedAlerts[] = [
                'id' => $alert['id'],
                'obligationName' => $alert['obligationName'],
                'amount' => number_format($alert['amount'], 2),
                'maturityDate' => $maturityDate->format('d/m/Y'),
                'daysLeft' => $alert['daysLeft'],
                'expectedReturn' => number_format($alert['expectedReturn'], 2),
                'severity' => $alert['severity'],
            ];
        }

        $alertsCount = count($formattedAlerts);

        return $this->json([
            'alerts' => $formattedAlerts,
            'count' => $alertsCount,
            'hasAlerts' => $alertsCount > 0,
        ]);
    }
}