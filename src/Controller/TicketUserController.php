<?php

namespace App\Controller;

use App\Entity\reclamation\Message;
use App\Entity\reclamation\Ticket;
use App\Form\MessageType;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use App\Service\Ticket\TicketManager;
use App\Service\TicketPriorityClassifierService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class TicketUserController extends AbstractController
{
    public function __construct(
        private TicketManager $ticketManager
    ) {
    }

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
            'is_error' => $result['is_error'] ?? false,
        ]);
    }

    #[Route('/user/tickets', name: 'app_user_tickets')]
    public function myTickets(
        TicketRepository $ticketRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $qb = $ticketRepository->createQueryBuilder('t')
            ->where('t.utilisateur = :user')
            ->setParameter('user', $user)
            ->orderBy('t.dateCreation', 'DESC');

        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('reclamation/my_tickets.html.twig', [
            'tickets' => $pagination,
        ]);
    }

    #[Route('/user/createticket', name: 'app_user_createticket')]
    public function createTicket(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageUrl')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('tickets_directory'),
                        $newFilename
                    );
                    $ticket->setImageUrl($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Image upload failed.');
                }
            }


$user = $this->getUser();

if (!$user instanceof \App\Entity\user\Utilisateur) {
    throw $this->createAccessDeniedException('Utilisateur non valide.');
}

$ticket->setUtilisateur($user); // PHPStan est maintenant d'accord !
            try {
                $this->ticketManager->initializeNewTicket($ticket);
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('danger', $e->getMessage());

                return $this->render('reclamation/create_ticket.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

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

        $form = $this->createForm(TicketType::class, $ticket);
        $form->remove('priorite');

        if ($form->has('statut')) {
            $form->remove('statut');
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageUrl')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('tickets_directory'),
                        $newFilename
                    );
                    $ticket->setImageUrl($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Image upload failed.');
                }
            }

            try {
                $this->ticketManager->validateForUpdate($ticket);
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('danger', $e->getMessage());

                return $this->redirectToRoute('app_user_ticket_edit', [
                    'id' => $ticket->getId(),
                ]);
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