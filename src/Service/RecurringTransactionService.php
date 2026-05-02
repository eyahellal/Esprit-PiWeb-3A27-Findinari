<?php

namespace App\Service;

use App\Entity\management\Transaction;
use App\Entity\user\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;

class RecurringTransactionService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function executeRecurringTransactions(Utilisateur $user): void
    {
        $wallets = $this->entityManager->getRepository(\App\Entity\Loan\Wallet::class)
            ->findBy(['utilisateur' => $user]);

        if (empty($wallets)) return;

        $today = new \DateTime('today');

        $dueTransactions = $this->entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->where('t.isRecurring = :recurring')
            ->andWhere('t.nextExecutionDate <= :today')
            ->andWhere('t.wallet IN (:wallets)')
            ->andWhere('t.endDate IS NULL OR t.endDate >= :today')
            ->setParameter('recurring', true)
            ->setParameter('today', $today)
            ->setParameter('wallets', $wallets)
            ->getQuery()
            ->getResult();

        foreach ($dueTransactions as $recurring) {
            $wallet = $recurring->getWallet();

            while ($recurring->getNextExecutionDate() <= $today) {

                if ($recurring->getEndDate() && $recurring->getNextExecutionDate() > $recurring->getEndDate()) {
                    $recurring->setIsRecurring(false);
                    break;
                }

                if ($recurring->getType() === 'depense' && $recurring->getMontant() > $wallet->getSolde()) {
                    break;
                }

                $transaction = new Transaction();
                $transaction->setWallet($wallet);
                $transaction->setCategorie($recurring->getCategorie());
                $transaction->setType($recurring->getType());
                $transaction->setMontant($recurring->getMontant());
                $transaction->setDevise($wallet->getDevise());
                $transaction->setDate(clone $recurring->getNextExecutionDate());
                $transaction->setDescription('[Auto] ' . ($recurring->getDescription() ?? 'Recurring'));
                $transaction->setIsRecurring(false);

                if ($recurring->getType() === 'income') {
                    $wallet->setSolde($wallet->getSolde() + $recurring->getMontant());
                } else {
                    $wallet->setSolde($wallet->getSolde() - $recurring->getMontant());
                }

                $this->entityManager->persist($transaction);

                $next = clone $recurring->getNextExecutionDate();
                switch ($recurring->getFrequency()) {
    case 'daily':
        $next->modify('+1 day');
        break;
    case 'weekly':
        $next->modify('+1 week');
        break;
    case 'monthly':
        $next->modify('+1 month');
        break;
    case 'yearly':
        $next->modify('+1 year');
        break;
}
                $recurring->setNextExecutionDate($next);
            }
        }

        $this->entityManager->flush();
    }
}