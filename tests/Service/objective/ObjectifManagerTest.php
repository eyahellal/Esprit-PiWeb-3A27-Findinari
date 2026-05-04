<?php
// tests/Service/objective/ObjectifManagerTest.php

namespace App\Tests\Service\objective;

use App\Entity\objective\Objectif;
use App\Entity\objective\Contributiongoal;
use App\Service\ObjectifManager;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ObjectifManagerTest extends TestCase
{
    private $entityManager;
    private $connection;
    private ObjectifManager $manager;

    protected function setUp(): void
    {
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        $this->connection = $this->createMock(Connection::class);
        $this->manager = new ObjectifManager($this->entityManager, $this->connection);
    }

    /**
     * Crée un objectif valide (sans contribution existante)
     */
    private function createValidObjectif(): Objectif
    {
        $objectif = new Objectif();
        $objectif->setTitre('Voyage');
        $objectif->setMontant(1000.0);
        $objectif->setDateDebut(new \DateTime('+1 day'));
        $objectif->setDuree(30);
        $objectif->setStatut('EN_COURS');
        $objectif->setWalletId(1);
        return $objectif;
    }

    // ✅ CONTRIBUTION VALIDE
    public function testValidContribution(): void
    {
        $objectif = $this->createValidObjectif();

        // Simuler un wallet avec solde suffisant
        $this->connection->expects($this->once())
            ->method('fetchAssociative')
            ->willReturn(['solde' => 500.0]);

        $this->connection->expects($this->once())
            ->method('executeStatement')
            ->with('UPDATE wallet SET solde = solde - ? WHERE id = ?', [200.0, 1]);

        $this->entityManager->expects($this->once())->method('persist');
        $this->entityManager->expects($this->once())->method('flush');

        $this->manager->contribute($objectif, 200.0);
        $this->assertTrue(true); // pas d'exception
    }

    // ❌ MONTANT NÉGATIF
    public function testContributeWithNegativeAmount(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant de la contribution doit être positif');

        $objectif = $this->createValidObjectif();
        $this->manager->contribute($objectif, -50.0);
    }

    // ❌ SOLDE INSUFFISANT
    public function testContributeWithInsufficientBalance(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Solde insuffisant');

        $objectif = $this->createValidObjectif();

        $this->connection->expects($this->once())
            ->method('fetchAssociative')
            ->willReturn(['solde' => 50.0]);

        $this->manager->contribute($objectif, 100.0);
    }

    // ❌ DÉPASSEMENT DE LA CIBLE
    public function testContributeExceedsTarget(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('dépasse la cible');

        $objectif = $this->createValidObjectif();

        // Ajouter une contribution existante de 900€
        $existing = new Contributiongoal();
        $existing->setMontant(900.0);
        $objectif->addContributiongoal($existing);

        $this->connection->expects($this->once())
            ->method('fetchAssociative')
            ->willReturn(['solde' => 500.0]); // solde suffisant

        $this->manager->contribute($objectif, 200.0);
    }

    // ✅ SUPPRESSION D'UNE CONTRIBUTION AVEC REMBOURSEMENT
    public function testDeleteContribution(): void
    {
        $contribution = new Contributiongoal();
        $contribution->setMontant(75.0);
        $objectif = $this->createValidObjectif();
        $contribution->setObjectif($objectif);

        $this->connection->expects($this->once())
            ->method('executeStatement')
            ->with('UPDATE wallet SET solde = solde + ? WHERE id = ?', [75.0, 1]);

        $this->entityManager->expects($this->once())->method('remove')->with($contribution);
        $this->entityManager->expects($this->exactly(2))->method('flush');

        $this->manager->deleteContribution($contribution);
        $this->assertTrue(true);
    }

    // ✅ SUPPRESSION OBJECTIF SANS CONTRIBUTION
    public function testDeleteObjectifWithoutRefund(): void
    {
        $objectif = $this->createValidObjectif(); // aucune contribution

        $this->connection->expects($this->never())->method('executeStatement');
        $this->entityManager->expects($this->once())->method('remove')->with($objectif);
        $this->entityManager->expects($this->once())->method('flush');

        $this->manager->deleteObjectifWithRefund($objectif);
        $this->assertTrue(true);
    }

    // ✅ TOP CONTRIBUTEURS (reste mocké car dépend de GoalStatisticsService)
    public function testGetTopContributeurs(): void
    {
        $objectif1 = $this->createValidObjectif();
        $objectif1->setWalletId(1);
        $objectif2 = $this->createValidObjectif();
        $objectif2->setWalletId(2);

        $walletToUser = [1 => 10, 2 => 20];
        $usersMap = [
            10 => ['nom' => 'Jean Dupont', 'pays' => 'France'],
            20 => ['nom' => 'Marie Curie', 'pays' => 'Pologne']
        ];

        $goalStats = $this->createMock(\App\Service\GoalStatisticsService::class);
        $goalStats->method('compute')->willReturnCallback(function($obj) {
            if ($obj->getWalletId() === 1) {
                return ['progressPct' => 100, 'totalCollected' => 500];
            }
            return ['progressPct' => 50, 'totalCollected' => 0];
        });

        $objectifs = [$objectif1, $objectif2];
        $result = $this->manager->getTopContributeurs($objectifs, $walletToUser, $usersMap, $goalStats);

        $this->assertCount(1, $result);
        $this->assertEquals(10, $result[0]['userId']);
        $this->assertEquals('Jean Dupont', $result[0]['userName']);
        $this->assertEquals(500, $result[0]['totalCollected']);
    }
}