<?php

namespace App\Repository;

use App\Entity\VillesFranceFree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class VillesFranceFreeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VillesFranceFree::class);
    }

    public function findTenMostPoulated()
    {
        return $this->createQueryBuilder('vff')
            ->select('vff.villeNom')
            ->orderBy('vff.villePopulation2012', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

    }
}