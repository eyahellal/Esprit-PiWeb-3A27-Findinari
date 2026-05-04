<?php
// src/Repository/FriendLoanRequestRepository.php
namespace App\Repository;

use App\Entity\Loan\FriendLoanRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FriendLoanRequest>
 */
class FriendLoanRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FriendLoanRequest::class);
    }

    /**
     * Trouver les demandes en attente pour un utilisateur (reçu)
     */
    public function findPendingRequestsForUser(int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.receiver = :userId')
            ->andWhere('r.status = :status')
            ->setParameter('userId', $userId)
            ->setParameter('status', 'pending')
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Vérifier si une demande est déjà en attente entre deux utilisateurs
     */
    public function findPendingRequestBetween(int $senderId, int $receiverId): ?FriendLoanRequest
    {
        return $this->createQueryBuilder('r')
            ->where('r.sender = :senderId')
            ->andWhere('r.receiver = :receiverId')
            ->andWhere('r.status = :status')
            ->setParameter('senderId', $senderId)
            ->setParameter('receiverId', $receiverId)
            ->setParameter('status', 'pending')
            ->getQuery()
            ->getOneOrNullResult();
    }
}