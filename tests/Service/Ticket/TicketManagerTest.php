<?php

namespace App\Tests\Service\Ticket;

use App\Entity\reclamation\Ticket;
use App\Service\Ticket\TicketManager;
use PHPUnit\Framework\TestCase;

class TicketManagerTest extends TestCase
{
    private TicketManager $manager;

    protected function setUp(): void
    {
        $this->manager = new TicketManager();
    }

    private function createValidTicket(): Ticket
    {
        $ticket = new Ticket();
        $ticket->setTitre('Erreur paiement');
        $ticket->setDescription('Le paiement par carte ne fonctionne plus');
        $ticket->setDateCreation(new \DateTime('-1 day'));
        $ticket->setPriorite(Ticket::PRIORITY_HIGH);
        $ticket->setStatut(Ticket::STATUS_OPEN);
        $ticket->setType('Technical');

        return $ticket;
    }

    public function testValidTicket(): void
    {
        $ticket = $this->createValidTicket();

        $this->assertTrue($this->manager->validate($ticket));
    }

    public function testTicketWithoutTitle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le titre du ticket est obligatoire');

        $ticket = $this->createValidTicket();
        $ticket->setTitre('');

        $this->manager->validate($ticket);
    }

    public function testTicketWithShortTitle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le titre du ticket doit contenir au moins 3 caractères');

        $ticket = $this->createValidTicket();
        $ticket->setTitre('ab');

        $this->manager->validate($ticket);
    }

    public function testTicketWithoutDescription(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La description du ticket est obligatoire');

        $ticket = $this->createValidTicket();
        $ticket->setDescription('');

        $this->manager->validate($ticket);
    }

    public function testTicketWithShortDescription(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La description du ticket doit contenir au moins 10 caractères');

        $ticket = $this->createValidTicket();
        $ticket->setDescription('court');

        $this->manager->validate($ticket);
    }

    public function testTicketWithFutureCreationDate(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La date de création ne peut pas être dans le futur');

        $ticket = $this->createValidTicket();
        $ticket->setDateCreation(new \DateTime('+1 day'));

        $this->manager->validate($ticket);
    }

    public function testTicketWithInvalidPriority(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La priorité du ticket est invalide');

        $ticket = $this->createValidTicket();
        $ticket->setPriorite('Urgentissime');

        $this->manager->validate($ticket);
    }

    public function testTicketWithInvalidStatus(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le statut du ticket est invalide');

        $ticket = $this->createValidTicket();
        $ticket->setStatut('Unknown');

        $this->manager->validate($ticket);
    }

    public function testTicketWithoutType(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le type du ticket est obligatoire');

        $ticket = $this->createValidTicket();
        $ticket->setType('');

        $this->manager->validate($ticket);
    }
}