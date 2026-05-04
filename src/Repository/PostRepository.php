<?php

namespace App\Repository;

use App\Entity\community\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Post>
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    public function createCommunityFeedQuery(?string $term = null, string $filter = 'all'): QueryBuilder
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.utilisateur', 'u')->addSelect('u')
            ->orderBy('p.dateCreation', 'DESC')
            ->addOrderBy('p.idPost', 'DESC');

        $term = trim((string) $term);
        if ($term !== '') {
            $normalized = mb_strtolower(ltrim($term, '#'));
            $qb->andWhere('LOWER(p.contenu) LIKE :term OR LOWER(p.titre) LIKE :term OR LOWER(u.nom) LIKE :term OR LOWER(u.prenom) LIKE :term OR LOWER(u.gmail) LIKE :term')
                ->setParameter('term', '%' . $normalized . '%');
        }

        if ($filter === 'comment') {
            $qb->andWhere('p.nombreCommentaires > 0');
        } elseif ($filter === 'media') {
            $qb->andWhere('LOWER(p.contenu) LIKE :mediaA OR LOWER(p.contenu) LIKE :mediaB OR LOWER(p.contenu) LIKE :mediaC OR LOWER(p.contenu) LIKE :mediaD')
                ->setParameter('mediaA', '%http%')
                ->setParameter('mediaB', '%[gif:%')
                ->setParameter('mediaC', '%[img:%')
                ->setParameter('mediaD', '%<img%');
        }

        return $qb;
    }

    public function searchCommunityFeed(?string $term): array
    {
        return $this->createCommunityFeedQuery($term)->getQuery()->getResult();
    }
}
