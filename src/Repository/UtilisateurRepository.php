<?php

namespace App\Repository;

use App\Entity\user\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Utilisateur>
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    public function findOneByGmail(string $gmail): ?Utilisateur
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.gmail = :gmail')
            ->setParameter('gmail', $gmail)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}