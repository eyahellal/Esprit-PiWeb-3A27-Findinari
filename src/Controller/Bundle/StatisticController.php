<?php

namespace App\Controller\Bundle;

use App\Bundle\Statistic\StatisticService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StatisticController extends AbstractController
{
    #[Route('/statistics', name: 'app_statistics')]
    public function index(StatisticService $statisticService): Response
    {
        $investmentStats = $statisticService->getInvestmentStats();
        $walletStats = $statisticService->getWalletStats();
        $obligationRanking = $statisticService->getObligationRanking();
        $maturityForecast = $statisticService->getMaturityForecast(6);
        
        return $this->render('statistics/index.html.twig', [
            'investmentStats' => $investmentStats,
            'walletStats' => $walletStats,
            'obligationRanking' => $obligationRanking,
            'maturityForecast' => $maturityForecast,
        ]);
    }
    
    #[Route('/api/statistics/investment', name: 'api_statistics_investment', methods: ['GET'])]
    public function getInvestmentStats(StatisticService $statisticService): JsonResponse
    {
        return $this->json($statisticService->getInvestmentStats());
    }
    
    #[Route('/api/statistics/wallet', name: 'api_statistics_wallet', methods: ['GET'])]
    public function getWalletStats(StatisticService $statisticService): JsonResponse
    {
        return $this->json($statisticService->getWalletStats());
    }
    
    #[Route('/api/statistics/obligation-ranking', name: 'api_statistics_ranking', methods: ['GET'])]
    public function getObligationRanking(StatisticService $statisticService): JsonResponse
    {
        return $this->json($statisticService->getObligationRanking());
    }
    
    #[Route('/api/statistics/maturity-forecast', name: 'api_statistics_forecast', methods: ['GET'])]
    public function getMaturityForecast(StatisticService $statisticService): JsonResponse
    {
        return $this->json($statisticService->getMaturityForecast(6));
    }
    
    #[Route('/api/statistics/user-summary', name: 'api_statistics_user', methods: ['GET'])]
    public function getUserSummary(StatisticService $statisticService): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'User not authenticated'], 401);
        }
        return $this->json($statisticService->getUserInvestmentSummary($user));
    }
}