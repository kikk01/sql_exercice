<?php

namespace App\Controller;

use App\Repository\VillesFranceFreeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TownController
{
    /**
     * @Route("/town/10-most-populated", name="town_10_most_populated")
     */
    public function tenMostPopulated(VillesFranceFreeRepository $villesFranceFreeRepository): Response
    {
        $tenMostPopulatedTownInFrance = $villesFranceFreeRepository->findTenMostPoulated();

        return new JsonResponse($tenMostPopulatedTownInFrance);
    }
}
