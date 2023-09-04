<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ActualitésRepository; // Importez le repository Actualités
use App\Entity\Actualités;

class EvenementielController extends AbstractController
{
    #[Route('/evenementiel', name: 'app_evenementiel')]
    public function index(ActualitésRepository $actualitésRepository): Response
    {
        // Récupérez toutes les actualités depuis la base de données
        $actualités = $actualitésRepository->findAll();

        return $this->render('evenementiel/index.html.twig', [
            'controller_name' => 'EvenementielController',
            'actualités' => $actualités, // Passez les actualités au template
        ]);
    }

    #[Route('/page_informations_ascension', name: 'page_informations_ascension')]
    public function pageInformationsAscension(): Response
    {
        return $this->render('evenementiel/page_informations_ascension.html.twig');
    }

    #[Route('/page_informations_anima', name: 'page_informations_anima')]
    public function pageInformationsAnima(): Response
    {
        return $this->render('evenementiel/page_informations_anima.html.twig');
    }
}