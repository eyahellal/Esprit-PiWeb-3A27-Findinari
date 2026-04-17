<?php

namespace App\Command;

use App\Entity\management\Transaction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:execute-recurring-transactions',
    description: 'Execute all due recurring transactions'
)]
class ExecuteRecurringTransactionsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $today = new \DateTime('today');

        // Find all recurring transactions that are due
        $dueTransactions = $this->entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->where('t.isRecurring = :recurring')
            ->andWhere('t.nextExecutionDate <= :today')
            ->andWhere('t.endDate IS NULL OR t.endDate >= :today')
            ->setParameter('recurring', true)
            ->setParameter('today', $today)
            ->getQuery()
            ->getResult();

        $io->info(count($dueTransactions) . ' recurring transaction(s) due.');

        foreach ($dueTransactions as $recurring) {
            $wallet = $recurring->getWallet();

            // For expense: check wallet balance
            if ($recurring->getType() === 'depense' && $recurring->getMontant() > $wallet->getSolde()) {
                $io->warning('Skipped: ' . $recurring->getDescription() . ' — insufficient balance.');
                continue;
            }

            // Create a new actual transaction (copy of the recurring one)
            $transaction = new Transaction();
            $transaction->setWallet($wallet);
            $transaction->setCategorie($recurring->getCategorie());
            $transaction->setType($recurring->getType());
            $transaction->setMontant($recurring->getMontant());
            $transaction->setDevise($wallet->getDevise());
            $transaction->setDate(new \DateTime());
            $transaction->setDescription('[Auto] ' . ($recurring->getDescription() ?? 'Recurring'));
            $transaction->setIsRecurring(false); // The copy is NOT recurring

            // Update wallet balance
            if ($recurring->getType() === 'income') {
                $wallet->setSolde($wallet->getSolde() + $recurring->getMontant());
            } else {
                $wallet->setSolde($wallet->getSolde() - $recurring->getMontant());
            }

            $this->entityManager->persist($transaction);

            // Calculate next execution date
            $next = clone $recurring->getNextExecutionDate();
            match ($recurring->getFrequency()) {
                'daily' => $next->modify('+1 day'),
                'weekly' => $next->modify('+1 week'),
                'monthly' => $next->modify('+1 month'),
                'yearly' => $next->modify('+1 year'),
            };
            $recurring->setNextExecutionDate($next);

            // Auto-disable if past end date
            if ($recurring->getEndDate() && $next > $recurring->getEndDate()) {
                $recurring->setIsRecurring(false);
            }

            $io->success('Executed: ' . ($recurring->getDescription() ?? 'Transaction') . ' — ' . $recurring->getMontant() . ' ' . $wallet->getDevise());
        }

        $this->entityManager->flush();
        $io->success('Done!');

        return Command::SUCCESS;
    }
}