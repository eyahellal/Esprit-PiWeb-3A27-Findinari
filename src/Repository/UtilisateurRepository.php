<?php

namespace App\Repository;

use App\Entity\user\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
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

    /**
     * Finds a user by their email address
     *
     * @param string $gmail The email address to search for
     * @return Utilisateur|null
     */
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
     * Get users query builder for pagination, search and sort
     *
     * @param string|null $search Search term for nom or prenom
     * @param string|null $sort Sort order (name_asc, name_desc, role_asc, role_desc, id_asc, id_desc)
     * @return QueryBuilder
     */
    public function getUsersQueryBuilder(?string $search, ?string $sort): QueryBuilder
    {
        $qb = $this->createQueryBuilder('u');

        // 🔍 SEARCH
        if ($search !== null && $search !== '') {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q')
               ->setParameter('q', '%' . $search . '%');
        }

        // 🔄 SORT
        if ($sort !== null) {
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
        } else {
            $qb->orderBy('u.id', 'DESC');
        }

        return $qb;
    }
}