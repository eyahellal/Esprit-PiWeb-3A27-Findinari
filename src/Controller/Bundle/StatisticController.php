<?php

namespace App\Controller\Bundle;

use App\Bundle\Statistic\StatisticService;
use App\Entity\user\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StatisticController extends AbstractController
{
    private StatisticService $statisticService;

    public function __construct(StatisticService $statisticService)
    {
        $this->statisticService = $statisticService;
    }

    #[Route('/statistics', name: 'app_statistics', methods: ['GET'])]
    public function index(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
       
        // Vérifier que l'utilisateur est une instance de Utilisateur
        if (!$user instanceof Utilisateur) {
            // Si l'utilisateur n'est pas trouvé ou n'est pas du bon type
            return $this->redirectToRoute('app_front_login');
        }
       
        // Récupérer les données statistiques
        $investmentStats = $this->statisticService->getInvestmentStats();
        $walletStats = $this->statisticService->getWalletStats();
        $obligationRanking = $this->statisticService->getObligationRanking();
        $maturityForecast = $this->statisticService->getMaturityForecast(6);
       
        // Récupérer le résumé des investissements de l'utilisateur
        $userInvestmentSummary = $this->statisticService->getUserInvestmentSummary($user);
       
        return $this->render('statistics/index.html.twig', [
            'investmentStats' => $investmentStats,
            'walletStats' => $walletStats,
            'obligationRanking' => $obligationRanking,
            'maturityForecast' => $maturityForecast,
            'userInvestmentSummary' => $userInvestmentSummary,
        ]);
    }
   
    #[Route('/statistics/investments', name: 'app_statistics_investments', methods: ['GET'])]
    public function investmentStats(): Response
    {
        $investmentStats = $this->statisticService->getInvestmentStats();
       
        return $this->render('statistics/investments.html.twig', [
            'stats' => $investmentStats,
        ]);
    }
   
    #[Route('/statistics/wallets', name: 'app_statistics_wallets', methods: ['GET'])]
    public function walletStats(): Response
    {
        $walletStats = $this->statisticService->getWalletStats();
        $obligationRanking = $this->statisticService->getObligationRanking();
       
        return $this->render('statistics/wallets.html.twig', [
            'walletStats' => $walletStats,
            'obligationRanking' => $obligationRanking,
        ]);
    }
   
    #[Route('/statistics/forecast', name: 'app_statistics_forecast', methods: ['GET'])]
    public function maturityForecast(): Response
    {
        $maturityForecast = $this->statisticService->getMaturityForecast(12);
       
        return $this->render('statistics/forecast.html.twig', [
            'forecast' => $maturityForecast,
        ]);
    }
}