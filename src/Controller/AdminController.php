<?php

namespace App\Controller;

use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
use App\Entity\reclamation\Message;
use App\Entity\reclamation\Ticket;
use App\Entity\user\Feedback;
use App\Entity\user\Utilisateur;
use App\Form\MessageType;
use App\Repository\FeedbackRepository;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\ObjectifRepository;
use App\Repository\TicketRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\WalletRepository;
use App\Service\TicketSlaCalculator;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function dashboard(
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        FeedbackRepository $feedbackRepository,
        ObjectifRepository $objectifRepository,
        PaginatorInterface $paginator
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $q = trim((string) $request->query->get('q', ''));
        $userSort = trim((string) $request->query->get('user_sort', 'name_asc'));
        $objStatut = trim((string) $request->query->get('obj_statut', ''));

        $usersQb = $this->buildUsersQuery($utilisateurRepository, $q, $userSort);

        $users = $paginator->paginate(
            $usersQb,
            $request->query->getInt('users_page', 1),
            10,
            ['pageParameterName' => 'users_page']
        );

        $feedbackQb = $feedbackRepository->createQueryBuilder('f')
            ->orderBy('f.createdAt', 'DESC');

        $feedbacks = $paginator->paginate(
            $feedbackQb,
            $request->query->getInt('feedbacks_page', 1),
            8,
            ['pageParameterName' => 'feedbacks_page']
        );

        $objectifsQb = $objectifRepository->createQueryBuilder('o')
            ->orderBy('o.id', 'DESC');

        if ($objStatut !== '') {
            $objectifsQb->andWhere('o.statut = :statut')
                ->setParameter('statut', $objStatut);
        }

        $objectifs = $paginator->paginate(
            $objectifsQb,
            $request->query->getInt('objectifs_page', 1),
            8,
            ['pageParameterName' => 'objectifs_page']
        );

        $allUsers = $utilisateurRepository->findAll();

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
            'objectifs' => $objectifs,
            'totalUsers' => count($allUsers),
            'filteredUsersCount' => $users->getTotalItemCount(),
            'totalFeedbacks' => $feedbackRepository->count([]),
            'adminCount' => $adminCount,
            'userCount' => $userCount,
            'influencerCount' => $influencerCount,
            'activeUsersCount' => $activeUsersCount,
            'inactiveUsersCount' => $inactiveUsersCount,
            'search' => $q,
            'userSort' => $userSort,
            'objStatut' => $objStatut,
        ]);
    }

    #[Route('/admin/ajax/users', name: 'app_admin_ajax_users', methods: ['GET'])]
    public function ajaxUsers(
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        PaginatorInterface $paginator
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $q = trim((string) $request->query->get('q', ''));
        $userSort = trim((string) $request->query->get('user_sort', 'name_asc'));

        $usersQb = $this->buildUsersQuery($utilisateurRepository, $q, $userSort);

        $users = $paginator->paginate(
            $usersQb,
            $request->query->getInt('users_page', 1),
            10,
            ['pageParameterName' => 'users_page']
        );

        return $this->render('admin/_users_table.html.twig', [
            'users' => $users,
            'totalUsers' => $utilisateurRepository->count([]),
            'search' => $q,
            'userSort' => $userSort,
        ]);
    }

    private function buildUsersQuery(
        UtilisateurRepository $utilisateurRepository,
        string $q,
        string $userSort
    ): QueryBuilder {
        $qb = $utilisateurRepository->createQueryBuilder('u');

        if ($q !== '') {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }

        switch ($userSort) {
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

        return $qb;
    }

    #[Route('/admin/user/{id}/delete', name: 'app_admin_user_delete', methods: ['POST'])]
    public function deleteUser(
        Utilisateur $utilisateur,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_user_' . $utilisateur->getId(), (string) $request->request->get('_token'))) {
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
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

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
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

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
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $nom = trim((string) $request->request->get('nom'));
        $prenom = trim((string) $request->request->get('prenom'));
        $gmail = trim((string) $request->request->get('gmail'));
        $password = (string) $request->request->get('password');

        if (!$nom || !$prenom || !$gmail || !$password) {
            $this->addFlash('danger', 'All admin fields are required.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        $existing = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => $gmail]);

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
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_feedback_admin_' . $feedback->getId(), (string) $request->request->get('_token'))) {
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

        if ($this->isCsrfTokenValid('delete_wallet_admin_' . $wallet->getId(), (string) $request->request->get('_token'))) {
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
        TicketRepository $ticketRepository,
        \Knp\Component\Pager\PaginatorInterface $paginator
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

        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/tickets.html.twig', [
            'tickets' => $qb->getQuery()->getResult(),
            'tickets'     => $pagination,
            'currentSort' => $sort,
        ]);
    }

    #[Route('/admin/ticket-calendar', name: 'app_admin_ticket_calendar')]
    public function ticketCalendar(TicketRepository $ticketRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $tickets = $ticketRepository->createQueryBuilder('t')
            ->where('t.statut NOT IN (:closed)')
            ->setParameter('closed', [Ticket::STATUS_CLOSED, 'Fermé', 'CLOSED', 'Resolved', 'RESOLVED'])
            ->getQuery()
            ->getResult();

        $events = [];
        foreach ($tickets as $ticket) {
            $events[] = [
                'id' => $ticket->getId(),
                'title' => $ticket->getTitre() ?: 'Untitled Ticket',
                'start' => $ticket->getDateCreation() ? $ticket->getDateCreation()->format('Y-m-d\TH:i:s') : date('Y-m-d\TH:i:s'),
                'url' => $this->generateUrl('app_admin_ticket_details', ['id' => $ticket->getId()]),
                'className' => 'priority-' . strtolower($ticket->getPriorite() ?: 'low'),
                'extendedProps' => [
                    'status'   => $ticket->getStatut(),
                    'priority' => $ticket->getPriorite(),
                    'user'     => $ticket->getUtilisateur() ? $ticket->getUtilisateur()->getPrenom() . ' ' . $ticket->getUtilisateur()->getNom() : 'Anonymous'
                ]
            ];
        }

        return $this->render('admin/ticket_calendar.html.twig', [
            'events'      => json_encode($events),
            'ticketCount' => count($tickets)
        ]);
    }

    #[Route('/admin/ticket-stats', name: 'app_admin_ticket_stats')]
    public function ticketStats(
        TicketRepository $ticketRepository,
        ChartBuilderInterface $chartBuilder
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $tickets = $ticketRepository->findAll();

        $statuses = [];
        $priorities = [];
        $sla = ['On Time' => 0, 'Delayed' => 0];

        $now = new \DateTime();

        foreach ($tickets as $ticket) {
            $rawStatut = strtolower(trim((string) $ticket->getStatut()));
            if (in_array($rawStatut, ['en cours', 'in progress'])) {
                $statut = Ticket::STATUS_IN_PROGRESS;
            } elseif (in_array($rawStatut, ['fermé', 'closed', 'resolved'])) {
                $statut = Ticket::STATUS_CLOSED;
            } else {
                $statut = Ticket::STATUS_OPEN;
            }
            $statuses[$statut] = ($statuses[$statut] ?? 0) + 1;

            $rawPriority = strtolower(trim((string) $ticket->getPriorite()));
            if (in_array($rawPriority, ['high', 'haute', 'urgent', 'urgente'])) {
                $priorite = Ticket::PRIORITY_HIGH;
            } elseif (in_array($rawPriority, ['medium', 'moyenne'])) {
                $priorite = Ticket::PRIORITY_MEDIUM;
            } else {
                $priorite = Ticket::PRIORITY_LOW;
            }
            $priorities[$priorite] = ($priorities[$priorite] ?? 0) + 1;

            $deadline = $ticket->getDeadline();
            if ($deadline) {
                if ($statut === 'Closed') {
                    $closedAt = $ticket->getDateFermeture() ?: $now;
                    if ($closedAt > $deadline) {
                        $sla['Delayed']++;
                    } else {
                        $sla['On Time']++;
                    }
                } else {
                    if ($now > $deadline) {
                        $sla['Delayed']++;
                    } else {
                        $sla['On Time']++;
                    }
                }
            }
        }

        $statusChart = $chartBuilder->createChart(Chart::TYPE_PIE);
        $statusChart->setData([
            'labels' => array_keys($statuses),
            'datasets' => [
                [
                    'label' => 'Ticket Statuses',
                    'backgroundColor' => ['#4ade80', '#fbbf24', '#f87171', '#60a5fa', '#a78bfa', '#9ca3af', '#f472b6'],
                    'data' => array_values($statuses),
                ],
            ],
        ]);
        $statusChart->setOptions(['responsive' => true, 'maintainAspectRatio' => false]);

        $priorityChart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $priorityChart->setData([
            'labels' => array_keys($priorities),
            'datasets' => [
                [
                    'label' => 'Tickets by Priority',
                    'backgroundColor' => ['#f87171', '#fbbf24', '#60a5fa', '#9ca3af'],
                    'data' => array_values($priorities),
                ],
            ],
        ]);
        $priorityChart->setOptions([
            'responsive' => true, 
            'maintainAspectRatio' => false, 
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => ['stepSize' => 1]
                ]
            ]
        ]);

        $slaChart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $slaChart->setData([
            'labels' => array_keys($sla),
            'datasets' => [
                [
                    'label' => 'SLA Adherence',
                    'backgroundColor' => ['#4ade80', '#f87171'],
                    'data' => array_values($sla),
                ],
            ],
        ]);
        $slaChart->setOptions(['responsive' => true, 'maintainAspectRatio' => false]);

        return $this->render('admin/ticket_statistics.html.twig', [
            'statusChart'   => $statusChart,
            'priorityChart' => $priorityChart,
            'slaChart'      => $slaChart,
        ]);
    }

    #[Route('/admin/ticket/{id}/delete', name: 'app_admin_ticket_delete', methods: ['POST'])]
    public function deleteTicketAdmin(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_ticket_admin_' . $ticket->getId(), (string) $request->request->get('_token'))) {
            $entityManager->remove($ticket);
            $entityManager->flush();
            $this->addFlash('success', 'Ticket deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_tickets');
    }
