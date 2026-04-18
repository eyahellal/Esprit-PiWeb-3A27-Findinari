<?php

namespace App\Repository;

use App\Entity\reclamation\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Message>
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    public function findMessagesAfterId(int $ticketId, int $lastId): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.ticket = :ticketId')
            ->andWhere('m.id > :lastId')
            ->setParameter('ticketId', $ticketId)
            ->setParameter('lastId', $lastId)
            ->orderBy('m.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}
