<?php

namespace App\Service;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\InvestissementobligationRepository;
use App\Repository\WalletRepository;

class FinancialHealthService
{
    private WalletRepository $walletRepository;
    private InvestissementobligationRepository $investmentRepository;

    public function __construct(
        WalletRepository $walletRepository,
        InvestissementobligationRepository $investmentRepository
    ) {
        $this->walletRepository = $walletRepository;
        $this->investmentRepository = $investmentRepository;
    }

    /**
     * @return array{
     *     score:int,
     *     level:string,
     *     color:string,
     *     metrics:array<string,int>,
     *     recommendations:list<array{
     *         type:string,
     *         priority:string,
     *         title:string,
     *         message:string,
     *         action:string
     *     }>,
     *     totalBalance:float,
     *     investmentsCount:int,
     *     walletsCount:int
     * }
     */
    public function calculateHealthScore(Utilisateur $user): array
    {
        /** @var list<Wallet> $wallets */
        $wallets = $this->walletRepository->findBy(['utilisateur' => $user]);

        if ($wallets === []) {
            return $this->getEmptyScore();
        }

        $walletIds = [];
        $totalBalance = 0.0;

        foreach ($wallets as $wallet) {
            $walletIds[] = $wallet->getId();
            $totalBalance += (float) ($wallet->getSolde() ?? 0);
        }

        /** @var list<Investissementobligation> $investments */
        $investments = $this->investmentRepository->createQueryBuilder('i')
            ->where('i.walletId IN (:walletIds)')
            ->setParameter('walletIds', $walletIds)
            ->getQuery()
            ->getResult();

        $savingsRateScore = $this->calculateSavingsRate($totalBalance);
        $investmentRatioScore = $this->calculateInvestmentRatio($totalBalance, $investments);
        $diversificationScore = $this->calculateDiversification($investments);
        $emergencyFundScore = $this->calculateEmergencyFund($totalBalance);
        $goalProgressScore = 50;

        $weightedScore =
            ($savingsRateScore * 0.25) +
            ($investmentRatioScore * 0.25) +
            ($diversificationScore * 0.20) +
            ($emergencyFundScore * 0.15) +
            ($goalProgressScore * 0.15);

        $totalScore = (int) round($weightedScore);

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
            'recommendations' => $this->generateRecommendations(
                $savingsRateScore,
                $investmentRatioScore,
                $diversificationScore,
                $emergencyFundScore,
                $investments,
                $totalBalance
            ),
            'totalBalance' => $totalBalance,
            'investmentsCount' => count($investments),
            'walletsCount' => count($wallets),
        ];
    }

    private function calculateSavingsRate(float $totalBalance): int
    {
        if ($totalBalance <= 0) return 0;
        if ($totalBalance < 500) return 20;
        if ($totalBalance < 1000) return 40;
        if ($totalBalance < 5000) return 60;
        if ($totalBalance < 10000) return 80;
        return 100;
    }

    /**
     * @param list<Investissementobligation> $investments
     */
    private function calculateInvestmentRatio(float $totalBalance, array $investments): int
    {
        $totalInvested = 0.0;

        foreach ($investments as $inv) {
            $totalInvested += (float) $inv->getMontantInvesti();
        }

        if ($totalBalance <= 0) return 0;

        $ratio = ($totalInvested / $totalBalance) * 100;

        if ($ratio < 10) return 20;
        if ($ratio < 25) return 40;
        if ($ratio < 40) return 60;
        if ($ratio < 60) return 80;
        return 100;
    }

    /**
     * @param list<Investissementobligation> $investments
     */
    private function calculateDiversification(array $investments): int
    {
        if ($investments === []) return 0;

        $ids = [];

        foreach ($investments as $inv) {
            $id = $inv->getObligationId();
            if ($id !== null && !in_array($id, $ids, true)) {
                $ids[] = $id;
            }
        }

        return match (count($ids)) {
            0 => 0,
            1 => 30,
            2 => 60,
            3 => 80,
            default => 100
        };
    }

    private function calculateEmergencyFund(float $totalBalance): int
    {
        $monthly = $totalBalance * 0.1;

        if ($monthly <= 0) return 0;

        $months = $totalBalance / $monthly;

        if ($months < 1) return 10;
        if ($months < 2) return 30;
        if ($months < 3) return 50;
        if ($months < 6) return 70;
        return 100;
    }

    /**
     * @param list<Investissementobligation> $investments
     * @return list<array{type:string, priority:string, title:string, message:string, action:string}>
     */
    private function generateRecommendations(
        int $s,
        int $i,
        int $d,
        int $e,
        array $investments,
        float $balance
    ): array {
        $rec = [];

        if ($s < 60) {
            $rec[] = [
                'type' => 'savings',
                'priority' => 'high',
                'title' => 'Improve savings',
                'message' => 'Save more',
                'action' => 'Make a budget'
            ];
        }

        if ($i < 60) {
            $rec[] = [
                'type' => 'investment',
                'priority' => 'high',
                'title' => 'Invest more',
                'message' => 'Low ratio',
                'action' => 'Start investing'
            ];
        }

        if ($rec === []) {
            $rec[] = [
                'type' => 'positive',
                'priority' => 'low',
                'title' => 'Good job',
                'message' => 'Keep going',
                'action' => 'Stay consistent'
            ];
        }

        if ($investments === [] && $balance > 1000) {
            $rec[] = [
                'type' => 'opportunity',
                'priority' => 'medium',
                'title' => 'Start investing',
                'message' => 'Idle money',
                'action' => 'Invest'
            ];
        }

        return $rec;
    }

    private function getScoreLevel(int $score): string
    {
        return match (true) {
            $score >= 80 => 'Excellent',
            $score >= 60 => 'Good',
            $score >= 40 => 'Average',
            $score >= 20 => 'Poor',
            default => 'Critical'
        };
    }

    private function getScoreColor(int $score): string
    {
        return match (true) {
            $score >= 80 => 'green',
            $score >= 60 => 'blue',
            $score >= 40 => 'yellow',
            $score >= 20 => 'orange',
            default => 'red'
        };
    }

    /**
     * @return array{
     *     score:int,
     *     level:string,
     *     color:string,
     *     metrics:array<string,int>,
     *     recommendations:list<array{type:string, priority:string, title:string, message:string, action:string}>,
     *     totalBalance:float,
     *     investmentsCount:int,
     *     walletsCount:int
     * }
     */
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
            'recommendations' => [],
            'totalBalance' => 0,
            'investmentsCount' => 0,
            'walletsCount' => 0,
        ];
    }
}