//mailer envoie un protocle stmp avec brevo 
    #[Route('/admin/ticket/{id}', name: 'app_admin_ticket_details', methods: ['GET', 'POST'])]
    public function ticketDetails(
        Ticket $ticket,
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        TicketSlaCalculator $ticketSlaCalculator
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
    if ($request->isMethod('POST') && $request->request->has('update_ticket')) {
        $oldStatus = $ticket->getStatut();
        $oldPriority = $ticket->getPriorite();

        $newStatut = $request->request->get('statut');
        $newPriorite = $request->request->get('priorite');

        if ($newStatut) {
            $ticket->setStatut($newStatut);
        }

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);

        return $this->render('admin/ticket_details.html.twig', [
            'ticket' => $ticket,
            'messages' => $ticket->getMessages(),
            'form' => $form->createView(),
        if ($newPriorite) {
            $ticket->setPriorite($newPriorite);
        }

        if (in_array($newStatut, [Ticket::STATUS_CLOSED, 'Fermé', 'CLOSED', 'Resolved', 'RESOLVED'], true)) {
            $ticket->setDateFermeture(new \DateTime());
        }

        $resolvedStatuses = [Ticket::STATUS_CLOSED, 'Fermé', 'CLOSED', 'Resolved', 'RESOLVED'];

        $becameResolved =
            !in_array($oldStatus, $resolvedStatuses, true)
            && in_array($ticket->getStatut(), $resolvedStatuses, true);

        $entityManager->flush();

        if (
            $becameResolved &&
            $ticket->getUtilisateur() &&
            $ticket->getUtilisateur()->getGmail()
        ) {
            try {
                $recipient = $ticket->getUtilisateur()->getGmail();
                $sender = $_ENV['MAIL_FROM_ADDRESS'] ?? 'eyahellal8@gmail.com';

                $email = (new TemplatedEmail())
                    ->from($sender)
                    ->to($recipient)
                    ->subject('Your ticket has been resolved')
                    ->htmlTemplate('emails/ticket_resolved.html.twig')
                    ->context([
                        'ticket' => $ticket,
                        'user' => $ticket->getUtilisateur(),
                    ]);

                $mailer->send($email);
                $this->addFlash('info', sprintf('Debug: Mailer->send() logic reached. FROM: %s | TO: %s', $sender, $recipient));
            } catch (\Throwable $e) {
                $this->addFlash('danger', sprintf('Debug: Mailer Exception! %s: %s', get_class($e), $e->getMessage()));
            }
        } elseif ($becameResolved) {
            $user = $ticket->getUtilisateur();
            $this->addFlash('warning', sprintf(
                'Debug: Email block skipped. User: %s | Email: %s',
                $user ? $user->getPrenom() : 'NULL',
                $user ? $user->getGmail() : 'NULL'
            ));
        } else {
             $this->addFlash('secondary', 'Debug: Ticket status updated but "becameResolved" is FALSE (Email not triggered).');
        }

        $this->addFlash('success', sprintf('Ticket updated successfully. (Resolution detected: %s | User Found: %s)', 
            $becameResolved ? 'YES' : 'NO',
            $ticket->getUtilisateur() ? 'YES' : 'NO'
        ));

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
    #[Route('/admin/obligations', name: 'app_admin_obligations')]
    public function obligations(
        ObligationRepository $obligationRepository,
        InvestissementobligationRepository $investmentRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $obligations = $obligationRepository->findAll();

        $avgRate = 0;
        if (count($obligations) > 0) {
            $totalRate = 0;
            foreach ($obligations as $obligation) {
                $totalRate += $obligation->getTauxInteret();
            }
            $avgRate = round($totalRate / count($obligations), 2);
        }

        $totalInvestments = count($investmentRepository->findAll());

        return $this->render('admin/obligations.html.twig', [
            'obligations' => $obligations,
            'avgInterestRate' => $avgRate,
            'totalInvestments' => $totalInvestments,
        ]);
    }

    #[Route('/admin/obligation/{id}/delete', name: 'app_admin_obligation_delete', methods: ['POST'])]
    public function deleteObligationAdmin(
        Obligation $obligation,
        Request $request,
        EntityManagerInterface $entityManager,
        InvestissementobligationRepository $investmentRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_obligation_admin_' . $obligation->getIdObligation(), (string) $request->request->get('_token'))) {
            $investments = $investmentRepository->findBy(['obligationId' => $obligation->getIdObligation()]);
            foreach ($investments as $investment) {
                $entityManager->remove($investment);
            }
            $entityManager->remove($obligation);
            $entityManager->flush();
            $this->addFlash('success', 'Obligation and all related investments deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_obligations');
    }

    #[Route('/admin/objectifs', name: 'app_admin_objectifs')]
    public function objectifs(
        ObjectifRepository $objectifRepository,
        WalletRepository $walletRepository,
        Request $request
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $filterWalletId = $request->query->get('wallet_id');
        $filterStatut = $request->query->get('statut');
        $searchObjectif = trim((string) $request->query->get('q', ''));

        $wallets = [];
        foreach ($walletRepository->findAll() as $w) {
            $wallets[$w->getId()] = [
                'pays' => $w->getPays(),
                'devise' => $w->getDevise(),
                'solde' => $w->getSolde(),
            ];
        }

        $qb = $objectifRepository->createQueryBuilder('o');

        if ($filterWalletId) {
            $qb->andWhere('o.walletId = :walletId')
               ->setParameter('walletId', (int) $filterWalletId);
        }

        if ($filterStatut) {
            $qb->andWhere('o.statut = :statut')
               ->setParameter('statut', $filterStatut);
        }

        if ($searchObjectif !== '') {
            $qb->andWhere('o.titre LIKE :q')
               ->setParameter('q', '%' . $searchObjectif . '%');
        }

        $objectifs = $qb->orderBy('o.id', 'DESC')->getQuery()->getResult();

        return $this->render('admin/objectifs.html.twig', [
            'objectifs' => $objectifs,
            'wallets' => $wallets,
            'selectedWalletId' => $filterWalletId,
            'filterWalletId' => $filterWalletId,
            'filterStatut' => $filterStatut,
            'searchObjectif' => $searchObjectif,
        ]);
    }

    #[Route('/admin/user/{id}', name: 'app_admin_user_show', methods: ['GET'])]
    public function showUser(Utilisateur $utilisateur): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/user_show.html.twig', [
            'selectedUser' => $utilisateur,
        ]);
    }
    #[Route('/admin/overview', name: 'app_admin_overview')]
public function overviewDashboard(): Response
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    return $this->redirectToRoute('app_admin_overview_dashboard');
}
}