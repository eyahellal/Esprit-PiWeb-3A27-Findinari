<?php
// src/Repository/NotificationRepository.php
namespace App\Repository;

use App\Entity\Notification;
use App\Entity\user\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Notification>
 */
class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    public function findForUser(Utilisateur $user, int $limit = 50): array
    {
        return $this->createQueryBuilder('n')
            ->where('n.user = :user')
            ->setParameter('user', $user)
            ->orderBy('n.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countUnreadForUser(Utilisateur $user): int
    {
        return $this->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->where('n.user = :user')
            ->andWhere('n.isRead = false')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function markAllAsReadForUser(Utilisateur $user): void
    {
        $this->createQueryBuilder('n')
            ->update()
            ->set('n.isRead', ':read')
            ->where('n.user = :user')
            ->andWhere('n.isRead = false')
            ->setParameter('read', true)
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }

    public function deleteOldNotifications(int $days = 30): int
    {
        $date = new \DateTimeImmutable('-' . $days . ' days');
        
        return $this->createQueryBuilder('n')
            ->delete()
            ->where('n.createdAt < :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->execute();
    }
}