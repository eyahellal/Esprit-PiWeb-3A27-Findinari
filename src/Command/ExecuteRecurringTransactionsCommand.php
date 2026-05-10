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

            // Vérifier que le wallet existe
            if (!$wallet) {
                $io->warning('Skipped: ' . $recurring->getDescription() . ' — wallet not found.');
                continue;
            }

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

            // Calculer la prochaine date d'exécution
            $nextExecutionDate = $recurring->getNextExecutionDate();
           
            if ($nextExecutionDate instanceof \DateTime) {
                $next = clone $nextExecutionDate;
               
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
                    default:
                        // Frequency non reconnue, on ne fait rien
                        break;
                }
               
                $recurring->setNextExecutionDate($next);

                // Auto-disable if past end date
                $endDate = $recurring->getEndDate();
                if ($endDate instanceof \DateTime && $next > $endDate) {
                    $recurring->setIsRecurring(false);
                }
            } else {
                $io->warning('Skipped: ' . $recurring->getDescription() . ' — invalid next execution date.');
                continue;
            }

            $io->success('Executed: ' . ($recurring->getDescription() ?? 'Transaction') . ' — ' . number_format($recurring->getMontant(), 2) . ' ' . $wallet->getDevise());
        }

        $this->entityManager->flush();
        $io->success('Done!');

        return Command::SUCCESS;
    }
}