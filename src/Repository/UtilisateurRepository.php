<?php

namespace App\Repository;

use App\Entity\user\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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

    /**
     * 🔥 NEW METHOD FOR PAGINATION + SEARCH + SORT
     */
    public function getUsersQueryBuilder(?string $search, ?string $sort)
    {
        $qb = $this->createQueryBuilder('u');

        // 🔍 SEARCH
        if ($search) {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q')
               ->setParameter('q', '%' . $search . '%');
        }

        // 🔄 SORT
        switch ($sort) {
            case 'name_asc':
                $qb->orderBy('u.prenom', 'ASC')->addOrderBy('u.nom', 'ASC');
                break;

            case 'name_desc':
                $qb->orderBy('u.prenom', 'DESC')->addOrderBy('u.nom', 'DESC');
                break;

            case 'role_asc':
                $qb->orderBy('u.role', 'ASC');
                break;

            case 'role_desc':
                $qb->orderBy('u.role', 'DESC');
                break;

            case 'id_asc':
                $qb->orderBy('u.id', 'ASC');
                break;

            case 'id_desc':
            default:
                $qb->orderBy('u.id', 'DESC');
                break;
        }

        return $qb;
    }
}