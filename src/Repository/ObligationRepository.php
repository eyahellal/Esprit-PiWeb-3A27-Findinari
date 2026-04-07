<?php

namespace App\Repository;

use App\Entity\Loan\Obligation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Obligation>
 */
class ObligationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Obligation::class);
    }

    // Add custom methods here if needed
}