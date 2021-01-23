<?php

namespace App\Controller;

use App\Repository\VillesFranceFreeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TownController
{
    private $villesFranceFreeRepository;

    public function __construct(VillesFranceFreeRepository $villesFranceFreeRepository)
    {
        $this->villesFranceFreeRepository = $villesFranceFreeRepository;
    }

    

    /**
     * @Route("/town/10-most-populated", name="town_10_most_populated")
     */
    public function tenMostPopulated(): Response
    {
        return new JsonResponse($this->villesFranceFreeRepository->findTenMostPoulated());
    }
}
