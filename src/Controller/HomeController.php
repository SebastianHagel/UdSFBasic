<?php

declare(strict_types=1);

namespace App\Controller;
use App\Model\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

  #[Route(path: '/', name: 'app_home_index')]
  public function index(): Response
  {
    return $this->render('home/index.html.twig');
  }

}