<?php

namespace App\Repository;

use App\Entity\management\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }
    public function findByFilters(string $search = '', string $statut = ''): array
{
    $qb = $this->createQueryBuilder('c');

    if ($search) {
        $qb->andWhere('c.nom LIKE :search OR c.description LIKE :search')
           ->setParameter('search', '%' . $search . '%');
    }

    if ($statut) {
        $qb->andWhere('c.statut = :statut')
           ->setParameter('statut', $statut);
    }

    return $qb->orderBy('c.nom', 'ASC')
              ->getQuery()
              ->getResult();
}

    //    /**
    //     * @return Categorie[] Returns an array of Categorie objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Categorie
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
