<?php
namespace App\Service\Ticket;
use App\Entity\reclamation\Ticket;
class TicketManager
{
    private const ALLOWED_PRIORITIES = ['High', 'Medium', 'Low'];
    private const ALLOWED_STATUSES = ['Open', 'In Progress', 'Closed'];
    private const MIN_TITLE_LENGTH = 3;
    private const MIN_DESCRIPTION_LENGTH = 10;

    public function validate(Ticket $ticket): bool
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

        $priority = (string) $ticket->getPriorite();
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

        return true;
    }
}
