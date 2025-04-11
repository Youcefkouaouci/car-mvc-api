<?php
namespace App\Controller;

use App\Repository\CarRepository;
use App\Routing\Attribute\Route;

class IndexController extends AbstractController 
{
    #[Route('/', name:'app_home')]
    public function home(CarRepository $carRepository):string
    {
            $cars = $carRepository->findAll();
            return $this->twig->render('base.html.twig', ['cars' => $cars]);
    }

}