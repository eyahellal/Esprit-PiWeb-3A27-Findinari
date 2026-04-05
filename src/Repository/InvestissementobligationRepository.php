<?php

namespace App\Repository;

use App\Entity\Loan\Investissementobligation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Investissementobligation>
 */
class InvestissementobligationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Investissementobligation::class);
    }
}