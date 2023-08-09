<?php

namespace App\Controller;

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

    #[Route('/edit-email', name: 'edit_email')]
    public function editEmail(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditEmailFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the changes to the database
            $entityManager = $this->entityManager;
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Email updated successfully.');

            return $this->redirectToRoute('user_space');
        }

        return $this->render('user/edit_email.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/edit-password', name: 'edit_password')]
    public function editPassword(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditPasswordFormType::class, null, ['user' => $user]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newEncodedPassword = $passwordEncoder->encodePassword($user, $form->get('plainPassword')->getData());
            $user->setPassword($newEncodedPassword);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Password updated successfully.');

            return $this->redirectToRoute('user_space');
        }

        return $this->render('user/edit_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
