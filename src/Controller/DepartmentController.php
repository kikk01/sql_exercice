<?php

namespace App\Controller;

use App\Repository\DepartementRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Profiler\Profiler;
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
}
