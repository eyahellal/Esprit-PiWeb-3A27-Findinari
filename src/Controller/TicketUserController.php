<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Form\TicketType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class TicketUserController extends AbstractController
{
    #[Route('/user/createticket', name: 'app_user_createticket')]
    public function createTicket(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $imageFile = $form->get('imageUrl')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('tickets_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $ticket->setImageUrl($newFilename);
            }

            // Set other fields
            $ticket->setUtilisateur($this->getUser());
            $ticket->setDateCreation(new \DateTime());
            $ticket->setStatut('Open');

            $entityManager->persist($ticket);
            $entityManager->flush();

            $this->addFlash('success', 'Your ticket has been submitted successfully!');

            return $this->redirectToRoute('support_center');
        }

        return $this->render('reclamation/create_ticket.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
