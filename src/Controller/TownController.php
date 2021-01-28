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
     * @Route("/ville/10-most-populated", name="town_10_most_populated")
     */
    public function tenMostPopulated(): Response
    {
        return new JsonResponse($this->villesFranceFreeRepository->findTenMostPoulated());
    }

    /**
     * @Route("/ville/50-less-area", name="town_50_less_area")
     */
    public function fiftyLessArea(): Response
    {
        return new JsonResponse($this->villesFranceFreeRepository->findFiftyLessArea());
    }

    /**
     * @Route("/ville/10-most-populated-with-departement", name="town_ten_most_populated_with_departement")
     */
    public function tenMostPopulatedWithDepartment()
    {   
        return new JsonResponse($this->villesFranceFreeRepository->findTenMostPoulatedWithDepartments());
    }

    /**
     * @Route("/ville/nom-qui-commence-par-saint/nombre", name="town_name_begin_by_saint_count")
     */
    public function nameBeginBySaintCount()
    {
        return new JsonResponse($this->villesFranceFreeRepository->findNameBeginBySaint());
    }

    /**
     * @Route("/ville/du-meme-nom", name="town_non_unique_name_and_count")
     */
    public function nonUniqueNameAndCount()
    {
        //return new Response('<html><body>Lucky number: </body></html>');
        return new JsonResponse($this->villesFranceFreeRepository->findNonUniqueNameAndCount());
    }    
    
    /**
    * @Route("/ville/surface-superieur-a-la-moyenne", name="town_area_greater_than_average")
    */
   public function areaGeraterThanAverage()
   {
        return new JsonResponse($this->villesFranceFreeRepository->findAreaGreaterThanAverage());
   }
}
