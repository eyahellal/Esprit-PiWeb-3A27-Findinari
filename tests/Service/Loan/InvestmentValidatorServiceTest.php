<?php
// tests/Service/Loan/InvestmentValidatorServiceTest.php
namespace App\Tests\Service\Loan;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\management\Wallet;
use App\Entity\user\Utilisateur;
use App\Service\Loan\InvestmentValidatorService;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use DateTime;

class InvestmentValidatorServiceTest extends TestCase
{
    private InvestmentValidatorService $validator;
    private Wallet $wallet;
    private Obligation $obligation;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new InvestmentValidatorService();
        
        // Créer un utilisateur factice
        $user = new Utilisateur();
        $user->setNom('Test');
        $user->setPrenom('User');
        $user->setGmail('test@test.com');
        
        // Créer un wallet factice avec un solde de 10000 DT
        $this->wallet = new Wallet();
        $this->wallet->setUtilisateur($user);
        $this->wallet->setSolde(10000);
        $this->wallet->setDevise('DT');
        
        // Créer une obligation factice
        $this->obligation = new Obligation();
        $this->obligation->setNom('Obligation Test');
        $this->obligation->setTauxInteret(8.5);
        $this->obligation->setDuree(24);
    }
    
    /**
     * Test 1: Investissement valide (montant ≤ solde du wallet)
     */
    public function testValidInvestment(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $result = $this->validator->validate($investment, $this->wallet, $this->obligation);
        
        $this->assertTrue($result);
    }
    
    /**
     * Test 2: Investissement avec montant exactement égal au solde
     */
    public function testInvestmentWithExactWalletBalance(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(10000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $result = $this->validator->validate($investment, $this->wallet, $this->obligation);
        
        $this->assertTrue($result);
    }
    
    /**
     * Test 3: Montant investi négatif
     */
    public function testInvestmentWithNegativeAmount(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant investi doit être supérieur à 0');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(1000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->validator->validate($investment, $this->wallet, $this->obligation);
    }
    
    /**
     * Test 4: Montant investi égal à zéro
     */
    public function testInvestmentWithZeroAmount(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant investi doit être supérieur à 0');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(0);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->validator->validate($investment, $this->wallet, $this->obligation);
    }
    
    /**
     * Test 5: Montant investi SUPÉRIEUR au solde du wallet
     */
    public function testInvestmentExceedsWalletBalance(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('ne peut pas dépasser le solde de votre wallet');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(15000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->validator->validate($investment, $this->wallet, $this->obligation);
    }
    
    /**
     * Test 6: Montant investi très largement supérieur au solde
     */
    public function testInvestmentGreatlyExceedsWalletBalance(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('ne peut pas dépasser le solde de votre wallet');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(100000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->validator->validate($investment, $this->wallet, $this->obligation);
    }
    
    /**
     * Test 7: Date de fin avant date de début
     */
    public function testInvestmentWithInvalidDateRange(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('La date de maturité doit être postérieure à la date d\'achat');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat(new DateTime('2025-01-01'));
        $investment->setDateMaturite(new DateTime('2024-01-01'));
        
        $this->validator->validate($investment, $this->wallet, $this->obligation);
    }
    
    /**
     * Test 8: Dates identiques
     */
    public function testInvestmentWithSameDates(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('La date de maturité doit être postérieure à la date d\'achat');
        
        $sameDate = new DateTime('2024-01-01');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat($sameDate);
        $investment->setDateMaturite($sameDate);
        
        $this->validator->validate($investment, $this->wallet, $this->obligation);
    }
    
    /**
     * Test 9: Wallet inexistant
     */
    public function testInvestmentWithoutWallet(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le wallet est obligatoire pour effectuer un investissement');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->validator->validate($investment, null, $this->obligation);
    }
    
    /**
     * Test 10: Obligation inexistante
     */
    public function testInvestmentWithoutObligation(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('L\'obligation est obligatoire pour effectuer un investissement');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->validator->validate($investment, $this->wallet, null);
    }
    
    /**
     * Test 11: Tester la méthode isAmountAvailable
     */
    public function testIsAmountAvailable(): void
    {
        $this->assertTrue($this->validator->isAmountAvailable(5000, $this->wallet));
        $this->assertTrue($this->validator->isAmountAvailable(10000, $this->wallet));
        $this->assertFalse($this->validator->isAmountAvailable(15000, $this->wallet));
        $this->assertFalse($this->validator->isAmountAvailable(-500, $this->wallet));
        $this->assertFalse($this->validator->isAmountAvailable(0, $this->wallet));
    }
    
    /**
     * Test 12: Calcul de la date de maturité
     */
    public function testCalculateMaturityDate(): void
    {
        $startDate = new DateTime('2024-01-15');
        $durationInMonths = 6;
        
        $expectedDate = new DateTime('2024-07-15');
        $calculatedDate = $this->validator->calculateMaturityDate($startDate, $durationInMonths);
        
        $this->assertEquals($expectedDate->format('Y-m-d'), $calculatedDate->format('Y-m-d'));
    }
    
    /**
     * Test 13: Différents scénarios de wallet avec soldes variés
     */
    public function testDifferentWalletBalances(): void
    {
        // Wallet avec petit solde
        $user = new Utilisateur();
        $user->setNom('Test2');
        $user->setPrenom('User2');
        $user->setGmail('test2@test.com');
        
        $smallWallet = new Wallet();
        $smallWallet->setUtilisateur($user);
        $smallWallet->setSolde(100);
        $smallWallet->setDevise('DT');
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(50);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $this->assertTrue($this->validator->validate($investment, $smallWallet, $this->obligation));
        
        // Test avec montant qui dépasse le petit solde
        $investment->setMontantInvesti(200);
        
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('ne peut pas dépasser le solde de votre wallet');
        $this->validator->validate($investment, $smallWallet, $this->obligation);
    }
}