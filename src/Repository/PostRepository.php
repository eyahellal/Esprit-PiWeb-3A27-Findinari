<?php

namespace App\Repository;

use App\Entity\community\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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

    public function searchCommunityFeed(?string $term): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.utilisateur', 'u')->addSelect('u')
            ->leftJoin('p.commentaires', 'c')->addSelect('c')
            ->leftJoin('c.utilisateur', 'cu')->addSelect('cu')
            ->leftJoin('p.likes', 'l')->addSelect('l')
            ->orderBy('p.dateCreation', 'DESC');

        $term = trim((string) $term);
        if ($term !== '') {
            $qb->andWhere('LOWER(p.contenu) LIKE :term OR LOWER(u.nom) LIKE :term OR LOWER(u.prenom) LIKE :term OR LOWER(CONCAT(u.nom, u.prenom)) LIKE :term OR LOWER(CONCAT(u.prenom, u.nom)) LIKE :term')
                ->setParameter('term', '%'.mb_strtolower($term).'%');
        }

        return $qb->getQuery()->getResult();
    }
}
