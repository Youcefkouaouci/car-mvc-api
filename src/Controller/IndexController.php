<?php
namespace App\Controller;

use App\Repository\CarRepository;
use App\Routing\Attribute\Route;

class IndexController extends AbstractController 
{
    #[Route('/', name:'app_home')]
    public function home(CarRepository $car):string
    {
        return $this->$car->findAll('Car');
        // return 'Home page loaded with ' . count($cars) . ' cars.';
    }

}