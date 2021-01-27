<?php

namespace App\Repository;

use App\Entity\Departement;
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

    public function findFiftyLessArea()
    {
        return $this->createQueryBuilder('vff')
            ->select('vff.villeNom')
            ->orderBy('vff.villeSurface', 'ASC')
            ->setMaxResults(50)
            ->getQuery()
            ->getResult();
    }

    public function findTenMostPoulatedWithDepartments()
    {
        return $this->createQueryBuilder('vff')
            ->select(['vff.villeNom', 'd.departementNom'])
            ->leftJoin(Departement::class, 'd', 'WITH', 'd.departementCode = vff.villeDepartement')
            ->orderBy('vff.villePopulation2012', 'desc')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    public function findNameBeginBySaint()
    {
        return $this->createQueryBuilder('vff')
            ->select('count(vff.villeId)')
            ->where('vff.villeNom like \'SAINT%\'')
            ->getQuery()
            ->getScalarResult();
    }
}