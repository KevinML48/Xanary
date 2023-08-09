<?php

namespace App\Controller;

use App\Entity\ReceptionContact;
use App\Form\ReceptionContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request, EntityManagerInterface $entityManager): Response
    {
        $receptionContact = new ReceptionContact();
        $form = $this->createForm(ReceptionContactType::class, $receptionContact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($receptionContact);
            $entityManager->flush();

            $this->addFlash('success', 'Contact sent successfully.');

            return $this->redirectToRoute('contact_confirmation');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/contact-confirmation', name: 'contact_confirmation')]
    public function contactConfirmation(): Response
    {
        return $this->render('contact/confirmation.html.twig');
    }

}
