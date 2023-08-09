<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'index')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();
        $pseudo = $user ? $user->getPseudo() : null;

        return $this->render('home/index.html.twig', [
            'pseudo' => $pseudo,
        ]);
    }
}