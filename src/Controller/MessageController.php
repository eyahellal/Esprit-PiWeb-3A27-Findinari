<?php

namespace App\Controller;

use App\Entity\reclamation\Message;
use App\Entity\reclamation\Ticket;
use App\Entity\user\Utilisateur;
use App\Form\MessageType;
use App\Service\CloudinaryUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\TicketRepository;
use App\Repository\MessageRepository;
use App\Service\GroqSuggestionService;

class MessageController extends AbstractController
{
    #[Route('/user/message/new/{id}', name: 'app_user_message_new', methods: ['POST'])]
    public function userNewMessage(
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
            $message->setDate(new \DateTime());
            $message->setTypeSender('USER');
            $message->setUtilisateur($user);

            $attachmentFile = $form->get('attachment')->getData();

            if ($attachmentFile) {
                $originalFilename = pathinfo($attachmentFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $extension = $attachmentFile->guessExtension() ?: 'bin';
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $extension;

                try {
                    $attachmentFile->move(
                        $this->getParameter('messages_directory'),
                        $newFilename
                    );
                    $message->setUrlPieceJointe($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Attachment upload failed.');
                    return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticket->getId()]);
                }
            }

            $entityManager->persist($message);
            $entityManager->flush();
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

    #[Route('/admin/ticket/{id}/message/new', name: 'app_admin_message_new', methods: ['POST'])]
    public function newMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_login');
        }

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setTicket($ticket);
            $message->setDate(new \DateTime());
            $message->setTypeSender('ADMIN');

            $user = $this->getUser();
            if ($user instanceof Utilisateur) {
                $message->setUtilisateur($user);
            }

            $attachmentFile = $form->get('attachment')->getData();

            if ($attachmentFile) {
                $originalFilename = pathinfo($attachmentFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $extension = $attachmentFile->guessExtension() ?: 'bin';
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $extension;

                try {
                    $attachmentFile->move(
                        $this->getParameter('messages_directory'),
                        $newFilename
                    );
                    $message->setUrlPieceJointe($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Attachment upload failed.');
                    return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticket->getId()]);
                }
            }

