<?php

namespace App\Service;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\TransactionRepository;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;

class FinancialHealthService
{
    private $walletRepository;
    private $investmentRepository;
    private $obligationRepository;
    private $entityManager;

    public function __construct(
        WalletRepository $walletRepository,
        InvestissementobligationRepository $investmentRepository,
        ObligationRepository $obligationRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->walletRepository = $walletRepository;
        $this->investmentRepository = $investmentRepository;
        $this->obligationRepository = $obligationRepository;
        $this->entityManager = $entityManager;
    }

    public function calculateHealthScore(Utilisateur $user): array
    {
        // Get user's wallets
        $wallets = $this->walletRepository->findBy(['utilisateur' => $user]);
        
        if (empty($wallets)) {
            return $this->getEmptyScore();
        }
        
        $walletIds = [];
        $totalBalance = 0;
        foreach ($wallets as $wallet) {
            $walletIds[] = $wallet->getId();
            $totalBalance += $wallet->getSolde() ?? 0;
        }
        
        // Get investments
        $investments = $this->investmentRepository->createQueryBuilder('i')
            ->where('i.walletId IN (:walletIds)')
            ->setParameter('walletIds', $walletIds)
            ->getQuery()
            ->getResult();
        
        // Calculate metrics
        $savingsRateScore = $this->calculateSavingsRate($user, $totalBalance);
        $investmentRatioScore = $this->calculateInvestmentRatio($totalBalance, $investments);
        $diversificationScore = $this->calculateDiversification($investments);
        $emergencyFundScore = $this->calculateEmergencyFund($wallets, $totalBalance);
        $goalProgressScore = $this->calculateGoalProgress($user);
        
        // Calculate total score
        $totalScore = ($savingsRateScore * 0.25) + 
                      ($investmentRatioScore * 0.25) + 
                      ($diversificationScore * 0.20) + 
                      ($emergencyFundScore * 0.15) + 
                      ($goalProgressScore * 0.15);
        
        $totalScore = round($totalScore);
        
        // Generate recommendations
        $recommendations = $this->generateRecommendations(
            $savingsRateScore,
            $investmentRatioScore,
            $diversificationScore,
            $emergencyFundScore,
            $goalProgressScore,
            $investments,
            $totalBalance
        );
        
        return [
            'score' => $totalScore,
            'level' => $this->getScoreLevel($totalScore),
            'color' => $this->getScoreColor($totalScore),
            'metrics' => [
                'savingsRate' => $savingsRateScore,
                'investmentRatio' => $investmentRatioScore,
                'diversification' => $diversificationScore,
                'emergencyFund' => $emergencyFundScore,
                'goalProgress' => $goalProgressScore,
            ],
            'recommendations' => $recommendations,
            'totalBalance' => $totalBalance,
            'investmentsCount' => count($investments),
            'walletsCount' => count($wallets),
        ];
    }
    
    private function calculateSavingsRate(Utilisateur $user, float $totalBalance): int
    {
        // For demo purposes, calculate based on wallet balance
        // In real implementation, you'd use transaction history
        if ($totalBalance <= 0) return 0;
        if ($totalBalance < 500) return 20;
        if ($totalBalance < 1000) return 40;
        if ($totalBalance < 5000) return 60;
        if ($totalBalance < 10000) return 80;
        return 100;
    }
    
    private function calculateInvestmentRatio(float $totalBalance, array $investments): int
    {
        $totalInvested = 0;
        foreach ($investments as $investment) {
            $totalInvested += $investment->getMontantInvesti();
        }
        
        if ($totalBalance <= 0) return 0;
        
        $ratio = ($totalInvested / $totalBalance) * 100;
        
        if ($ratio < 10) return 20;
        if ($ratio < 25) return 40;
        if ($ratio < 40) return 60;
        if ($ratio < 60) return 80;
        return 100;
    }
    
    private function calculateDiversification(array $investments): int
    {
        if (empty($investments)) return 0;
        
        $uniqueObligations = [];
        foreach ($investments as $investment) {
            $obligationId = $investment->getObligationId();
            if ($obligationId && !in_array($obligationId, $uniqueObligations)) {
                $uniqueObligations[] = $obligationId;
            }
        }
        
        $count = count($uniqueObligations);
        
        if ($count == 0) return 0;
        if ($count == 1) return 30;
        if ($count == 2) return 60;
        if ($count == 3) return 80;
        return 100;
    }
    
