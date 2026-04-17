<?php

namespace App\Controller;

use App\Entity\reclamation\Ticket;
use App\Entity\reclamation\Message;
use App\Form\TicketType;
use App\Form\MessageType;
use App\Service\TicketSlaCalculator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

use App\Repository\TicketRepository;
use App\Service\TicketPriorityClassifierService;
use Symfony\Component\HttpFoundation\JsonResponse;

class TicketUserController extends AbstractController
{
    #[Route('/user/ticket/classify-priority', name: 'app_user_ticket_classify_priority', methods: ['POST'])]
    public function classifyPriorityAction(Request $request, TicketPriorityClassifierService $classifier): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $title = $data['title'] ?? '';
        $description = $data['description'] ?? '';

        $result = $classifier->classifyPriority($title, $description);
        $projectPriority = $classifier->mapToProjectPriority($result['priority']);

        return new JsonResponse([
            'priority' => $projectPriority,
            'code' => $result['priority'],
            'source' => $result['source'],
            'raw' => $result['raw'],
            'is_error' => $result['is_error'] ?? false
        ]);
    }

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
public function createTicket(
    Request $request,
    EntityManagerInterface $entityManager,
    SluggerInterface $slugger,
    TicketSlaCalculator $ticketSlaCalculator
): Response    {
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
         $createdAt = new \DateTime();

            $ticket->setUtilisateur($this->getUser());
            $ticket->setDateCreation($createdAt);
            $ticket->setStatut('Open');

            $deadline = $ticketSlaCalculator->calculateDeadline(
                (string) $ticket->getPriorite(),
                $createdAt
            );

            $ticket->setDeadline($deadline);

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
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if ($ticket->getUtilisateur() !== $user) {
            throw $this->createAccessDeniedException('You do not have access to this ticket.');
        }

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setTicket($ticket);
            $message->setUtilisateur($user);
            $message->setDate(new \DateTime());
            $message->setTypeSender('User');

            $attachmentFile = $form->get('attachment')->getData();

            if ($attachmentFile) {
                $originalFilename = pathinfo($attachmentFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $attachmentFile->guessExtension();

                try {
                    $attachmentFile->move(
                        $this->getParameter('messages_directory'),
                        $newFilename
                    );

                    $message->setUrlPieceJointe($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Attachment upload failed.');
                    return $this->redirectToRoute('app_user_ticket_details', [
                        'id' => $ticket->getId(),
                    ]);
                }
            }

            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully.');

            return $this->redirectToRoute('app_user_ticket_details', [
                'id' => $ticket->getId(),
            ]);
        }

        return $this->render('reclamation/my_ticket_details.html.twig', [
            'ticket' => $ticket,
            'messages' => $ticket->getMessages(),
            'form' => $form->createView(),
        ]);
    }


    #[Route('/user/ticket/{id}/delete', name: 'app_user_ticket_delete', methods: ['POST'])]
    public function deleteTicket(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        if (!$user || $ticket->getUtilisateur() !== $user) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete_ticket_' . $ticket->getId(), $request->request->get('_token'))) {
            // Delete associated messages first (cascading normally handles this but let's be sure or just remove ticket)
            $entityManager->remove($ticket);
            $entityManager->flush();
            $this->addFlash('success', 'Ticket deleted successfully.');
        }

        return $this->redirectToRoute('app_user_tickets');
    }

    #[Route('/user/ticket/{id}/edit', name: 'app_user_ticket_edit', methods: ['GET', 'POST'])]
    public function editTicket(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();
        if (!$user || $ticket->getUtilisateur() !== $user) {
            throw $this->createAccessDeniedException();
        }

        // Check if ticket can still be edited (not closed?)
        if ($ticket->getStatut() === 'Fermé') {
            $this->addFlash('danger', 'Closed tickets cannot be edited.');
            return $this->redirectToRoute('app_user_tickets');
        }

        $form = $this->createForm(TicketType::class, $ticket);
        
        // Remove priority and status fields from the user edit form as requested
        $form->remove('priorite');
        // (Status isn't in TicketType but just in case)
        if ($form->has('statut')) $form->remove('statut');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
                    $ticket->setImageUrl($newFilename);
                } catch (FileException $e) {
                    // handle exception
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Ticket updated successfully.');
            return $this->redirectToRoute('app_user_tickets');
        }

        return $this->render('reclamation/edit_ticket.html.twig', [
            'form' => $form->createView(),
            'ticket' => $ticket,
        ]);
    }
}
