<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; // Assurez-vous que cette classe est correctement importée
use App\Entity\Equipevlrt;

class EquipeController extends AbstractController
{
    private $entityManager; // Injection de dépendance de l'EntityManager

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/equipes", name="liste_equipes")
     */
    public function listeEquipes(): Response
    {
        // Récupérer la liste des équipes depuis la base de données
        $equipes = $this->entityManager
            ->getRepository(Equipevlrt::class)
            ->findAll();

        // Rendre la vue de la liste des équipes
        return $this->render('equipe/liste.html.twig', [
            'equipes' => $equipes,
        ]);
    }

    /**
     * @Route("/equipe/{id}", name="afficher_equipe")
     */
    public function afficherEquipe($id): Response
    {
        // Récupérer l'équipe par son ID depuis la base de données
        $equipe = $this->entityManager
            ->getRepository(Equipevlrt::class)
            ->find($id);

        // Vérifier si l'équipe existe
        if (!$equipe) {
            throw $this->createNotFoundException('L\'équipe n\'existe pas.');
        }

        // Rendre la vue de détails de l'équipe
        return $this->render('equipe/afficher.html.twig', [
            'equipe' => $equipe,
        ]);
    }
}
