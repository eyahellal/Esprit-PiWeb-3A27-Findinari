<?php
// tests/Service/Loan/ObligationValidatorServiceTest.php
namespace App\Tests\Service\Loan;

use App\Entity\Loan\Obligation;
use App\Service\Loan\ObligationValidatorService;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class ObligationValidatorServiceTest extends TestCase
{
    private ObligationValidatorService $validator;
    private Obligation $obligation;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new ObligationValidatorService();
        
        // Créer une obligation valide pour les tests
        $this->obligation = new Obligation();
        $this->obligation->setNom('Obligation Test');
        $this->obligation->setTauxInteret(8.5);
        $this->obligation->setDuree(24);
    }
    
    // ==============================================
    // TESTS VALIDES
    // ==============================================
    
    public function testValidObligation(): void
    {
        $result = $this->validator->validate($this->obligation);
        $this->assertTrue($result);
    }
    
    public function testValidObligationName(): void
    {
        $this->obligation->setNom('Green Energy Bond');
        $result = $this->validator->validate($this->obligation);
        $this->assertTrue($result);
    }
    
    public function testValidMinimumInterestRate(): void
    {
        $this->obligation->setTauxInteret(0.01);
        $result = $this->validator->validate($this->obligation);
        $this->assertTrue($result);
    }
    
    public function testValidMaximumInterestRate(): void
    {
        $this->obligation->setTauxInteret(100);
        $result = $this->validator->validate($this->obligation);
        $this->assertTrue($result);
    }
    
    public function testValidMinimumDuration(): void
    {
        $this->obligation->setDuree(1);
        $result = $this->validator->validate($this->obligation);
        $this->assertTrue($result);
    }
    
    public function testValidMaximumDuration(): void
    {
        $this->obligation->setDuree(120);
        $result = $this->validator->validate($this->obligation);
        $this->assertTrue($result);
    }
    
    // ==============================================
    // TESTS INVALIDES - NOM
    // ==============================================
    
    public function testEmptyName(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom de l\'obligation est obligatoire');
        
        $this->obligation->setNom('');
        $this->validator->validate($this->obligation);
    }
    
    public function testNameWithOnlySpaces(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom de l\'obligation est obligatoire');
        
        $this->obligation->setNom('   ');
        $this->validator->validate($this->obligation);
    }
    
    // ==============================================
    // TESTS INVALIDES - TAUX D'INTÉRÊT
    // ==============================================
    
    public function testNegativeInterestRate(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le taux d\'intérêt doit être supérieur à 0%');
        
        $this->obligation->setTauxInteret(-5);
        $this->validator->validate($this->obligation);
    }
    
    public function testZeroInterestRate(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le taux d\'intérêt doit être supérieur à 0%');
        
        $this->obligation->setTauxInteret(0);
        $this->validator->validate($this->obligation);
    }
    
    public function testTooHighInterestRate(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le taux d\'intérêt ne peut pas dépasser 100%');
        
        $this->obligation->setTauxInteret(150);
        $this->validator->validate($this->obligation);
    }
    
    // ==============================================
    // TESTS INVALIDES - DURÉE
    // ==============================================
    
    public function testNegativeDuration(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée doit être supérieure à 0 mois');
        
        $this->obligation->setDuree(-6);
        $this->validator->validate($this->obligation);
    }
    
    public function testZeroDuration(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée doit être supérieure à 0 mois');
        
        $this->obligation->setDuree(0);
        $this->validator->validate($this->obligation);
    }
    
    public function testTooLongDuration(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée ne peut pas dépasser 120 mois (10 ans)');
        
        $this->obligation->setDuree(240);
        $this->validator->validate($this->obligation);
    }
    
    // ==============================================
    // TESTS DES CALCULS MATHÉMATIQUES
    // ==============================================
    
    public function testCalculateProfit(): void
    {
        $profit = $this->validator->calculateProfit(1000, 10, 12);
        $this->assertEquals(100, $profit);
    }
    
    public function testCalculateProfitWithMonths(): void
    {
        $profit = $this->validator->calculateProfit(2000, 6, 24);
        $this->assertEquals(240, $profit);
    }
    
    public function testCalculateProfitLargeNumbers(): void
    {
        $profit = $this->validator->calculateProfit(10000, 12.5, 36);
        // 10000 * 0.125 * 3 = 3750
        $this->assertEquals(3750, $profit);
    }
    
    public function testCalculateProfitRounding(): void
    {
        // Test avec des nombres qui donnent des décimales
        $profit = $this->validator->calculateProfit(333.33, 7.5, 18);
        
        // Vérifie que le résultat est un float
        $this->assertIsFloat($profit);
        
        // Vérifie que le résultat a au maximum 2 décimales
        $decimalPart = explode('.', (string)$profit);
        if (isset($decimalPart[1])) {
            $decimalPlaces = strlen($decimalPart[1]);
            $this->assertLessThanOrEqual(2, $decimalPlaces, 'Le profit doit avoir au maximum 2 décimales');
        }
        
        // Vérifie que le nombre est bien formatable à 2 décimales
        $formatted = number_format($profit, 2);
        $this->assertEquals($profit, (float)$formatted, 0.01); // Tolerance de 0.01
    }
    
    public function testCalculateTotalRepayment(): void
    {
        $total = $this->validator->calculateTotalRepayment(1000, 10, 12);
        $this->assertEquals(1100, $total);
    }
    
    public function testCalculateTotalRepaymentWithDecimals(): void
    {
        $total = $this->validator->calculateTotalRepayment(333.33, 7.5, 18);
        $this->assertIsFloat($total);
        $this->assertGreaterThan(333.33, $total);
    }
    
    public function testReturnTypes(): void
    {
        $profit = $this->validator->calculateProfit(500, 5, 12);
        $total = $this->validator->calculateTotalRepayment(500, 5, 12);
        
        $this->assertIsFloat($profit);
        $this->assertIsFloat($total);
    }
    
    // ==============================================
    // TESTS BONUS: Cas limites
    // ==============================================
    
    public function testVerySmallAmount(): void
    {
        $profit = $this->validator->calculateProfit(0.01, 1, 1);
        $this->assertIsFloat($profit);
        $this->assertGreaterThanOrEqual(0, $profit);
    }
    
    public function testVeryLargeAmount(): void
    {
        $profit = $this->validator->calculateProfit(999999999, 15, 120);
        $this->assertIsFloat($profit);
        $this->assertGreaterThan(0, $profit);
    }
}