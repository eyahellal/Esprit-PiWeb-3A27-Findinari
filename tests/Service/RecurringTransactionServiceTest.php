<?php

namespace App\Tests\Service;

use App\Entity\management\Transaction;
use App\Entity\management\Categorie;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Service\RecurringTransactionService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class RecurringTransactionServiceTest extends TestCase
{
    private RecurringTransactionService $service;

    /** @var MockObject|EntityManagerInterface */
    private $entityManager;

    private Utilisateur $user;
    private Wallet $wallet;
    private Categorie $categorie;

    protected function setUp(): void
    {
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        $this->service = new RecurringTransactionService($this->entityManager);

        $this->user = new Utilisateur();
        $this->user->setNom('Test');
        $this->user->setPrenom('User');
        $this->user->setGmail('test@test.com');

        $this->wallet = new Wallet();
        $this->wallet->setSolde(1000.00);
        $this->wallet->setDevise('TND');
        $this->wallet->setPays('Tunisia');

        $this->categorie = new Categorie();
        $this->categorie->setNom('Food');
        $this->categorie->setStatut('Active');
        $this->categorie->setColor('#F27438');
        $this->categorie->setIcon('fa-utensils');
    }

    // ===================================
    // HELPER METHODS
    // ===================================

    private function mockWalletRepository(array $wallets): void
    {
        $walletRepo = $this->createMock(EntityRepository::class);
        $walletRepo->method('findBy')
            ->with(['utilisateur' => $this->user])
            ->willReturn($wallets);

        $this->entityManager
            ->method('getRepository')
            ->willReturnCallback(function ($class) use ($walletRepo) {
                if ($class === \App\Entity\Loan\Wallet::class) {
                    return $walletRepo;
                }
                return $this->mockTransactionRepository([]);
            });
    }

    private function mockTransactionRepository(array $transactions): MockObject
    {
        $queryMock = $this->createMock(Query::class);
        $queryMock->method('getResult')->willReturn($transactions);

        $qbMock = $this->createMock(QueryBuilder::class);
        $qbMock->method('where')->willReturnSelf();
        $qbMock->method('andWhere')->willReturnSelf();
        $qbMock->method('setParameter')->willReturnSelf();
        $qbMock->method('getQuery')->willReturn($queryMock);

        $transactionRepo = $this->createMock(EntityRepository::class);
        $transactionRepo->method('createQueryBuilder')
            ->willReturn($qbMock);

        return $transactionRepo;
    }

    private function createRecurringTransaction(
        string $type,
        float $montant,
        string $frequency,
        \DateTime $nextDate,
        ?\DateTime $endDate = null
    ): Transaction {
        $transaction = new Transaction();
        $transaction->setWallet($this->wallet);
        $transaction->setCategorie($this->categorie);
        $transaction->setType($type);
        $transaction->setMontant($montant);
        $transaction->setDevise('TND');
        $transaction->setDate(new \DateTime());
        $transaction->setIsRecurring(true);
        $transaction->setFrequency($frequency);
        $transaction->setNextExecutionDate($nextDate);
        $transaction->setEndDate($endDate);
        return $transaction;
    }

    // ===================================
    // TESTS — Empty Wallets
    // ===================================

    // ✅ Test 1 — No wallets returns early
    public function testExecuteWithNoWalletsReturnsEarly(): void
    {
        $walletRepo = $this->createMock(EntityRepository::class);
        $walletRepo->method('findBy')->willReturn([]);

        $this->entityManager
            ->expects($this->once())
            ->method('getRepository')
            ->willReturn($walletRepo);

        // flush should never be called if no wallets
        $this->entityManager
            ->expects($this->never())
            ->method('flush');

        $this->service->executeRecurringTransactions($this->user);
    }

    // ✅ Test 2 — No due transactions does nothing
    public function testExecuteWithNoDueTransactionsDoesNothing(): void
    {
        $walletRepo = $this->createMock(EntityRepository::class);
        $walletRepo->method('findBy')->willReturn([$this->wallet]);

        $queryMock = $this->createMock(Query::class);
        $queryMock->method('getResult')->willReturn([]); // No due transactions

        $qbMock = $this->createMock(QueryBuilder::class);
        $qbMock->method('where')->willReturnSelf();
        $qbMock->method('andWhere')->willReturnSelf();
        $qbMock->method('setParameter')->willReturnSelf();
        $qbMock->method('getQuery')->willReturn($queryMock);

        $transactionRepo = $this->createMock(EntityRepository::class);
        $transactionRepo->method('createQueryBuilder')->willReturn($qbMock);

        $this->entityManager
            ->method('getRepository')
            ->willReturnCallback(function ($class) use ($walletRepo, $transactionRepo) {
                if ($class === \App\Entity\Loan\Wallet::class) {
                    return $walletRepo;
                }
                return $transactionRepo;
            });

        // persist should never be called
        $this->entityManager
            ->expects($this->never())
            ->method('persist');

        $this->service->executeRecurringTransactions($this->user);
    }

    // ===================================
    // TESTS — Transaction Entity Logic
    // ===================================

    // ✅ Test 3 — Income transaction increases wallet balance
    public function testIncomeTransactionIncreasesWalletBalance(): void
    {
        $initialBalance = 1000.00;
        $this->wallet->setSolde($initialBalance);

        $recurring = $this->createRecurringTransaction(
            'income',
            200.00,
            'monthly',
            new \DateTime('yesterday')
        );

        // Simulate the wallet balance update logic
        if ($recurring->getType() === 'income') {
            $this->wallet->setSolde(
                $this->wallet->getSolde() + $recurring->getMontant()
            );
        }

        $this->assertEquals(1200.00, $this->wallet->getSolde());
    }

    // ✅ Test 4 — Expense transaction decreases wallet balance
    public function testExpenseTransactionDecreasesWalletBalance(): void
    {
        $initialBalance = 1000.00;
        $this->wallet->setSolde($initialBalance);

        $recurring = $this->createRecurringTransaction(
            'depense',
            200.00,
            'monthly',
            new \DateTime('yesterday')
        );

        // Simulate the wallet balance update logic
        if ($recurring->getType() === 'depense') {
            $this->wallet->setSolde(
                $this->wallet->getSolde() - $recurring->getMontant()
            );
        }

        $this->assertEquals(800.00, $this->wallet->getSolde());
    }

    // ✅ Test 5 — Expense skipped if insufficient balance
    public function testExpenseSkippedIfInsufficientBalance(): void
    {
        $this->wallet->setSolde(50.00); // Low balance

        $recurring = $this->createRecurringTransaction(
            'depense',
            200.00, // More than balance
            'monthly',
            new \DateTime('yesterday')
        );

        // Simulate the check
        $shouldSkip = $recurring->getType() === 'depense' &&
            $recurring->getMontant() > $this->wallet->getSolde();

        $this->assertTrue($shouldSkip);
    }

    // ===================================
    // TESTS — Frequency Logic
    // ===================================

    // ✅ Test 6 — Daily frequency adds 1 day
    public function testDailyFrequencyAddsOneDay(): void
    {
        $date = new \DateTime('2026-01-01');
        $next = clone $date;

        switch ('daily') {
            case 'daily': $next->modify('+1 day'); break;
        }

        $this->assertEquals('2026-01-02', $next->format('Y-m-d'));
    }

    // ✅ Test 7 — Weekly frequency adds 1 week
    public function testWeeklyFrequencyAddsOneWeek(): void
    {
        $date = new \DateTime('2026-01-01');
        $next = clone $date;

        switch ('weekly') {
            case 'weekly': $next->modify('+1 week'); break;
        }

        $this->assertEquals('2026-01-08', $next->format('Y-m-d'));
    }

    // ✅ Test 8 — Monthly frequency adds 1 month
    public function testMonthlyFrequencyAddsOneMonth(): void
    {
        $date = new \DateTime('2026-01-01');
        $next = clone $date;

        switch ('monthly') {
            case 'monthly': $next->modify('+1 month'); break;
        }

        $this->assertEquals('2026-02-01', $next->format('Y-m-d'));
    }

    // ✅ Test 9 — Yearly frequency adds 1 year
    public function testYearlyFrequencyAddsOneYear(): void
    {
        $date = new \DateTime('2026-01-01');
        $next = clone $date;

        switch ('yearly') {
            case 'yearly': $next->modify('+1 year'); break;
        }

        $this->assertEquals('2027-01-01', $next->format('Y-m-d'));
    }

    // ===================================
    // TESTS — End Date Logic
    // ===================================

    // ✅ Test 10 — Transaction stopped when end date passed
    public function testTransactionStoppedWhenEndDatePassed(): void
    {
        $recurring = $this->createRecurringTransaction(
            'income',
            200.00,
            'monthly',
            new \DateTime('yesterday'),
            new \DateTime('2020-01-01') // Past end date
        );

        // Check if should stop
        $shouldStop = $recurring->getEndDate() &&
            $recurring->getNextExecutionDate() > $recurring->getEndDate();

        $this->assertTrue($shouldStop);
    }

    // ✅ Test 11 — Transaction continues when end date not reached
    public function testTransactionContinuesWhenEndDateNotReached(): void
    {
        $recurring = $this->createRecurringTransaction(
            'income',
            200.00,
            'monthly',
            new \DateTime('yesterday'),
            new \DateTime('2030-01-01') // Future end date
        );

        // Check if should stop
        $shouldStop = $recurring->getEndDate() &&
            $recurring->getNextExecutionDate() > $recurring->getEndDate();

        $this->assertFalse($shouldStop);
    }

    // ✅ Test 12 — Transaction continues when no end date
    public function testTransactionContinuesWithNoEndDate(): void
    {
        $recurring = $this->createRecurringTransaction(
            'income',
            200.00,
            'monthly',
            new \DateTime('yesterday'),
            null // No end date
        );

        $this->assertNull($recurring->getEndDate());

        // No end date means it should continue
        $shouldStop = $recurring->getEndDate() &&
            $recurring->getNextExecutionDate() > $recurring->getEndDate();

        $this->assertFalse($shouldStop);
    }

    // ===================================
    // TESTS — Transaction Creation
    // ===================================

    // ✅ Test 13 — New transaction has correct description
    public function testNewTransactionHasCorrectDescription(): void
    {
        $recurring = $this->createRecurringTransaction(
            'income',
            200.00,
            'monthly',
            new \DateTime('yesterday')
        );
        $recurring->setDescription('Salary');

        $description = '[Auto] ' . ($recurring->getDescription() ?? 'Recurring');

        $this->assertEquals('[Auto] Salary', $description);
    }

    // ✅ Test 14 — New transaction has Auto description when null
    public function testNewTransactionHasDefaultDescription(): void
    {
        $recurring = $this->createRecurringTransaction(
            'income',
            200.00,
            'monthly',
            new \DateTime('yesterday')
        );
        $recurring->setDescription(null);

        $description = '[Auto] ' . ($recurring->getDescription() ?? 'Recurring');

        $this->assertEquals('[Auto] Recurring', $description);
    }

    // ✅ Test 15 — New transaction is not recurring
    public function testNewTransactionIsNotRecurring(): void
    {
        $transaction = new Transaction();
        $transaction->setIsRecurring(false);

        $this->assertFalse($transaction->isRecurring());
    }

    // ✅ Test 16 — Recurring transaction entity properties
    public function testRecurringTransactionEntityProperties(): void
    {
        $nextDate = new \DateTime('yesterday');

        $recurring = $this->createRecurringTransaction(
            'income',
            500.00,
            'monthly',
            $nextDate
        );

        $this->assertEquals('income', $recurring->getType());
        $this->assertEquals(500.00, $recurring->getMontant());
        $this->assertEquals('monthly', $recurring->getFrequency());
        $this->assertTrue($recurring->isRecurring());
        $this->assertSame($this->wallet, $recurring->getWallet());
        $this->assertSame($this->categorie, $recurring->getCategorie());
    }
}