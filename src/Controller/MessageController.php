<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Ticket;
use App\Form\MessageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/user/message/new/{id}', name: 'app_user_message_new', methods: ['POST'])]
    public function userNewMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
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
            $message->setDate(new \DateTime());
            $message->setTypeSender('USER');
            $message->setUtilisateur($user);

            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully.');
        }

        return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticket->getId()]);
    }

    #[Route('/user/message/{id}/delete', name: 'app_user_message_delete', methods: ['POST'])]
    public function userDeleteMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $ticketId = $message->getTicket()->getId();

        if ($message->getUtilisateur() !== $user || $message->getTypeSender() !== 'USER') {
            $this->addFlash('danger', 'You can only delete your own messages.');
            return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticketId]);
        }

        if ($this->isCsrfTokenValid('delete_message_user_' . $message->getId(), $request->request->get('_token'))) {
            $entityManager->remove($message);
            $entityManager->flush();
            $this->addFlash('success', 'Message deleted successfully.');
        }

        return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticketId]);
    }

    #[Route('/user/message/{id}/edit', name: 'app_user_message_edit', methods: ['POST'])]
    public function userEditMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $ticketId = $message->getTicket()->getId();

        if ($message->getUtilisateur() !== $user || $message->getTypeSender() !== 'USER') {
            $this->addFlash('danger', 'You can only edit your own messages.');
            return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticketId]);
        }

        $newContenu = trim((string) $request->request->get('edit_contenu'));

        if ($newContenu !== '') {
            $message->setContenu($newContenu);
            $entityManager->flush();
            $this->addFlash('success', 'Message updated successfully.');
        }

        return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticketId]);
    }

    #[Route('/admin/message/new/{id}', name: 'app_admin_message_new', methods: ['POST'])]
    public function adminNewMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setTicket($ticket);
            $message->setDate(new \DateTime());
            $message->setTypeSender('ADMIN');
            $message->setUtilisateur($this->getUser());

            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully.');
        }

        return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticket->getId()]);
    }

    #[Route('/admin/message/{id}/delete', name: 'app_admin_message_delete', methods: ['POST'])]
    public function adminDeleteMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticketId = $message->getTicket()->getId();

        if ($message->getTypeSender() !== 'ADMIN') {
            $this->addFlash('danger', 'You can only delete your own messages.');
            return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticketId]);
        }

        if ($this->isCsrfTokenValid('delete_message_admin_' . $message->getId(), $request->request->get('_token'))) {
            $entityManager->remove($message);
            $entityManager->flush();
            $this->addFlash('success', 'Message deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticketId]);
    }

    #[Route('/admin/message/{id}/edit', name: 'app_admin_message_edit', methods: ['POST'])]
    public function adminEditMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticketId = $message->getTicket()->getId();

        if ($message->getTypeSender() !== 'ADMIN') {
            $this->addFlash('danger', 'You can only edit your own messages.');
            return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticketId]);
        }

        $newContenu = trim((string) $request->request->get('edit_contenu'));

        if ($newContenu !== '') {
            $message->setContenu($newContenu);
            $entityManager->flush();
            $this->addFlash('success', 'Message updated successfully.');
        } else {
            $this->addFlash('danger', 'Message cannot be empty.');
        }

        return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticketId]);
    }
}
