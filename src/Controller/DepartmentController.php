<?php

namespace App\Controller;

use App\Repository\DepartementRepository;
use App\Repository\VillesFranceFreeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepartmentController
{
    private DepartementRepository $departementRepository;

    public function __construct(DepartementRepository $departementRepository)
    {
        $this->departementRepository = $departementRepository;
    }

    /**
     * @Route("/departement/d-outre-mer/liste", name="department_overseas_list")
     */
    public function overseasList(): Response
    {
        return new JsonResponse($this->departementRepository->findOverseas());
    }

    /**
     * @Route("/departement/liste/avec-nombre-de-villes", name="department_list_with_town_count")
     */
    public function listWithTownCount(): Response
    {
        return new JsonResponse($this->departementRepository->getDepartmentNameAndCodeWithTownCount());
    }

    /**
     * @Route("/departement/liste/par-superficie", name="department_by_superficie")
     */
    public function listByArea()
    {
        return new JsonResponse($this->departementRepository->findTenBiggestAreaDepartments());
    }

    /**
    * @Route("/departement/population-superieur-a-2000000", name="department_population_over_than_two_millions")
    */
   public function populationOverThanTwoMillion(VillesFranceFreeRepository $villesFranceFreeRepository)
   {
        return new JsonResponse($villesFranceFreeRepository->findTotalPopulationOverTwoMillionbyDepartement());
   }
}
