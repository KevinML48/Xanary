<?php

namespace App\Controller;

use App\Entity\Ascension;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/ascension', name: 'app_ascension')]
    public function index(): Response
    {
        $ascensionRepository = $this->entityManager->getRepository(Ascension::class);
        $ascensions = $ascensionRepository->findAll();

        return $this->render('equipe/ascension.html.twig', [
            'ascensions' => $ascensions,
            'controller_name' => 'EquipeController',
        ]);
    }

    #[Route('/anima', name: 'app_anima')]
    public function anima(): Response
    {
        return $this->render('equipe/anima.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    // Je n'est que a re faire une nouvelle route a chaque nouvelle equipe, de chaque jeux, les entity seront relier avec le user est la config seras mis dans la function et laffichage des data dans les twig
}
