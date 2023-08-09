<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\EditPasswordFormType;
use App\Form\EditEmailFormType;

class UserController extends AbstractController
{

    #[Route('/espace-utilisateur', name: 'user_space')]
    public function userSpace(): Response
    {
        $user = $this->getUser();

        return $this->render('user/space.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/user/edit/email", name="app_user_edit_email", methods={"POST"})
     */
    public function editEmail(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newEmail = $request->request->get('new_email');
        $user = $this->getUser();

        if ($newEmail) {
            // Valider l'email (vous pouvez utiliser des contraintes de validation Symfony)
            // Mettre à jour l'email de l'utilisateur
            $user->setEmail($newEmail);

            // Enregistrer les modifications dans la base de données
            $entityManager->flush();

            $this->addFlash('success', 'Email mis à jour avec succès.');
        } else {
            $this->addFlash('error', 'L\'email ne peut pas être vide.');
        }

        return $this->redirectToRoute('user_space');
    }

    /**
     * @Route("/user/edit/pseudo", name="app_user_edit_pseudo", methods={"POST"})
     */
    public function editPseudo(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newPseudo = $request->request->get('new_pseudo');
        $user = $this->getUser();

        if ($newPseudo) {
            // Mettre à jour le pseudo de l'utilisateur
            $user->setPseudo($newPseudo);

            // Enregistrer les modifications dans la base de données
            $entityManager->flush();

            $this->addFlash('success', 'Pseudo mis à jour avec succès.');
        } else {
            $this->addFlash('error', 'Le pseudo ne peut pas être vide.');
        }

        return $this->redirectToRoute('user_space');
    }
}