            $entityManager->persist($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticket->getId()]);
    }

    #[Route('/admin/message/{id}/delete', name: 'app_admin_message_delete', methods: ['POST'])]
    public function adminDeleteMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_login');
        }

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
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_login');
        }

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

    #[Route('/admin/ticket/{id}/voice', name: 'app_admin_message_voice', methods: ['POST'])]
    public function adminVoiceMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        CloudinaryUploader $uploader
    ): JsonResponse {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        try {
            $audioFile = $request->files->get('audio');

            if (!$audioFile) {
                return $this->json(['error' => 'No audio file found in request'], 400);
            }

            $cloudinaryUrl = $uploader->uploadAudio($audioFile->getRealPath());

            if (!$cloudinaryUrl) {
                return $this->json(['error' => 'Cloudinary upload failed'], 500);
            }

            $message = new Message();
            $message->setTicket($ticket);
            $message->setDate(new \DateTime());
            $message->setTypeSender('ADMIN');
            $message->setContenu('Voice message');
            $message->setUrlPieceJointe($cloudinaryUrl);

            $user = $this->getUser();
            if ($user instanceof Utilisateur) {
                $message->setUtilisateur($user);
            }

            $entityManager->persist($message);
            $entityManager->flush();

            return $this->json([
                'success' => true,
                'url' => $cloudinaryUrl,
                'messageId' => $message->getId(),
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'error' => 'Server error: ' . $e->getMessage(),
            ], 500);
        }
    }

    #[Route('/user/ticket/{id}/voice', name: 'app_user_message_voice', methods: ['POST'])]
    public function userVoiceMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        CloudinaryUploader $uploader
    ): JsonResponse {
        $user = $this->getUser();

        if (!$user || $ticket->getUtilisateur() !== $user) {
            return $this->json(['error' => 'Access denied'], 403);
        }

        try {
            $audioFile = $request->files->get('audio');

            if (!$audioFile) {
                return $this->json(['error' => 'No audio file found in request'], 400);
            }

            $cloudinaryUrl = $uploader->uploadAudio($audioFile->getRealPath());

            if (!$cloudinaryUrl) {
                return $this->json(['error' => 'Cloudinary upload failed'], 500);
            }

            $message = new Message();
            $message->setTicket($ticket);
            $message->setDate(new \DateTime());
            $message->setTypeSender('USER');
            $message->setContenu('Voice message');
            $message->setUrlPieceJointe($cloudinaryUrl);
            $message->setUtilisateur($user);

            $entityManager->persist($message);
            $entityManager->flush();

            return $this->json([
                'success' => true,
                'url' => $cloudinaryUrl,
                'messageId' => $message->getId(),
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'error' => 'Server error: ' . $e->getMessage(),
            ], 500);
        }
    }
    #[Route('/ticket/{id}/suggestions', name: 'app_ticket_message_suggestions', methods: ['GET'])]
    public function messageSuggestions(
        Ticket $ticket,
        GroqSuggestionService $groqSuggestionService
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        // Determine role based on Symfony security
        $role = $this->isGranted('ROLE_ADMIN') ? 'ADMIN' : 'USER';

        $messages = $ticket->getMessages()->toArray();

        // Sort by date to get chronological order
        usort($messages, static function ($a, $b) {
            return ($a->getDate() <=> $b->getDate());
        });

        // Get the last 5 messages for context
        $lastMessages = array_slice($messages, -5);

        try {
            $suggestions = $groqSuggestionService->suggestReplies($role, $lastMessages);
            return $this->json([
                'suggestions' => $suggestions,
                'detected_role' => $role
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'error' => 'Failed to fetch suggestions',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    #[Route('/message/reformulate', name: 'app_message_reformulate', methods: ['POST'])]
    public function messageReformulate(
        Request $request,
        \App\Service\GroqReformulationService $reformulationService
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $data = json_decode($request->getContent(), true);
        $content = $data['content'] ?? '';
        $mode = $data['mode'] ?? 'formalize';
        
        if (trim($content) === '') {
            return $this->json(['reformulated' => '']);
        }

        $role = $this->isGranted('ROLE_ADMIN') ? 'ADMIN' : 'USER';
        $reformulated = $reformulationService->transformMessage($role, $content, $mode);

        return $this->json([
            'transformed' => $reformulated,
        ]);
    }

    #[Route('/ticket/{id}/summary', name: 'app_ticket_summary', methods: ['GET'])]
    public function ticketSummary(
        Ticket $ticket,
        \App\Service\GroqSummaryService $summaryService
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $messages = $ticket->getMessages()->toArray();
        // Sort by date
        usort($messages, static fn($a, $b) => $a->getDate() <=> $b->getDate());

        $summary = $summaryService->summarizeTicket($messages, $ticket->getStatut() ?? 'OUVERT');

        return $this->json($summary);
    }

    #[Route('/ticket/{id}/fetch-new/{lastId}', name: 'app_ticket_fetch_new_messages', methods: ['GET'])]
    public function fetchNewMessages(
        Ticket $ticket,
        int $lastId,
        MessageRepository $messageRepository,
        Request $request
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        // Safety check
        $isAdmin = $this->isGranted('ROLE_ADMIN');
        if (!$isAdmin && $ticket->getUtilisateur() !== $user) {
            return $this->json(['error' => 'Access denied'], 403);
        }

        $newMessages = $messageRepository->findMessagesAfterId($ticket->getId(), $lastId);

        $html = '';
        foreach ($newMessages as $message) {
            $template = $isAdmin ? 'reclamation/_message_item_admin.html.twig' : 'reclamation/_message_item_user.html.twig';
            $html .= $this->renderView($template, [
                'message' => $message,
                'ticket' => $ticket
            ]);
        }

        return $this->json([
            'html' => $html,
            'count' => count($newMessages),
            'lastId' => count($newMessages) > 0 ? (int)end($newMessages)->getId() : (int)$lastId
        ]);
    }

    #[Route('/message/{id}/translate', name: 'app_message_translate', methods: ['POST'])]
    public function translateMessage(Message $message): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $ticket = $message->getTicket();
        if (!$this->isGranted('ROLE_ADMIN') && $ticket->getUtilisateur() !== $user) {
            return $this->json(['error' => 'Access denied'], 403);
        }

        $textToTranslate = $message->getContenu();
        if (!$textToTranslate || trim($textToTranslate) === '') {
            return $this->json(['translated' => '']);
        }

        try {
            $encoded = urlencode($textToTranslate);
            $url = 'https://api.mymemory.translated.net/get?q=' . $encoded . '&langpair=en|fr';

            $context = stream_context_create([
                'http' => [
                    'method'        => 'GET',
                    'header'        => "Accept: application/json\r\nUser-Agent: Mozilla/5.0\r\n",
                    'timeout'       => 10,
                    'ignore_errors' => true,
                ]
            ]);

            $result = @file_get_contents($url, false, $context);

            if ($result) {
                $json = json_decode($result, true);
                if (isset($json['responseData']['translatedText'])) {
                    return $this->json(['translated' => $json['responseData']['translatedText']]);
                }
            }

            return $this->json(['error' => 'Translation service unavailable. Please try again.'], 502);
        } catch (\Throwable $e) {
            return $this->json(['error' => 'Translation failed: ' . $e->getMessage()], 500);
        }
    }
}