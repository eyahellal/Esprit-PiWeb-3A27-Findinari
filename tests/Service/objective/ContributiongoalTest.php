<?php

namespace App\Tests\Service\objective;

use App\Entity\objective\Contributiongoal;
use App\Entity\objective\Objectif;
use App\Service\ContributionManager;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ContributiongoalTest extends TestCase
{
    private ContributionManager $manager;

    protected function setUp(): void
    {
        $this->manager = new ContributionManager();
    }

    private function createValidContribution(): Contributiongoal
    {
        $objectif = $this->createMock(Objectif::class);
        $contribution = new Contributiongoal();
        $contribution->setObjectif($objectif);
        $contribution->setMontant(150.75);
        $contribution->setDate(new \DateTime('-1 day'));
        return $contribution;
    }

    // ✅ Contribution valide
    public function testValidContribution(): void
    {
        $contribution = $this->createValidContribution();
        $this->assertTrue($this->manager->validate($contribution));
    }

    // ❌ Montant négatif
    public function testNegativeAmount(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('strictement positif');

        $contribution = $this->createValidContribution();
        $contribution->setMontant(50.0);
        $this->manager->validate($contribution);
    }

    // ❌ Montant nul
    public function testZeroAmount(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('strictement positif');

        $contribution = $this->createValidContribution();
        $contribution->setMontant(50);
        $this->manager->validate($contribution);
    }

    // ❌ Montant trop élevé — message sans espaces de groupement pour éviter
    //    les ambiguïtés d'encodage (espace insécable vs espace normal)
    public function testAmountExceedsMax(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('500');

        $contribution = $this->createValidContribution();
        $contribution->setMontant(100_000_000);
        $this->manager->validate($contribution);
    }

    // ❌ Trop de décimales
    public function testTooManyDecimals(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('2 décimales maximum');

        $contribution = $this->createValidContribution();
        $contribution->setMontant(123.456);
        $this->manager->validate($contribution);
    }

    // ❌ Date dans le futur
    public function testFutureDate(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('pas être dans le futur');

        $contribution = $this->createValidContribution();
        $contribution->setDate(new \DateTime('+1 day'));
        $this->manager->validate($contribution);
    }

    // ✅ Date aujourd'hui (autorisée)
    public function testTodayDate(): void
    {
        $contribution = $this->createValidContribution();
        $contribution->setDate(new \DateTime());
        $this->assertTrue($this->manager->validate($contribution));
    }

    // ❌ Pas d'objectif
    public function testMissingObjectif(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('liée à un objectif');

        $contribution = new Contributiongoal();
        $contribution->setMontant(100.0);
        $contribution->setDate(new \DateTime('-1 day'));
        $contribution->setObjectif(null);
        $this->manager->validate($contribution);
    }

    // ❌ Date manquante
    public function testMissingDate(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('obligatoire');

        $contribution = $this->createValidContribution();
        $reflection = new \ReflectionClass($contribution);
        $property = $reflection->getProperty('date');
        $property->setValue($contribution, null);
        $this->manager->validate($contribution);
    }
}