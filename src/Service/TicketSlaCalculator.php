<?php

namespace App\Service;

class TicketSlaCalculator
{
    public function calculateDeadline(string $priority, \DateTimeInterface $createdAt): \DateTime
    {
        $deadline = \DateTime::createFromInterface($createdAt);

        switch ($priority) {
            case 'High':
                $deadline->modify('+2 hours');
                break;

            case 'Medium':
                $deadline->modify('+24 hours');
                break;

            case 'Low':
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