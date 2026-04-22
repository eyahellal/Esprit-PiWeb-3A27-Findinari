<?php

namespace App\Service;

use App\Entity\Loan\Investissementobligation;
use App\Entity\user\Utilisateur;
use App\Repository\InvestissementobligationRepository;
use App\Repository\WalletRepository;

class MaturityAlertService
{
    private $investmentRepository;
    private $walletRepository;

    public function __construct(
        InvestissementobligationRepository $investmentRepository,
        WalletRepository $walletRepository
    ) {
        $this->investmentRepository = $investmentRepository;
        $this->walletRepository = $walletRepository;
    }

    public function getMaturityAlerts(Utilisateur $user): array
    {
        // Get all wallets belonging to the user
        $userWallets = $this->walletRepository->findBy(['utilisateur' => $user]);
        $walletIds = [];
        foreach ($userWallets as $wallet) {
            $walletIds[] = $wallet->getId();
        }

        if (empty($walletIds)) {
            return [];
        }

        // Get all investments from user's wallets
        $investments = $this->investmentRepository->createQueryBuilder('i')
            ->where('i.walletId IN (:walletIds)')
            ->setParameter('walletIds', $walletIds)
            ->getQuery()
            ->getResult();

        $alerts = [];
        $today = new \DateTime();
        $today->setTime(0, 0, 0);

        foreach ($investments as $investment) {
            $maturityDate = $investment->getDateMaturite();
            if (!$maturityDate) continue;

            $daysLeft = $today->diff($maturityDate)->days;
            
            // Check if investment is not matured and days left <= 7
            if ($maturityDate > $today && $daysLeft <= 7) {
                $obligation = $investment->getObligationId() ? 
                    $this->investmentRepository->getEntityManager()
                        ->getRepository(\App\Entity\Loan\Obligation::class)
                        ->find($investment->getObligationId()) : null;
                
                $alerts[] = [
                    'id' => $investment->getIdInvestissement(),
                    'obligationName' => $obligation ? $obligation->getNom() : 'Unknown',
                    'amount' => $investment->getMontantInvesti(),
                    'maturityDate' => $maturityDate,
                    'daysLeft' => $daysLeft,
                    'expectedReturn' => $investment->getMontantInvesti() * 
                        ($obligation ? (1 + $obligation->getTauxInteret() / 100) : 1),
                    'severity' => $daysLeft <= 3 ? 'high' : ($daysLeft <= 5 ? 'medium' : 'low')
                ];
            }
        }

        return $alerts;
    }

    public function hasActiveAlerts(Utilisateur $user): bool
    {
        return count($this->getMaturityAlerts($user)) > 0;
    }

    public function getAlertCount(Utilisateur $user): int
    {
        return count($this->getMaturityAlerts($user));
    }
}