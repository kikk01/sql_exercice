<?php

namespace App\Repository;

use App\Entity\Departement;
use App\Entity\VillesFranceFree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Stmt;

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

    public function findNonUniqueNameAndCount()
    {
        return $this->createQueryBuilder('vff')
            ->select(['vff.villeNom', 'count(vff) as count'])
            ->groupBy('vff.villeNom')
            ->having('count(vff) > 1')
            ->orderBy('count', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findAreaGreaterThanAverage()
    {
        $conn = $this->getEntityManager()->getConnection();
        $stmt = $conn->prepare('
            SELECT vff.ville_nom, vff.ville_surface 
            FROM villes_france_free vff 
            WHERE ville_surface > (SELECT AVG(ville_surface) from villes_france_free)
            ORDER BY ville_surface
        ');

        $stmt->execute();
        return $stmt->fetchAllNumeric(); 
    }

    public function findTotalPopulationOverTwoMillionbyDepartement()
    {
        return $this->createQueryBuilder('vff')
            ->select(['vff.villeDepartement', 'SUM(vff.villePopulation2012) AS population2012'])
            ->groupBy('vff.villeDepartement')
            ->having('population2012 > :populationMax')
            ->setParameter(':populationMax', 2000000)
            ->getQuery()
            ->getResult();
    }
}