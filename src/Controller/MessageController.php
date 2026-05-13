<?php




namespace App\Controller;




use App\Entity\reclamation\Message;
use App\Entity\reclamation\Ticket;
use App\Entity\user\Utilisateur;
use App\Form\MessageType;
use App\Service\CloudinaryUploader;
use App\Service\GroqReformulationService;
use App\Service\GroqSummaryService;
use App\Service\GroqSuggestionService;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;




class MessageController extends AbstractController
{
    #[Route('/user/message/new/{id}', name: 'app_user_message_new', methods: ['POST'])]
    public function userNewMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger,
        \App\Service\CloudinaryUploader $cloudinaryUploader,
        \App\Service\WebSocketService $webSocketService
    ): Response {
        /** @var Utilisateur|null $user */
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
            $message->setTypeSender(Message::SENDER_USER);
            $message->setUtilisateur($user);




            /** @var UploadedFile|null $attachmentFile */
            $attachmentFile = $form->get('attachment')->getData();




            if ($attachmentFile instanceof UploadedFile) {
                try {
                    $this->addFlash('info', 'Uploading attachment to Cloudinary...');
                    $cloudinaryUrl = $cloudinaryUploader->upload(
                        $attachmentFile->getRealPath(),
                        'findinari/messages'
                    );
                    if ($cloudinaryUrl) {
                        $message->setUrlPieceJointe($cloudinaryUrl);
                        $this->addFlash('info', 'Attachment success: ' . $cloudinaryUrl);
                    }
                } catch (\Exception $e) {
                    $this->addFlash('danger', 'Cloudinary Error: ' . $e->getMessage());
                    return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticket->getId()]);
                }
            }




            $entityManager->persist($message);
            $entityManager->flush();


            // NOTIFY JAVA SERVER
            $webSocketService->sendMessage(
                $ticket->getId(),
                $message->getContenu() ?? '',
                $message->getUrlPieceJointe(),
                Message::SENDER_USER,
                $this->getUser() ? $this->getUser()->getId() : 0,
                $message->getId()
            );
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




        $ticket = $message->getTicket();
        $ticketId = $ticket ? $ticket->getId() : null;




        if ($message->getUtilisateur() !== $user || $message->getTypeSender() !== Message::SENDER_USER) {
            $this->addFlash('danger', 'You can only delete your own messages.');
            return $this->redirectToRoute('app_user_ticket_details', ['id' => $ticketId]);
        }




        $token = (string)$request->request->get('_token');
        if ($this->isCsrfTokenValid('delete_message_user_' . $message->getId(), $token)) {
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




        $ticket = $message->getTicket();
        $ticketId = $ticket ? $ticket->getId() : null;




        $messageOwner = $message->getUtilisateur();
        $ownerId = $messageOwner ? $messageOwner->getId() : 'NULL';
        $currentUserId = $user ? $user->getId() : 'NULL';


        if ($messageOwner !== $user || $message->getTypeSender() !== Message::SENDER_USER) {
            $this->addFlash('danger', "Message Edit Denied! You: ID $currentUserId | Owner: ID $ownerId | Role: " . $message->getTypeSender());
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
        SluggerInterface $slugger,
        \App\Service\CloudinaryUploader $cloudinaryUploader,
        \App\Service\WebSocketService $webSocketService
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
            $message->setTypeSender(Message::SENDER_ADMIN);




            /** @var Utilisateur|null $user */
            $user = $this->getUser();
            if ($user instanceof Utilisateur) {
                $message->setUtilisateur($user);
            }




            /** @var UploadedFile|null $attachmentFile */
            $attachmentFile = $form->get('attachment')->getData();




            if ($attachmentFile instanceof UploadedFile) {
                try {
                    $this->addFlash('info', 'Admin attachment: uploading...');
                    $cloudinaryUrl = $cloudinaryUploader->upload(
                        $attachmentFile->getRealPath(),
                        'findinari/messages'
                    );
                    if ($cloudinaryUrl) {
                        $message->setUrlPieceJointe($cloudinaryUrl);
                        $this->addFlash('info', 'Admin attachment success!');
                    }
                } catch (\Exception $e) {
                    $this->addFlash('danger', 'Cloudinary Error: ' . $e->getMessage());
                }
            }




            $entityManager->persist($message);
            $entityManager->flush();


            // NOTIFY JAVA SERVER
            $webSocketService->sendMessage(
                $ticket->getId(),
                $message->getContenu() ?? '',
                $message->getUrlPieceJointe(),
                Message::SENDER_ADMIN,
                $this->getUser() ? $this->getUser()->getId() : 0,
                $message->getId()
            );


            $this->addFlash('success', 'Reply sent successfully.');
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




        $ticket = $message->getTicket();
        $ticketId = $ticket ? $ticket->getId() : null;




        if ($message->getTypeSender() !== Message::SENDER_ADMIN) {
            $this->addFlash('danger', 'You can only delete your own messages.');
            return $this->redirectToRoute('app_admin_ticket_details', ['id' => $ticketId]);
        }




        $token = (string)$request->request->get('_token');
        if ($this->isCsrfTokenValid('delete_message_admin_' . $message->getId(), $token)) {
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




        $ticket = $message->getTicket();
        $ticketId = $ticket ? $ticket->getId() : null;




        if ($message->getTypeSender() !== Message::SENDER_ADMIN) {
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
            /** @var UploadedFile|null $audioFile */
            $audioFile = $request->files->get('audio');




            if (!$audioFile instanceof UploadedFile) {
                return $this->json(['error' => 'No audio file found in request'], 400);
            }




            $realPath = $audioFile->getRealPath();
            if ($realPath === false) {
                return $this->json(['error' => 'Invalid file path'], 400);
            }




            $cloudinaryUrl = $uploader->uploadAudio($realPath);
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
            return $this->json(['error' => 'Server error: ' . $e->getMessage()], 500);
        }
    }




    #[Route('/user/ticket/{id}/voice', name: 'app_user_message_voice', methods: ['POST'])]
    public function userVoiceMessage(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        CloudinaryUploader $uploader
    ): JsonResponse {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();




        if (!$user || $ticket->getUtilisateur() !== $user) {
            return $this->json(['error' => 'Access denied'], 403);
        }




        try {
            /** @var UploadedFile|null $audioFile */
            $audioFile = $request->files->get('audio');




            if (!$audioFile instanceof UploadedFile) {
                return $this->json(['error' => 'No audio file found in request'], 400);
            }




            $realPath = $audioFile->getRealPath();
            if ($realPath === false) {
                return $this->json(['error' => 'Invalid file path'], 400);
            }




            $cloudinaryUrl = $uploader->uploadAudio($realPath);
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
            return $this->json(['error' => 'Server error: ' . $e->getMessage()], 500);
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




        $role = $this->isGranted('ROLE_ADMIN') ? 'ADMIN' : 'USER';
        $messages = $ticket->getMessages()->toArray();




        usort($messages, static fn($a, $b) => $a->getDate() <=> $b->getDate());
        $lastMessages = array_slice($messages, -5);




        try {
            $suggestions = $groqSuggestionService->suggestReplies($role, $lastMessages);
            return $this->json([
                'suggestions' => $suggestions,
                'detected_role' => $role
            ]);
        } catch (\Throwable $e) {
            return $this->json(['error' => 'Failed to fetch suggestions'], 500);
        }
    }




    #[Route('/message/reformulate', name: 'app_message_reformulate', methods: ['POST'])]
    public function messageReformulate(
        Request $request,
        GroqReformulationService $reformulationService
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }




        $data = json_decode((string)$request->getContent(), true);
        $content = $data['content'] ?? '';
        $mode = $data['mode'] ?? 'formalize';
       
        if (trim($content) === '') {
            return $this->json(['transformed' => '']);
        }




        $role = $this->isGranted('ROLE_ADMIN') ? 'ADMIN' : 'USER';
        $reformulated = $reformulationService->transformMessage($role, $content, $mode);




        return $this->json(['transformed' => $reformulated]);
    }




    #[Route('/ticket/{id}/summary', name: 'app_ticket_summary', methods: ['GET'])]
    public function ticketSummary(
        Ticket $ticket,
        GroqSummaryService $summaryService
    ): JsonResponse {
        if (!$this->getUser()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }




        $messages = $ticket->getMessages()->toArray();
        usort($messages, static fn($a, $b) => $a->getDate() <=> $b->getDate());




        $summary = $summaryService->summarizeTicket($messages, $ticket->getStatut() ?? 'OUVERT');
        return $this->json($summary);
    }




    #[Route('/ticket/{id}/fetch-new/{lastId}', name: 'app_ticket_fetch_new_messages', methods: ['GET'])]
    public function fetchNewMessages(
        Ticket $ticket,
        int $lastId,
        MessageRepository $messageRepository
    ): JsonResponse {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }




        $isAdmin = $this->isGranted('ROLE_ADMIN');
        if (!$isAdmin && $ticket->getUtilisateur() !== $user) {
            return $this->json(['error' => 'Access denied'], 403);
        }




        $ticketId = $ticket->getId();
        if (null === $ticketId) {
            return $this->json(['error' => 'Invalid ticket ID'], 400);
        }




        $newMessages = $messageRepository->findMessagesAfterId($ticketId, $lastId);
        $html = '';
        foreach ($newMessages as $message) {
            /** @var Message $message */
            $template = $isAdmin ? 'reclamation/_message_item_admin.html.twig' : 'reclamation/_message_item_user.html.twig';
            $html .= $this->renderView($template, [
                'message' => $message,
                'ticket' => $ticket
            ]);
        }




        $lastIdValue = $lastId;
        if (count($newMessages) > 0) {
            $lastMessage = end($newMessages);
            $lastIdValue = (int)$lastMessage->getId();
        }




        return $this->json([
            'html' => $html,
            'count' => count($newMessages),
            'lastId' => $lastIdValue
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
        if (!$ticket) {
            return $this->json(['error' => 'Ticket not found'], 404);
        }




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
                    'method' => 'GET',
                    'header' => "Accept: application/json\r\nUser-Agent: Mozilla/5.0\r\n",
                    'timeout' => 10,
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




            return $this->json(['error' => 'Translation service unavailable.'], 502);
        } catch (\Throwable $e) {
            return $this->json(['error' => 'Translation failed: ' . $e->getMessage()], 500);
        }
    }
}










