<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TournoiController extends AbstractController
{
    #[Route('/tournoi', name: 'app_tournoi')]
    public function index(): Response
    {
        return $this->render('tournoi/index.html.twig', [
            'controller_name' => 'TournoiController',
        ]);
    }
}
