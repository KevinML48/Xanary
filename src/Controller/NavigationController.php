<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class NavigationController extends AbstractController
{
    #[Route('/bienvenue', name: 'bienvenue')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();
        $pseudo = $user ? $user->getPseudo() : null;

        return $this->render('navigation/index.html.twig', [
            'pseudo' => $pseudo,
        ]);
    }
}