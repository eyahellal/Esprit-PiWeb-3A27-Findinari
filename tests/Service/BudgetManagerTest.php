<?php
//php bin/phpunit tests/Service/BudgetManagerTest.php
namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Entity\management\Budget;
use App\Entity\management\Categorie;
use App\Entity\Loan\Wallet;
use App\Service\Management\BudgetManager;


class BudgetManagerTest extends TestCase
{
    private BudgetManager $manager;
    private Wallet $wallet;
    private Categorie $categorie;

    protected function setUp(): void
    {
        $this->manager = new BudgetManager();

        $this->wallet = new Wallet();
        $this->wallet->setSolde(1000.00);
        $this->wallet->setDevise('TND');
        $this->wallet->setPays('Tunisia');

        $this->categorie = new Categorie();
        $this->categorie->setNom('Food');
        $this->categorie->setStatut('Active');
    }

    // ===================================
    // TESTS — validate()
    // ===================================

    // ✅ Test 1 — Valid budget passes full validation
    public function testValidBudgetPassesValidation(): void
    {
        $budget = new Budget();
        $budget->setMontantMax(500.00);
        $budget->setDureeBudget(30);
        $budget->setDateBudget(new \DateTime('2026-01-01'));
        $budget->setWallet($this->wallet);
        $budget->setCategorie($this->categorie);

        $this->assertTrue($this->manager->validate($budget));
    }

    // ===================================
    // TESTS — validateMontant()
    // ===================================

    // ❌ Test 2 — Negative amount throws exception
    public function testNegativeAmountThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant maximum doit être supérieur à zéro.');

        $budget = new Budget();
        $budget->setMontantMax(-100.00);

        $this->manager->validateMontant($budget);
    }

    // ❌ Test 3 — Zero amount throws exception
    public function testZeroAmountThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant maximum doit être supérieur à zéro.');

        $budget = new Budget();
        $budget->setMontantMax(0);

        $this->manager->validateMontant($budget);
    }

    // ❌ Test 4 — Null amount throws exception
    public function testNullAmountThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $budget = new Budget();
        $budget->setMontantMax(null);

        $this->manager->validateMontant($budget);
    }

    // ✅ Test 5 — Valid amount passes
    public function testValidAmountPasses(): void
    {
        $budget = new Budget();
        $budget->setMontantMax(500.00);
        $this->assertTrue($this->manager->validateMontant($budget));
    }

    // ===================================
    // TESTS — validateDuree()
    // ===================================

    // ❌ Test 6 — Zero duration throws exception
    public function testZeroDurationThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée du budget doit être au moins 1 jour.');

        $budget = new Budget();
        $budget->setDureeBudget(0);

        $this->manager->validateDuree($budget);
    }

    // ❌ Test 7 — Duration over 365 throws exception
    public function testDurationOver365ThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée du budget ne peut pas dépasser 365 jours.');

        $budget = new Budget();
        $budget->setDureeBudget(366);

        $this->manager->validateDuree($budget);
    }

    // ✅ Test 8 — Valid duration passes
    public function testValidDurationPasses(): void
    {
        $budget = new Budget();
        $budget->setDureeBudget(30);
        $this->assertTrue($this->manager->validateDuree($budget));
    }

    // ✅ Test 9 — Minimum duration (1 day) passes
    public function testMinimumDurationPasses(): void
    {
        $budget = new Budget();
        $budget->setDureeBudget(1);
        $this->assertTrue($this->manager->validateDuree($budget));
    }

    // ✅ Test 10 — Maximum duration (365 days) passes
    public function testMaximumDurationPasses(): void
    {
        $budget = new Budget();
        $budget->setDureeBudget(365);
        $this->assertTrue($this->manager->validateDuree($budget));
    }

    // ===================================
    // TESTS — validateDate()
    // ===================================

    // ❌ Test 11 — Null date throws exception
    public function testNullDateThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La date de début est obligatoire.');

        $budget = new Budget();
        $budget->setDateBudget(null);

        $this->manager->validateDate($budget);
    }

    // ✅ Test 12 — Valid date passes
    public function testValidDatePasses(): void
    {
        $budget = new Budget();
        $budget->setDateBudget(new \DateTime('2026-01-01'));
        $this->assertTrue($this->manager->validateDate($budget));
    }

    // ===================================
    // TESTS — validateWallet()
    // ===================================

    // ❌ Test 13 — Null wallet throws exception
    public function testNullWalletThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le portefeuille est obligatoire.');

        $budget = new Budget();
        $budget->setWallet(null);

        $this->manager->validateWallet($budget);
    }

    // ✅ Test 14 — Valid wallet passes
    public function testValidWalletPasses(): void
    {
        $budget = new Budget();
        $budget->setWallet($this->wallet);
        $this->assertTrue($this->manager->validateWallet($budget));
    }

    // ===================================
    // TESTS — validateCategorie()
    // ===================================

    // ❌ Test 15 — Null categorie throws exception
    public function testNullCategorieThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La catégorie est obligatoire.');

        $budget = new Budget();
        $budget->setCategorie(null);

        $this->manager->validateCategorie($budget);
    }

    // ✅ Test 16 — Valid categorie passes
    public function testValidCategoriePasses(): void
    {
        $budget = new Budget();
        $budget->setCategorie($this->categorie);
        $this->assertTrue($this->manager->validateCategorie($budget));
    }

    // ===================================
    // TESTS — validateBudgetVsWallet()
    // ===================================

    // ❌ Test 17 — Budget exceeds wallet balance throws exception
    public function testBudgetExceedsWalletThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Le montant du budget dépasse le solde du portefeuille.'
        );

        $wallet = new Wallet();
        $wallet->setSolde(100.00);

        $budget = new Budget();
        $budget->setMontantMax(500.00);
        $budget->setWallet($wallet);

        $this->manager->validateBudgetVsWallet($budget);
    }

    // ✅ Test 18 — Budget equal to wallet balance passes
    public function testBudgetEqualToWalletBalancePasses(): void
    {
        $wallet = new Wallet();
        $wallet->setSolde(500.00);

        $budget = new Budget();
        $budget->setMontantMax(500.00);
        $budget->setWallet($wallet);

        $this->assertTrue($this->manager->validateBudgetVsWallet($budget));
    }

    // ✅ Test 19 — Budget less than wallet balance passes
    public function testBudgetLessThanWalletBalancePasses(): void
    {
        $budget = new Budget();
        $budget->setMontantMax(500.00);
        $budget->setWallet($this->wallet); // solde = 1000

        $this->assertTrue($this->manager->validateBudgetVsWallet($budget));
    }

    // ===================================
    // TESTS — isExpired()
    // ===================================

    // ✅ Test 20 — Active budget is not expired
    public function testActiveBudgetIsNotExpired(): void
    {
        $budget = new Budget();
        $budget->setDateBudget(new \DateTime('today'));
        $budget->setDureeBudget(30);

        $this->assertFalse($this->manager->isExpired($budget));
    }

    // ✅ Test 21 — Past budget is expired
    public function testPastBudgetIsExpired(): void
    {
        $budget = new Budget();
        $budget->setDateBudget(new \DateTime('2020-01-01'));
        $budget->setDureeBudget(30);

        $this->assertTrue($this->manager->isExpired($budget));
    }

    // ✅ Test 22 — Budget with null date is not expired
    public function testBudgetWithNullDateIsNotExpired(): void
    {
        $budget = new Budget();
        $budget->setDateBudget(null);
        $budget->setDureeBudget(30);

        $this->assertFalse($this->manager->isExpired($budget));
    }
}
