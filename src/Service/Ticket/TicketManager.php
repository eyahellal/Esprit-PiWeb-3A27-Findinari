<?php

// src/Service/Ticket/TicketManager.php
namespace App\Service\Ticket;

use App\Entity\reclamation\Ticket;

class TicketManager
{private const ALLOWED_PRIORITIES = [
    Ticket::PRIORITY_HIGH,
    Ticket::PRIORITY_MEDIUM,
    Ticket::PRIORITY_LOW,
];

private const ALLOWED_STATUSES = [
    Ticket::STATUS_OPEN,
    Ticket::STATUS_IN_PROGRESS,
    Ticket::STATUS_CLOSED,
];

private const DEFAULT_STATUS = Ticket::STATUS_OPEN;
    private const MIN_TITLE_LENGTH = 3;
    private const MIN_DESCRIPTION_LENGTH = 10;

    public function validate(Ticket $ticket): bool
    {
        $this->validateCommonRules($ticket);

        return true;
    }

    public function initializeNewTicket(Ticket $ticket): bool
    {
        if ($ticket->getDateCreation() === null) {
            $ticket->setDateCreation(new \DateTime());
        }

        $status = trim((string) $ticket->getStatut());
        if ($status === '') {
            $ticket->setStatut(self::DEFAULT_STATUS);
        }

        $this->validateCommonRules($ticket);

        return true;
    }

 public function validateForUpdate(Ticket $ticket): bool
{
    if ($ticket->getId() === null) {
        throw new \InvalidArgumentException('Le ticket à modifier doit déjà exister');
    }

    if ($ticket->getStatut() === Ticket::STATUS_CLOSED) {
        throw new \InvalidArgumentException('Un ticket fermé ne peut pas être modifié');
    }

    $this->validateCommonRules($ticket);

    return true;
}
    private function validateCommonRules(Ticket $ticket): void
    {
        $title = trim((string) $ticket->getTitre());
        if ($title === '') {
            throw new \InvalidArgumentException('Le titre du ticket est obligatoire');
        }

        if (mb_strlen($title) < self::MIN_TITLE_LENGTH) {
            throw new \InvalidArgumentException('Le titre du ticket doit contenir au moins 3 caractères');
        }

        $description = trim((string) $ticket->getDescription());
        if ($description === '') {
            throw new \InvalidArgumentException('La description du ticket est obligatoire');
        }

        if (mb_strlen($description) < self::MIN_DESCRIPTION_LENGTH) {
            throw new \InvalidArgumentException('La description du ticket doit contenir au moins 10 caractères');
        }

        if ($ticket->getDateCreation() === null) {
            throw new \InvalidArgumentException('La date de création est obligatoire');
        }

        $now = new \DateTime();
        if ($ticket->getDateCreation() > $now) {
            throw new \InvalidArgumentException('La date de création ne peut pas être dans le futur');
        }

        $priority = trim((string) $ticket->getPriorite());
        if ($priority === '' || !in_array($priority, self::ALLOWED_PRIORITIES, true)) {
            throw new \InvalidArgumentException('La priorité du ticket est invalide');
        }

        $status = trim((string) $ticket->getStatut());
        if ($status === '' || !in_array($status, self::ALLOWED_STATUSES, true)) {
            throw new \InvalidArgumentException('Le statut du ticket est invalide');
        }

        $type = trim((string) $ticket->getType());
        if ($type === '') {
            throw new \InvalidArgumentException('Le type du ticket est obligatoire');
        }
    }
}