    private function calculateEmergencyFund(array $wallets, float $totalBalance): int
    {
        // Estimate monthly expenses as 10% of balance (simplified)
        $monthlyExpenses = $totalBalance * 0.1;
        if ($monthlyExpenses <= 0) return 0;
        
        $monthsCovered = $totalBalance / $monthlyExpenses;
        
        if ($monthsCovered < 1) return 10;
        if ($monthsCovered < 2) return 30;
        if ($monthsCovered < 3) return 50;
        if ($monthsCovered < 6) return 70;
        return 100;
    }
    
    private function calculateGoalProgress(Utilisateur $user): int
    {
        // Check if user has any goals (simplified)
        // In real implementation, query goals from database
        return 50; // Default mid score
    }
    
    private function generateRecommendations(
        int $savingsRateScore,
        int $investmentRatioScore,
        int $diversificationScore,
        int $emergencyFundScore,
        int $goalProgressScore,
        array $investments,
        float $totalBalance
    ): array {
        $recommendations = [];
        
        // Savings recommendations
        if ($savingsRateScore < 60) {
            $recommendations[] = [
                'type' => 'savings',
                'priority' => 'high',
                'title' => '💪 Improve Your Savings Rate',
                'message' => 'Try to save at least 20% of your income. Start by tracking your expenses and cutting unnecessary costs.',
                'action' => 'Create a monthly budget and stick to it.'
            ];
        }
        
        // Investment recommendations
        if ($investmentRatioScore < 60) {
            $recommendations[] = [
                'type' => 'investment',
                'priority' => 'high',
                'title' => '📈 Increase Your Investments',
                'message' => 'You have a low investment ratio. Consider investing more of your savings to grow your wealth.',
                'action' => 'Browse available obligations and start investing today.'
            ];
        }
        
        // Diversification recommendations
        if ($diversificationScore < 60) {
            $recommendations[] = [
                'type' => 'diversification',
                'priority' => 'medium',
                'title' => '🔄 Diversify Your Portfolio',
                'message' => 'Your portfolio is not well diversified. Spread your investments across different obligation types.',
                'action' => 'Explore different obligation options with varying risk levels.'
            ];
        }
        
        // Emergency fund recommendations
        if ($emergencyFundScore < 50) {
            $recommendations[] = [
                'type' => 'emergency',
                'priority' => 'high',
                'title' => '🚨 Build Your Emergency Fund',
                'message' => 'You need at least 3-6 months of expenses in savings for emergencies.',
                'action' => 'Set up automatic transfers to a dedicated emergency wallet.'
            ];
        }
        
        // General positive recommendation if everything is good
        if (empty($recommendations)) {
            $recommendations[] = [
                'type' => 'positive',
                'priority' => 'low',
                'title' => '🎉 Excellent Financial Health!',
                'message' => 'You\'re doing great! Keep up the good work and continue monitoring your finances.',
                'action' => 'Share your success with the community and help others.'
            ];
        }
        
        // Add investment suggestion if no investments
        if (empty($investments) && $totalBalance > 1000) {
            $recommendations[] = [
                'type' => 'opportunity',
                'priority' => 'medium',
                'title' => '💼 Start Investing',
                'message' => 'You have available funds that could be working for you through investments.',
                'action' => 'Browse obligations and make your first investment.'
            ];
        }
        
        return $recommendations;
    }
    
    private function getScoreLevel(int $score): string
    {
        if ($score >= 80) return 'Excellent';
        if ($score >= 60) return 'Good';
        if ($score >= 40) return 'Average';
        if ($score >= 20) return 'Poor';
        return 'Critical';
    }
    
    private function getScoreColor(int $score): string
    {
        if ($score >= 80) return 'green';
        if ($score >= 60) return 'blue';
        if ($score >= 40) return 'yellow';
        if ($score >= 20) return 'orange';
        return 'red';
    }
    
    private function getEmptyScore(): array
    {
        return [
            'score' => 0,
            'level' => 'No Data',
            'color' => 'gray',
            'metrics' => [
                'savingsRate' => 0,
                'investmentRatio' => 0,
                'diversification' => 0,
                'emergencyFund' => 0,
                'goalProgress' => 0,
            ],
            'recommendations' => [
                [
                    'type' => 'getting_started',
                    'priority' => 'high',
                    'title' => '🚀 Get Started with Fin-Dinari',
                    'message' => 'Create your first wallet to start tracking your financial health.',
                    'action' => 'Go to Wallets and create a new wallet.'
                ]
            ],
            'totalBalance' => 0,
            'investmentsCount' => 0,
            'walletsCount' => 0,
        ];
    }
}