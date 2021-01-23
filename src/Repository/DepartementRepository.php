<?php

namespace App\Repository;

use App\Entity\Departement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DepartementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Departement::class);
    }

    public function findOverseas()
    {
        return $this->createQueryBuilder('d')
            ->select('d.departementNom')
            ->where('d.departementCode LIKE \'97%\'')
            ->getQuery()
            ->getResult();
    }
}