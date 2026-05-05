<?php

namespace App\Service;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;

class MaturityAlertService
{
    private InvestissementobligationRepository $investmentRepository;
    private WalletRepository $walletRepository;
    private ObligationRepository $obligationRepository;

    public function __construct(
        InvestissementobligationRepository $investmentRepository,
        WalletRepository $walletRepository,
        ObligationRepository $obligationRepository
    ) {
        $this->investmentRepository = $investmentRepository;
        $this->walletRepository = $walletRepository;
        $this->obligationRepository = $obligationRepository;
    }

    /**
     * @return list<array{
     *     id:int|null,
     *     obligationName:string,
     *     amount:float,
     *     maturityDate:\DateTimeInterface,
     *     daysLeft:int,
     *     expectedReturn:float,
     *     severity:string
     * }>
     */
    public function getMaturityAlerts(Utilisateur $user): array
    {
        /** @var list<Wallet> $userWallets */
        $userWallets = $this->walletRepository->findBy(['utilisateur' => $user]);

        $walletIds = [];

        foreach ($userWallets as $wallet) {
            $walletIds[] = $wallet->getId();
        }

        if ($walletIds === []) {
            return [];
        }

        /** @var list<Investissementobligation> $investments */
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

            if (!$maturityDate instanceof \DateTimeInterface) {
                continue;
            }

            $daysLeft = (int) $today->diff($maturityDate)->days;

            if ($maturityDate <= $today || $daysLeft > 7) {
                continue;
            }

            $obligation = null;
            $obligationId = $investment->getObligationId();

            if ($obligationId !== null) {
                $foundObligation = $this->obligationRepository->find($obligationId);

                if ($foundObligation instanceof Obligation) {
                    $obligation = $foundObligation;
                }
            }

            $amount = (float) $investment->getMontantInvesti();
            $obligationName = $obligation instanceof Obligation && $obligation->getNom() !== null
                ? $obligation->getNom()
                : 'Unknown';

            $rateMultiplier = $obligation instanceof Obligation
                ? 1 + ((float) $obligation->getTauxInteret() / 100)
                : 1.0;

            $alerts[] = [
                'id' => $investment->getIdInvestissement(),
                'obligationName' => $obligationName,
                'amount' => $amount,
                'maturityDate' => $maturityDate,
                'daysLeft' => $daysLeft,
                'expectedReturn' => $amount * $rateMultiplier,
                'severity' => $daysLeft <= 3 ? 'high' : ($daysLeft <= 5 ? 'medium' : 'low'),
            ];
        }

        return $alerts;
    }

    public function hasActiveAlerts(Utilisateur $user): bool
    {
        return $this->getAlertCount($user) > 0;
    }

    public function getAlertCount(Utilisateur $user): int
    {
        return count($this->getMaturityAlerts($user));
    }
}
