<?php
// tests/Service/Loan/FinancialHealthServiceTest.php
namespace App\Tests\Service\Loan;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\management\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;
use App\Service\FinancialHealthService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class FinancialHealthServiceTest extends TestCase
{
    private FinancialHealthService $service;
    
    /** @var MockObject|WalletRepository */
    private $walletRepository;
    
    /** @var MockObject|InvestissementobligationRepository */
    private $investmentRepository;
    
    /** @var MockObject|ObligationRepository */
    private $obligationRepository;
    
    /** @var MockObject|EntityManagerInterface */
    private $entityManager;
    
    private Utilisateur $user;
    
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->walletRepository = $this->createMock(WalletRepository::class);
        $this->investmentRepository = $this->createMock(InvestissementobligationRepository::class);
        $this->obligationRepository = $this->createMock(ObligationRepository::class);
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        
        $this->service = new FinancialHealthService(
            $this->walletRepository,
            $this->investmentRepository,
            $this->obligationRepository,
            $this->entityManager
        );
        
        $this->user = new Utilisateur();
        $this->user->setNom('Test');
        $this->user->setPrenom('User');
        $this->user->setGmail('test@test.com');
    }
    
    // ==============================================
    // TESTS POUR calculateHealthScore
    // ==============================================
    
    public function testCalculateHealthScoreWithNoWallets(): void
    {
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->with(['utilisateur' => $this->user])
            ->willReturn([]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(0, $result['score']);
        $this->assertEquals('No Data', $result['level']);
        $this->assertEquals('gray', $result['color']);
        $this->assertEquals(0, $result['totalBalance']);
        $this->assertEquals(0, $result['walletsCount']);
        $this->assertNotEmpty($result['recommendations']);
    }
    
    public function testCalculateHealthScoreWithWallets(): void
    {
        $wallet1 = new Wallet();
        $wallet1->setSolde(5000);
        
        $wallet2 = new Wallet();
        $wallet2->setSolde(3000);
        
        $wallets = [$wallet1, $wallet2];
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->with(['utilisateur' => $this->user])
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertArrayHasKey('score', $result);
        $this->assertArrayHasKey('level', $result);
        $this->assertArrayHasKey('color', $result);
        $this->assertArrayHasKey('metrics', $result);
        $this->assertArrayHasKey('recommendations', $result);
        $this->assertEquals(8000, $result['totalBalance']);
        $this->assertEquals(2, $result['walletsCount']);
    }
    
    // ==============================================
    // TESTS POUR calculateSavingsRate
    // ==============================================
    
    public function testSavingsRateWithZeroBalance(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(0);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(0, $result['metrics']['savingsRate']);
    }
    
    public function testSavingsRateWithLowBalance(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(400);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(20, $result['metrics']['savingsRate']);
    }
    
    public function testSavingsRateWithMediumBalance(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(2000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(60, $result['metrics']['savingsRate']);
    }
    
    public function testSavingsRateWithHighBalance(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(15000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(100, $result['metrics']['savingsRate']);
    }
    
    // ==============================================
    // TESTS POUR calculateInvestmentRatio
    // ==============================================
    
    public function testInvestmentRatioWithNoInvestments(): void
{
    $wallets = [new Wallet()];
    $wallets[0]->setSolde(10000);
    
    $this->walletRepository->expects($this->once())
        ->method('findBy')
        ->willReturn($wallets);
    
    $this->mockInvestmentRepositoryEmpty();
    
    $result = $this->service->calculateHealthScore($this->user);
    
    // Correction : avec 0% d'investissement, le ratio retourne 20 (car < 10%)
    $this->assertEquals(20, $result['metrics']['investmentRatio']);
}
    
    public function testInvestmentRatioWithLowInvestments(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(500);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(20, $result['metrics']['investmentRatio']);
    }
    
    public function testInvestmentRatioWithGoodInvestments(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(3000);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(60, $result['metrics']['investmentRatio']);
    }
    
    public function testInvestmentRatioWithHighInvestments(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(7000);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(100, $result['metrics']['investmentRatio']);
    }
    
    // ==============================================
    // TESTS POUR calculateDiversification
    // ==============================================
    
    public function testDiversificationWithNoInvestments(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(0, $result['metrics']['diversification']);
    }
    
    public function testDiversificationWithOneObligation(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment1 = new Investissementobligation();
        $investment1->setObligationId(1);
        
        $investment2 = new Investissementobligation();
        $investment2->setObligationId(1);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment1, $investment2]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(30, $result['metrics']['diversification']);
    }
    
    public function testDiversificationWithThreeObligations(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment1 = new Investissementobligation();
        $investment1->setObligationId(1);
        
        $investment2 = new Investissementobligation();
        $investment2->setObligationId(2);
        
        $investment3 = new Investissementobligation();
        $investment3->setObligationId(3);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment1, $investment2, $investment3]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(80, $result['metrics']['diversification']);
    }
    
    // ==============================================
    // TESTS POUR getScoreLevel
    // ==============================================
    
    public function testScoreLevels(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertContains($result['level'], ['Excellent', 'Good', 'Average', 'Poor', 'Critical']);
        $this->assertContains($result['color'], ['green', 'blue', 'yellow', 'orange', 'red']);
    }
    
    // ==============================================
    // TESTS POUR generateRecommendations
    // ==============================================
    
    public function testRecommendationsGeneratedWhenScoreLow(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(100);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertNotEmpty($result['recommendations']);
        $this->assertGreaterThanOrEqual(1, count($result['recommendations']));
    }
    
    public function testPositiveRecommendationWhenEverythingGood(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(50000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment1 = new Investissementobligation();
        $investment1->setObligationId(1);
        $investment1->setMontantInvesti(10000);
        
        $investment2 = new Investissementobligation();
        $investment2->setObligationId(2);
        $investment2->setMontantInvesti(10000);
        
        $investment3 = new Investissementobligation();
        $investment3->setObligationId(3);
        $investment3->setMontantInvesti(10000);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment1, $investment2, $investment3]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertNotEmpty($result['recommendations']);
    }
    
    // ==============================================
    // TESTS POUR LES CALCULS AVEC INVESTISSEMENTS
    // ==============================================
    
    public function testCalculateHealthScoreWithInvestments(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(10000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setObligationId(1);
        
        $this->mockInvestmentRepositoryWithInvestments([$investment]);
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(1, $result['investmentsCount']);
        $this->assertEquals(10000, $result['totalBalance']);
        $this->assertIsArray($result['metrics']);
        $this->assertIsArray($result['recommendations']);
    }
    
    // ==============================================
    // TESTS POUR LES VALEURS LIMITES
    // ==============================================
    
    public function testCalculateEmergencyFundWithZeroBalance(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(0);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertEquals(0, $result['metrics']['emergencyFund']);
    }
    
    public function testReturnStructureIsComplete(): void
    {
        $wallets = [new Wallet()];
        $wallets[0]->setSolde(1000);
        
        $this->walletRepository->expects($this->once())
            ->method('findBy')
            ->willReturn($wallets);
        
        $this->mockInvestmentRepositoryEmpty();
        
        $result = $this->service->calculateHealthScore($this->user);
        
        $this->assertArrayHasKey('score', $result);
        $this->assertArrayHasKey('level', $result);
        $this->assertArrayHasKey('color', $result);
        $this->assertArrayHasKey('metrics', $result);
        $this->assertArrayHasKey('recommendations', $result);
        $this->assertArrayHasKey('totalBalance', $result);
        $this->assertArrayHasKey('investmentsCount', $result);
        $this->assertArrayHasKey('walletsCount', $result);
        
        $this->assertArrayHasKey('savingsRate', $result['metrics']);
        $this->assertArrayHasKey('investmentRatio', $result['metrics']);
        $this->assertArrayHasKey('diversification', $result['metrics']);
        $this->assertArrayHasKey('emergencyFund', $result['metrics']);
        $this->assertArrayHasKey('goalProgress', $result['metrics']);
    }
    
    // ==============================================
    // MÉTHODES AIDES (Mocks corrigés)
    // ==============================================
    
    private function mockInvestmentRepositoryEmpty(): void
    {
        $queryBuilderMock = $this->createMock(QueryBuilder::class);
        $queryMock = $this->createMock(Query::class);
        
        $this->investmentRepository->expects($this->once())
            ->method('createQueryBuilder')
            ->with('i')
            ->willReturn($queryBuilderMock);
        
        $queryBuilderMock->expects($this->once())
            ->method('where')
            ->willReturnSelf();
        
        $queryBuilderMock->expects($this->once())
            ->method('setParameter')
            ->willReturnSelf();
        
        $queryBuilderMock->expects($this->once())
            ->method('getQuery')
            ->willReturn($queryMock);
        
        $queryMock->expects($this->once())
            ->method('getResult')
            ->willReturn([]);
    }
    
    private function mockInvestmentRepositoryWithInvestments(array $investments): void
    {
        $queryBuilderMock = $this->createMock(QueryBuilder::class);
        $queryMock = $this->createMock(Query::class);
        
        $this->investmentRepository->expects($this->once())
            ->method('createQueryBuilder')
            ->with('i')
            ->willReturn($queryBuilderMock);
        
        $queryBuilderMock->expects($this->once())
            ->method('where')
            ->willReturnSelf();
        
        $queryBuilderMock->expects($this->once())
            ->method('setParameter')
            ->willReturnSelf();
        
        $queryBuilderMock->expects($this->once())
            ->method('getQuery')
            ->willReturn($queryMock);
        
        $queryMock->expects($this->once())
            ->method('getResult')
            ->willReturn($investments);
    }
}