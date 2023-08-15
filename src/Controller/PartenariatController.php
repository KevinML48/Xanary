<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PartenaireRepository;

class PartenariatController extends AbstractController
{
    #[Route('/partenaires', name: 'partenaires')]
    public function index(PartenaireRepository $partenaireRepository): Response
    {
        $partenaires = $partenaireRepository->findAll(); // Récupère tous les partenaires depuis le repository

        return $this->render('partenariat/index.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }
}