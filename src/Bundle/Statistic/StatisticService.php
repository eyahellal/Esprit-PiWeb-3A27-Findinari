<?php

namespace App\Bundle\Statistic;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\management\Wallet;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;

class StatisticService
{
    private $investmentRepository;
    private $obligationRepository;
    private $walletRepository;
    private $entityManager;

    public function __construct(
        InvestissementobligationRepository $investmentRepository,
        ObligationRepository $obligationRepository,
        WalletRepository $walletRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->investmentRepository = $investmentRepository;
        $this->obligationRepository = $obligationRepository;
        $this->walletRepository = $walletRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * Get investment statistics for charts
     */
    public function getInvestmentStats(): array
    {
        $investments = $this->investmentRepository->findAll();
        
        $totalInvested = 0;
        $totalExpectedReturn = 0;
        $activeInvestments = 0;
        $maturedInvestments = 0;
        $byObligation = [];
        $monthlyData = [];
        
        $today = new \DateTime();
        
        foreach ($investments as $investment) {
            $amount = $investment->getMontantInvesti();
            $totalInvested += $amount;
            
            $obligation = $this->entityManager
                ->getRepository(Obligation::class)
                ->find($investment->getObligationId());
                
            if ($obligation) {
                $profit = $amount * ($obligation->getTauxInteret() / 100);
                $totalExpectedReturn += $amount + $profit;
                
                $name = $obligation->getNom();
                if (!isset($byObligation[$name])) {
                    $byObligation[$name] = 0;
                }
                $byObligation[$name] += $amount;
            }
            
            if ($investment->getDateMaturite() > $today) {
                $activeInvestments++;
            } else {
                $maturedInvestments++;
            }
            
            // Monthly data
            $month = $investment->getDateAchat()->format('Y-m');
            if (!isset($monthlyData[$month])) {
                $monthlyData[$month] = 0;
            }
            $monthlyData[$month] += $amount;
        }
        
        return [
            'totalInvested' => $totalInvested,
            'totalExpectedReturn' => $totalExpectedReturn,
            'activeInvestments' => $activeInvestments,
            'maturedInvestments' => $maturedInvestments,
            'totalInvestments' => count($investments),
            'byObligation' => $byObligation,
            'monthlyData' => $monthlyData,
        ];
    }

    /**
     * Get wallet statistics
     */
    public function getWalletStats(): array
    {
        $wallets = $this->walletRepository->findAll();
        
        $totalBalance = 0;
        $byCurrency = [];
        
        foreach ($wallets as $wallet) {
            $balance = $wallet->getSolde() ?? 0;
            $totalBalance += $balance;
            
            $currency = $wallet->getDevise();
            if (!isset($byCurrency[$currency])) {
                $byCurrency[$currency] = 0;
            }
            $byCurrency[$currency] += $balance;
        }
        
        return [
            'totalBalance' => $totalBalance,
            'totalWallets' => count($wallets),
            'byCurrency' => $byCurrency,
        ];
    }

    /**
     * Get obligation popularity ranking
     */
    public function getObligationRanking(): array
    {
        $obligations = $this->obligationRepository->findAll();
        $ranking = [];
        
        foreach ($obligations as $obligation) {
            $investments = $this->investmentRepository->findBy([
                'obligationId' => $obligation->getIdObligation()
            ]);
            
            $totalInvested = 0;
            foreach ($investments as $inv) {
                $totalInvested += $inv->getMontantInvesti();
            }
            
            $ranking[] = [
                'name' => $obligation->getNom(),
                'rate' => $obligation->getTauxInteret(),
                'duration' => $obligation->getDuree(),
                'totalInvested' => $totalInvested,
                'investorsCount' => count($investments),
            ];
        }
        
        usort($ranking, function($a, $b) {
            return $b['totalInvested'] <=> $a['totalInvested'];
        });
        
        return $ranking;
    }

    /**
     * Get maturity forecast for next months
     */
    public function getMaturityForecast(int $months = 6): array
    {
        $investments = $this->investmentRepository->findAll();
        $forecast = [];
        $today = new \DateTime();
        
        for ($i = 1; $i <= $months; $i++) {
            $month = (clone $today)->modify("+{$i} months");
            $monthKey = $month->format('Y-m');
            $forecast[$monthKey] = 0;
        }
        
        foreach ($investments as $investment) {
            $maturityDate = $investment->getDateMaturite();
            $diff = $today->diff($maturityDate);
            
            if ($diff->invert == 1 && $diff->m <= $months && $diff->y == 0) {
                $monthKey = $maturityDate->format('Y-m');
                if (isset($forecast[$monthKey])) {
                    $forecast[$monthKey] += $investment->getMontantInvesti();
                }
            }
        }
        
        return $forecast;
    }

    /**
     * Get user investment summary
     */
    public function getUserInvestmentSummary($user): array
    {
        $wallets = $this->walletRepository->findBy(['utilisateur' => $user]);
        $walletIds = array_map(function($w) { return $w->getId(); }, $wallets);
        
        $investments = $this->investmentRepository->createQueryBuilder('i')
            ->where('i.walletId IN (:walletIds)')
            ->setParameter('walletIds', $walletIds)
            ->getQuery()
            ->getResult();
        
        $totalInvested = 0;
        $activeCount = 0;
        $maturedCount = 0;
        $today = new \DateTime();
        
        foreach ($investments as $inv) {
            $totalInvested += $inv->getMontantInvesti();
            if ($inv->getDateMaturite() > $today) {
                $activeCount++;
            } else {
                $maturedCount++;
            }
        }
        
        return [
            'totalInvested' => $totalInvested,
            'totalInvestments' => count($investments),
            'activeInvestments' => $activeCount,
            'maturedInvestments' => $maturedCount,
        ];
    }
}