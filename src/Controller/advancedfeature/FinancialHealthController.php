<?php

namespace App\Controller\advancedfeature;

use App\Service\FinancialHealthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FinancialHealthController extends AbstractController
{
    #[Route('/financial-health', name: 'app_financial_health')]
    public function index(FinancialHealthService $healthService): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_front_login');
        }
        
        $healthData = $healthService->calculateHealthScore($user);
        
        return $this->render('financial_health/index.html.twig', $healthData);
    }
}