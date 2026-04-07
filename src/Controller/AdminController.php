<?php

namespace App\Controller;

use App\Entity\Loan\Wallet;
use App\Entity\reclamation\Message;
use App\Entity\reclamation\Ticket;
use App\Entity\user\Feedback;
use App\Entity\user\Utilisateur;
use App\Form\MessageType;
use App\Repository\FeedbackRepository;
use App\Repository\TicketRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function dashboard(
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        FeedbackRepository $feedbackRepository
    ): Response {
        $q = trim((string) $request->query->get('q', ''));
        $sort = trim((string) $request->query->get('sort', 'name_asc'));

        $qb = $utilisateurRepository->createQueryBuilder('u');

        if ($q !== '') {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q')
               ->setParameter('q', '%'.$q.'%');
        }

        switch ($sort) {
            case 'name_desc':
                $qb->orderBy('u.nom', 'DESC')
                   ->addOrderBy('u.prenom', 'DESC');
                break;

            case 'role_asc':
                $qb->orderBy('u.role', 'ASC')
                   ->addOrderBy('u.nom', 'ASC')
                   ->addOrderBy('u.prenom', 'ASC');
                break;

            case 'role_desc':
                $qb->orderBy('u.role', 'DESC')
                   ->addOrderBy('u.nom', 'ASC')
                   ->addOrderBy('u.prenom', 'ASC');
                break;

            case 'id_asc':
                $qb->orderBy('u.id', 'ASC');
                break;

            case 'id_desc':
                $qb->orderBy('u.id', 'DESC');
                break;

            case 'name_asc':
            default:
                $qb->orderBy('u.nom', 'ASC')
                   ->addOrderBy('u.prenom', 'ASC');
                break;
        }

        $users = $qb->getQuery()->getResult();
        $allUsers = $utilisateurRepository->findAll();
        $feedbacks = $feedbackRepository->findAll();

        $adminCount = 0;
        $userCount = 0;
        $influencerCount = 0;
        $activeUsersCount = 0;
        $inactiveUsersCount = 0;

        foreach ($allUsers as $u) {
            if ($u->getRole() === 'ADMIN') {
                ++$adminCount;
            } elseif ($u->getRole() === 'INFLUENCER') {
                ++$influencerCount;
            } else {
                ++$userCount;
            }

            if (in_array($u->getStatut(), ['ACTIF', 'ACTIVE'], true)) {
                ++$activeUsersCount;
            } else {
                ++$inactiveUsersCount;
            }
        }

        return $this->render('admin/dashboard.html.twig', [
            'users' => $users,
            'feedbacks' => $feedbacks,
            'totalUsers' => count($allUsers),
            'filteredUsersCount' => count($users),
            'totalFeedbacks' => count($feedbacks),
            'adminCount' => $adminCount,
            'userCount' => $userCount,
            'influencerCount' => $influencerCount,
            'activeUsersCount' => $activeUsersCount,
            'inactiveUsersCount' => $inactiveUsersCount,
            'search' => $q,
            'sort' => $sort,
        ]);
    }

    #[Route('/admin/user/{id}/delete', name: 'app_admin_user_delete', methods: ['POST'])]
    public function deleteUser(
        Utilisateur $utilisateur,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete_user_'.$utilisateur->getId(), (string) $request->request->get('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();

            $this->addFlash('success', 'User deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/admin/user/{id}/role', name: 'app_admin_user_role', methods: ['POST'])]
    public function changeUserRole(
        Utilisateur $utilisateur,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $newRole = strtoupper(trim((string) $request->request->get('role')));

        if (in_array($newRole, ['USER', 'ADMIN', 'INFLUENCER'], true)) {
            $utilisateur->setRole($newRole);
            $utilisateur->setDateModification(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'User role updated successfully.');
        } else {
            $this->addFlash('danger', 'Invalid role selected.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/admin/user/{id}/status', name: 'app_admin_user_status', methods: ['POST'])]
    public function changeUserStatus(
        Utilisateur $utilisateur,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $newStatus = strtoupper(trim((string) $request->request->get('statut')));

        if (in_array($newStatus, ['ACTIF', 'ACTIVE', 'INACTIF', 'INACTIVE', 'BANNED'], true)) {
            $utilisateur->setStatut($newStatus);
            $utilisateur->setDateModification(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'User status updated successfully.');
        } else {
            $this->addFlash('danger', 'Invalid status selected.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/admin/create-admin', name: 'app_admin_create_admin', methods: ['POST'])]
    public function createAdmin(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $nom = trim((string) $request->request->get('nom'));
        $prenom = trim((string) $request->request->get('prenom'));
        $gmail = trim((string) $request->request->get('gmail'));
        $password = (string) $request->request->get('password');

        if (!$nom || !$prenom || !$gmail || !$password) {
            $this->addFlash('danger', 'All admin fields are required.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        $existing = $entityManager->getRepository(Utilisateur::class)->findOneBy([
            'gmail' => $gmail,
        ]);

        if ($existing) {
            $this->addFlash('danger', 'Email already exists.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        $admin = new Utilisateur();
        $admin->setNom($nom);
        $admin->setPrenom($prenom);
        $admin->setGmail($gmail);
        $admin->setMdp($passwordHasher->hashPassword($admin, $password));
        $admin->setRole('ADMIN');
        $admin->setStatut('ACTIF');
        $admin->setDateCreation(new \DateTime());
        $admin->setDateModification(new \DateTime());

        $entityManager->persist($admin);
        $entityManager->flush();

        $this->addFlash('success', 'Admin account created successfully.');
        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/admin/feedback/{id}/delete', name: 'app_admin_feedback_delete', methods: ['POST'])]
    public function deleteFeedback(
        Feedback $feedback,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete_feedback_admin_'.$feedback->getId(), (string) $request->request->get('_token'))) {
            $entityManager->remove($feedback);
            $entityManager->flush();

            $this->addFlash('success', 'Feedback deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/admin/wallets', name: 'app_admin_wallets')]
    public function wallets(
        WalletRepository $walletRepository,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $wallets = $walletRepository->findAll();
        $users = $utilisateurRepository->findAll();

        $activeUsersCount = 0;
        foreach ($users as $user) {
            if (in_array($user->getStatut(), ['ACTIF', 'ACTIVE'], true)) {
                ++$activeUsersCount;
            }
        }

        $currencies = [];
        foreach ($wallets as $wallet) {
            if (method_exists($wallet, 'getDevise') && $wallet->getDevise()) {
                $currencies[] = $wallet->getDevise();
            }
        }

        return $this->render('admin/wallets.html.twig', [
            'wallets' => $wallets,
            'activeUsersCount' => $activeUsersCount,
            'currenciesCount' => count(array_unique($currencies)),
        ]);
    }

    #[Route('/admin/wallet/{id}/delete', name: 'app_admin_wallet_delete', methods: ['POST'])]
    public function deleteWalletAdmin(
        Wallet $wallet,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_wallet_admin_'.$wallet->getId(), (string) $request->request->get('_token'))) {
            $entityManager->remove($wallet);
            $entityManager->flush();

            $this->addFlash('success', 'Wallet deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_wallets');
    }

    #[Route('/admin/ticket', name: 'app_admin_tickets')]
    public function tickets(
        Request $request,
        TicketRepository $ticketRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $sort = $request->query->get('sort', 'newest');
        $qb = $ticketRepository->createQueryBuilder('t');

        switch ($sort) {
            case 'oldest':
                $qb->orderBy('t.id', 'ASC');
                break;
            case 'priority_high':
                $qb->addSelect("(CASE WHEN t.priorite = 'High' THEN 3 WHEN t.priorite = 'Medium' THEN 2 ELSE 1 END) AS HIDDEN p_order")
                   ->orderBy('p_order', 'DESC');
                break;
            case 'status_open':
                $qb->orderBy('t.statut', 'DESC');
                break;
            case 'newest':
            default:
                $qb->orderBy('t.id', 'DESC');
                break;
        }

        return $this->render('admin/tickets.html.twig', [
            'tickets' => $qb->getQuery()->getResult(),
            'currentSort' => $sort,
        ]);
    }

    #[Route('/admin/ticket/{id}/delete', name: 'app_admin_ticket_delete', methods: ['POST'])]
    public function deleteTicketAdmin(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_ticket_admin_'.$ticket->getId(), (string) $request->request->get('_token'))) {
            $entityManager->remove($ticket);
            $entityManager->flush();

            $this->addFlash('success', 'Ticket deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_tickets');
    }

    #[Route('/admin/ticket/{id}', name: 'app_admin_ticket_details', methods: ['GET', 'POST'])]
    public function ticketDetails(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($request->isMethod('POST') && $request->request->has('update_ticket')) {
            $newStatut = $request->request->get('statut');
            $newPriorite = $request->request->get('priorite');

            if ($newStatut) {
                $ticket->setStatut($newStatut);
            }

            if ($newPriorite) {
                $ticket->setPriorite($newPriorite);
            }

            if (in_array($newStatut, ['Fermé', 'CLOSED', 'Closed'], true)) {
                $ticket->setDateFermeture(new \DateTime());
            }

            $entityManager->flush();
            $this->addFlash('success', 'Ticket updated successfully.');

            return $this->redirectToRoute('app_admin_ticket_details', [
                'id' => $ticket->getId(),
            ]);
        }

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);

        return $this->render('admin/ticket_details.html.twig', [
            'ticket' => $ticket,
            'messages' => $ticket->getMessages(),
            'form' => $form->createView(),
        ]);
    }
}