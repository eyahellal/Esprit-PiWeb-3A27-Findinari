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

use App\Repository\TicketRepository;
use App\Entity\Message;
use App\Form\MessageType;

class TicketUserController extends AbstractController
{
    #[Route('/user/tickets', name: 'app_user_tickets')]
    public function myTickets(TicketRepository $ticketRepository): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login'); // Security measure to ensure the user is logged in
        }

        $tickets = $ticketRepository->findBy(
            ['utilisateur' => $user],
            ['dateCreation' => 'DESC']
        );

        return $this->render('reclamation/my_tickets.html.twig', [
            'tickets' => $tickets,
        ]);
    }
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

    #[Route('/user/ticket/{id}', name: 'app_user_ticket_details', methods: ['GET', 'POST'])]
    public function ticketDetails(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Security check: ensure the ticket belongs to the connected user
        if ($ticket->getUtilisateur() !== $user) {
            throw $this->createAccessDeniedException('You do not have access to this ticket.');
        }

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setTicket($ticket);
            $message->setDate(new \DateTime());
            $message->setTypeSender('USER');
            $message->setUtilisateur($user);

            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully.');
            return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticket->getId()]);
        }

        // Legacy raw POST logic
        if ($request->isMethod('POST') && $request->request->has('add_message')) {
            $contenu = trim((string) $request->request->get('contenu'));
            
            if ($contenu !== '') {
                $legacyMessage = new Message();
                $legacyMessage->setTicket($ticket);
                $legacyMessage->setContenu($contenu);
                $legacyMessage->setDate(new \DateTime());
                $legacyMessage->setTypeSender('USER');
                $legacyMessage->setUtilisateur($user);

                $entityManager->persist($legacyMessage);
                $entityManager->flush();

                $this->addFlash('success', 'Message sent successfully.');
                return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticket->getId()]);
            }
        }

        $messages = $ticket->getMessages();

        return $this->render('reclamation/my_ticket_details.html.twig', [
            'ticket' => $ticket,
            'messages' => $messages,
            'form' => $form->createView(),
        ]);
    }
}
