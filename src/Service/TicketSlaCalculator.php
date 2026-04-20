<?php

namespace App\Service;

use App\Entity\reclamation\Ticket;

class TicketSlaCalculator
{
    public function calculateDeadline(string $priority, \DateTimeInterface $createdAt): \DateTime
    {
        $deadline = \DateTime::createFromInterface($createdAt);

        switch ($priority) {
            case Ticket::PRIORITY_HIGH:
                $deadline->modify('+2 hours');
                break;

            case Ticket::PRIORITY_MEDIUM:
                $deadline->modify('+24 hours');
                break;

            case Ticket::PRIORITY_LOW:
            default:
                $deadline->modify('+48 hours');
                break;
        }

        return $deadline;
    }

    public function isBreached(?\DateTimeInterface $deadline): bool
    {
        if (!$deadline) {
            return false;
        }

        return new \DateTime() > \DateTime::createFromInterface($deadline);
    }
}