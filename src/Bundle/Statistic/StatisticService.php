<?php

namespace App\Bundle\Statistic;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;

class StatisticService
{
    private InvestissementobligationRepository $investmentRepository;
    private ObligationRepository $obligationRepository;
    private WalletRepository $walletRepository;
    private EntityManagerInterface $entityManager;

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
     *
     * @return array{
     *     totalInvested: float,
     *     totalExpectedReturn: float,
     *     activeInvestments: int,
     *     maturedInvestments: int,
     *     totalInvestments: int,
     *     byObligation: array<string, float>,
     *     monthlyData: array<string, float>
     * }
     */
    public function getInvestmentStats(): array
    {
        $investments = $this->investmentRepository->findAll();
       
        $totalInvested = 0.0;
        $totalExpectedReturn = 0.0;
        $activeInvestments = 0;
        $maturedInvestments = 0;
        $byObligation = [];
        $monthlyData = [];
       
        $today = new \DateTime();
       
        foreach ($investments as $investment) {
            $amount = (float)$investment->getMontantInvesti();
            $totalInvested += $amount;
           
            $obligation = $this->entityManager
                ->getRepository(Obligation::class)
                ->find($investment->getObligationId());
               
            if ($obligation instanceof Obligation) {
                $profit = $amount * ((float)$obligation->getTauxInteret() / 100);
                $totalExpectedReturn += $amount + $profit;
               
                $name = $obligation->getNom() ?? 'Unknown';
                if (!isset($byObligation[$name])) {
                    $byObligation[$name] = 0.0;
                }
                $byObligation[$name] += $amount;
            }
           
            $dateMaturite = $investment->getDateMaturite();
            if ($dateMaturite instanceof \DateTimeInterface && $dateMaturite > $today) {
                $activeInvestments++;
            } else {
                $maturedInvestments++;
            }
           
            // Monthly data
            $dateAchat = $investment->getDateAchat();
            if ($dateAchat instanceof \DateTimeInterface) {
                $month = $dateAchat->format('Y-m');
                if (!isset($monthlyData[$month])) {
                    $monthlyData[$month] = 0.0;
                }
                $monthlyData[$month] += $amount;
            }
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
     *
     * @return array{
     *     totalBalance: float,
     *     totalWallets: int,
     *     byCurrency: array<string, float>
     * }
     */
    public function getWalletStats(): array
    {
        $wallets = $this->walletRepository->findAll();
       
        $totalBalance = 0.0;
        $byCurrency = [];
       
        foreach ($wallets as $wallet) {
            $balance = (float)($wallet->getSolde() ?? 0.0);
            $totalBalance += $balance;
           
            $currency = $wallet->getDevise() ?? 'Unknown';
            if (!isset($byCurrency[$currency])) {
                $byCurrency[$currency] = 0.0;
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
     *
     * @return array<int, array{
     *     name: string,
     *     rate: float,
     *     duration: int,
     *     totalInvested: float,
     *     investorsCount: int
     * }>
     */
    public function getObligationRanking(): array
    {
        $obligations = $this->obligationRepository->findAll();
        $ranking = [];
       
        foreach ($obligations as $obligation) {
            $investments = $this->investmentRepository->findBy([
                'obligationId' => $obligation->getIdObligation()
            ]);
           
            $totalInvested = 0.0;
            foreach ($investments as $inv) {
                $totalInvested += (float)$inv->getMontantInvesti();
            }
           
            $ranking[] = [
                'name' => $obligation->getNom() ?? 'Unknown',
                'rate' => (float)$obligation->getTauxInteret(),
                'duration' => (int)$obligation->getDuree(),
                'totalInvested' => $totalInvested,
                'investorsCount' => count($investments),
            ];
        }
       
        usort($ranking, function(array $a, array $b): int {
            return $b['totalInvested'] <=> $a['totalInvested'];
        });
       
        return $ranking;
    }

    /**
     * Get maturity forecast for next months
     *
     * @param int $months Number of months to forecast
     * @return array<string, float>
     */
    public function getMaturityForecast(int $months = 6): array
    {
        $investments = $this->investmentRepository->findAll();
        $forecast = [];
        $today = new \DateTime();
       
        for ($i = 1; $i <= $months; $i++) {
            $month = (clone $today)->modify("+{$i} months");
            $monthKey = $month->format('Y-m');
            $forecast[$monthKey] = 0.0;
        }
       
        foreach ($investments as $investment) {
            $maturityDate = $investment->getDateMaturite();
            if (!$maturityDate instanceof \DateTimeInterface) {
                continue;
            }
           
            $diff = $today->diff($maturityDate);
            $amount = (float)$investment->getMontantInvesti();
           
            if ($diff !== false && $diff->invert == 1 && $diff->m <= $months && $diff->y == 0) {
                $monthKey = $maturityDate->format('Y-m');
                if (isset($forecast[$monthKey])) {
                    $forecast[$monthKey] += $amount;
                }
            }
        }
       
        return $forecast;
    }

    /**
     * Get user investment summary
     *
     * @param Utilisateur $user The user entity
     * @return array{
     *     totalInvested: float,
     *     totalInvestments: int,
     *     activeInvestments: int,
     *     maturedInvestments: int
     * }
     */
    public function getUserInvestmentSummary(Utilisateur $user): array
    {
        $wallets = $this->walletRepository->findBy(['utilisateur' => $user]);
        $walletIds = array_map(function(Wallet $w): int {
            $id = $w->getId();
            return $id !== null ? (int)$id : 0;
        }, $wallets);
       
        $walletIds = array_filter($walletIds, fn($id) => $id > 0);
       
        if (empty($walletIds)) {
            return [
                'totalInvested' => 0.0,
                'totalInvestments' => 0,
                'activeInvestments' => 0,
                'maturedInvestments' => 0,
            ];
        }
       
        $investments = $this->investmentRepository->createQueryBuilder('i')
            ->where('i.walletId IN (:walletIds)')
            ->setParameter('walletIds', $walletIds)
            ->getQuery()
            ->getResult();
       
        $totalInvested = 0.0;
        $activeCount = 0;
        $maturedCount = 0;
        $today = new \DateTime();
       
        foreach ($investments as $inv) {
            $totalInvested += (float)$inv->getMontantInvesti();
            $dateMaturite = $inv->getDateMaturite();
            if ($dateMaturite instanceof \DateTimeInterface && $dateMaturite > $today) {
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