<?php

namespace App\tests\Service\Ticket;

use App\Entity\reclamation\Ticket;
use App\Service\TicketSlaCalculator;
use PHPUnit\Framework\TestCase;

class TicketSlaCalculatorTest extends TestCase
{
    private TicketSlaCalculator $calculator;

    protected function setUp(): void
    {
        // Initialisation du service avant chaque test
        $this->calculator = new TicketSlaCalculator();
    }

    /**
     * Teste la règle : Priorité HIGH = +2 heures
     */
    public function testCalculateHighPriorityDeadline(): void
    {
        $createdAt = new \DateTime('2026-05-03 10:00:00');
        $expected = new \DateTime('2026-05-03 12:00:00');

        $result = $this->calculator->calculateDeadline(Ticket::PRIORITY_HIGH, $createdAt);

        $this->assertEquals($expected->format('Y-m-d H:i'), $result->format('Y-m-d H:i'));
    }

    /**
     * Teste la règle : Priorité MEDIUM = +24 heures
     */
    public function testCalculateMediumPriorityDeadline(): void
    {
        $createdAt = new \DateTime('2026-05-03 10:00:00');
        $expected = new \DateTime('2026-05-04 10:00:00');

        $result = $this->calculator->calculateDeadline(Ticket::PRIORITY_MEDIUM, $createdAt);

        $this->assertEquals($expected->format('Y-m-d H:i'), $result->format('Y-m-d H:i'));
    }

    /**
     * Teste la détection d'un dépassement de délai (Breach)
     */
    public function testIsBreachedReturnsTrueWhenDeadlineIsPast(): void
    {
        // Une deadline qui était fixée à hier
        $pastDeadline = new \DateTime('+1 day');
        
        $this->assertTrue($this->calculator->isBreached($pastDeadline));
    }

    /**
     * Teste qu'un ticket n'est pas considéré comme dépassé si la date est future
     */
    public function testIsBreachedReturnsFalseWhenDeadlineIsFuture(): void
    {
        // Une deadline prévue pour demain
        $futureDeadline = new \DateTime('+1 day');
        
        $this->assertFalse($this->calculator->isBreached($futureDeadline));
    }
}