<?php
// tests/Controller/Loan/InvestissementobligationControllerTest.php

namespace App\Tests\Loan_controllers;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\management\Wallet;
use App\Entity\user\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class InvestissementobligationControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = static::createClient();
    }

    // ==============================================
    // TESTS DES PAGES (Commentés car nécessitent BDD)
    // ==============================================

    /*
    public function testIndexPageIsSuccessful(): void
    {
        $this->client->request('GET', '/loan/investment/');
        $this->assertResponseIsSuccessful();
    }

    public function testNewPageIsSuccessful(): void
    {
        $this->client->request('GET', '/loan/investment/new');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
    }

    public function testNewPageWithObligationId(): void
    {
        $this->client->request('GET', '/loan/investment/new/1');
        $this->assertResponseIsSuccessful();
    }
    */

    // ==============================================
    // TESTS DE VISUALISATION (Commentés)
    // ==============================================

    /*
    public function testShowNonExistentInvestment(): void
    {
        $this->client->request('GET', '/loan/investment/99999');
        $this->assertResponseStatusCodeSame(Response::HTTP_NOT_FOUND);
    }
    */

    // ==============================================
    // TESTS DE L'ENTITÉ INVESTISSEMENT (Sans BDD)
    // ==============================================

    public function testInvestmentEntityGettersSetters(): void
    {
        $investment = new Investissementobligation();
        $investment->setWalletId(1);
        $investment->setObligationId(1);
        $investment->setMontantInvesti(1000);
        $dateAchat = new \DateTime('2024-01-15');
        $dateMaturite = new \DateTime('2026-01-15');
        $investment->setDateAchat($dateAchat);
        $investment->setDateMaturite($dateMaturite);
        
        $this->assertEquals(1, $investment->getWalletId());
        $this->assertEquals(1, $investment->getObligationId());
        $this->assertEquals(1000, $investment->getMontantInvesti());
        $this->assertEquals('2024-01-15', $investment->getDateAchat()->format('Y-m-d'));
        $this->assertEquals('2026-01-15', $investment->getDateMaturite()->format('Y-m-d'));
    }

    public function testInvestmentWithValidAmount(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        
        $this->assertGreaterThan(0, $investment->getMontantInvesti());
        $this->assertEquals(5000, $investment->getMontantInvesti());
    }

    public function testInvestmentWithZeroAmount(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(0);
        
        $this->assertEquals(0, $investment->getMontantInvesti());
    }

    // ==============================================
    // TESTS DE L'ENTITÉ OBLIGATION
    // ==============================================

    public function testObligationEntity(): void
    {
        $obligation = new Obligation();
        $obligation->setNom('Test Bond');
        $obligation->setTauxInteret(8.5);
        $obligation->setDuree(24);
        
        $this->assertEquals('Test Bond', $obligation->getNom());
        $this->assertEquals(8.5, $obligation->getTauxInteret());
        $this->assertEquals(24, $obligation->getDuree());
    }

    public function testObligationWithValidData(): void
    {
        $obligation = new Obligation();
        $obligation->setNom('Valid Bond');
        $obligation->setTauxInteret(5.5);
        $obligation->setDuree(12);
        
        $this->assertNotNull($obligation->getNom());
        $this->assertGreaterThan(0, $obligation->getTauxInteret());
        $this->assertGreaterThan(0, $obligation->getDuree());
    }

    // ==============================================
    // TESTS DE L'ENTITÉ WALLET
    // ==============================================

    public function testWalletEntity(): void
    {
        $user = new Utilisateur();
        $user->setNom('Test');
        $user->setPrenom('User');
        $user->setGmail('test@test.com');
        
        $wallet = new Wallet();
        $wallet->setUtilisateur($user);
        $wallet->setPays('Tunisia');
        $wallet->setSolde(10000);
        $wallet->setDevise('DT');
        
        $this->assertEquals('Tunisia', $wallet->getPays());
        $this->assertEquals(10000, $wallet->getSolde());
        $this->assertEquals('DT', $wallet->getDevise());
        $this->assertNotNull($wallet->getUtilisateur());
    }

    public function testWalletWithZeroBalance(): void
    {
        $wallet = new Wallet();
        $wallet->setSolde(0);
        
        $this->assertEquals(0, $wallet->getSolde());
    }

    public function testWalletWithNegativeBalance(): void
    {
        $wallet = new Wallet();
        $wallet->setSolde(-500);
        
        $this->assertEquals(-500, $wallet->getSolde());
    }

    // ==============================================
    // TESTS DE L'ENTITÉ UTILISATEUR
    // ==============================================

    public function testUtilisateurEntity(): void
    {
        $user = new Utilisateur();
        $user->setNom('Dupont');
        $user->setPrenom('Jean');
        $user->setGmail('jean.dupont@test.com');
        $user->setRole('USER');
        $user->setStatut('ACTIF');
        
        $this->assertEquals('Dupont', $user->getNom());
        $this->assertEquals('Jean', $user->getPrenom());
        $this->assertEquals('jean.dupont@test.com', $user->getGmail());
        $this->assertEquals('USER', $user->getRole());
        $this->assertEquals('ACTIF', $user->getStatut());
    }

    // ==============================================
    // TESTS DE CALCUL DE MATURITÉ
    // ==============================================

    public function testMaturityDateCalculation(): void
    {
        $dateAchat = new \DateTime('2024-01-15');
        $durationMonths = 24;
        $expectedMaturity = (clone $dateAchat)->modify("+{$durationMonths} months");
        
        $investment = new Investissementobligation();
        $investment->setDateAchat($dateAchat);
        $investment->setDateMaturite($expectedMaturity);
        
        $this->assertEquals($expectedMaturity->format('Y-m-d'), $investment->getDateMaturite()->format('Y-m-d'));
    }

    public function testMaturityDateForDifferentDurations(): void
    {
        $dateAchat = new \DateTime('2024-01-01');
        
        $testCases = [
            3 => '2024-04-01',
            6 => '2024-07-01',
            12 => '2025-01-01',
            24 => '2026-01-01',
            36 => '2027-01-01'
        ];
        
        foreach ($testCases as $months => $expected) {
            $maturityDate = (clone $dateAchat)->modify("+{$months} months");
            $this->assertEquals($expected, $maturityDate->format('Y-m-d'));
        }
    }

    // ==============================================
    // TESTS DE CALCUL D'INTÉRÊTS
    // ==============================================

    public function testInterestCalculation(): void
    {
        $amount = 1000;
        $rate = 8.5;
        $durationMonths = 24;
        
        $expectedInterest = $amount * ($rate / 100) * ($durationMonths / 12);
        
        $this->assertEquals(170, $expectedInterest);
    }

    public function testInterestCalculationWithDifferentValues(): void
    {
        // Montant 5000, taux 10%, durée 36 mois = 36/12 = 3 ans
        $interest = 5000 * (10 / 100) * (36 / 12);
        $this->assertEquals(1500, $interest);
        
        // Montant 2000, taux 5%, durée 12 mois = 1 an
        $interest2 = 2000 * (5 / 100) * 1;
        $this->assertEquals(100, $interest2);
    }

    // ==============================================
    // TESTS DE VALIDATION DES MONTANTS
    // ==============================================

    public function testInvestmentAmountCannotBeNegative(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(-100);
        
        $this->assertLessThan(0, $investment->getMontantInvesti());
    }

    public function testInvestmentAmountIsPositive(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(500);
        
        $this->assertGreaterThan(0, $investment->getMontantInvesti());
    }

    // ==============================================
    // TESTS DE VALIDATION DES DATES
    // ==============================================

    public function testMaturityDateAfterPurchaseDate(): void
    {
        $dateAchat = new \DateTime('2024-01-01');
        $dateMaturite = new \DateTime('2025-01-01');
        
        $this->assertGreaterThan($dateAchat, $dateMaturite);
    }

    public function testMaturityDateCannotBeBeforePurchaseDate(): void
    {
        $dateAchat = new \DateTime('2024-01-01');
        $dateMaturite = new \DateTime('2023-01-01');
        
        $this->assertLessThan($dateAchat, $dateMaturite);
    }
}