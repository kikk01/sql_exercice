<?php

namespace App\Repository;

use App\Entity\Departement;
use App\Entity\VillesFranceFree;
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

    public function getDepartmentNameAndCodeWithTownCount()
    {
        return $this->createQueryBuilder('d')
            ->select(['d.departementNom', 'd.departementCode', 'count(vff)'])
            ->join(VillesFranceFree::class, 'vff', 'WHERE', 'vff.villeDepartement = d.departementCode')
            ->groupBy('d.departementNom', 'd.departementCode')
            ->getQuery()
            ->getResult();
    }
}