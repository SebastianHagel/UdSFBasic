<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/car')]
final class CarController extends AbstractController
{
    #[Route('/list', name: 'app_car_list')]
    public function list(): Response
    {
        return $this->render('car/list.html.twig', [
            'controller_name' => 'CarController',
        ]);
    }

    #[Route('/add', name: 'app_car_add')]
    public function add(): Response
    {
        return $this->render('car/add.html.twig', [
            'controller_name' => 'CarController',
        ]);
    }
}
