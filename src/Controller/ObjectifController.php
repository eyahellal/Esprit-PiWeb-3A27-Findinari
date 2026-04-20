<?php
namespace App\Controller;

use App\Entity\objective\Objectif;
use App\Entity\objective\Contributiongoal;
use App\Form\ObjectifType;
use App\Repository\ObjectifRepository;
use App\Service\GoalStatisticsService;
use App\Service\NotificationService;
use App\Repository\UtilisateurRepository;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/objectif')]
class ObjectifController extends AbstractController
{
    // ── INDEX ─────────────────────────────────────────────────────────────

    #[Route('', name: 'objectif_index', methods: ['GET'])]
    public function index(
        ObjectifRepository    $repo,
        Connection            $connection,
        Request               $request,
        NotificationService   $notifService,
        GoalStatisticsService $goalStats,
        UtilisateurRepository $utilisateurRepository,
        PaginatorInterface    $paginator
    ): Response {
        $user             = $this->getUser();
        $userId           = $user?->getId() ?? 1;
        $selectedWalletId = $request->query->get('wallet_id');

        if ($selectedWalletId) {
            $request->getSession()->set('selected_wallet_id', $selectedWalletId);
        }

        if ($this->isGranted('ROLE_ADMIN')) {
            $walletsRaw = $connection->fetchAllAssociative(
                'SELECT id, pays, devise, solde FROM wallet'
            );
        } else {
            $walletsRaw = $connection->fetchAllAssociative(
                'SELECT id, pays, devise, solde FROM wallet WHERE utilisateur_id = ?',
                [$userId]
            );
        }

        $wallets = [];
        foreach ($walletsRaw as $w) {
            $wallets[$w['id']] = $w;
        }

        $qb = $repo->createQueryBuilder('o');
        if ($selectedWalletId) {
            $qb->where('o.walletId = :wid')->setParameter('wid', $selectedWalletId);
        } else {
            $walletIds = array_keys($wallets);
            if ($walletIds) {
                $qb->where('o.walletId IN (:wids)')->setParameter('wids', $walletIds);
            } else {
                $qb->where('1 = 0');
            }
        }

        $objectifsPaginated = $paginator->paginate(
            $qb->getQuery(),
            $request->query->getInt('page', 1),
            3
        );

        $notifService->generateForObjectifs(
            iterator_to_array($objectifsPaginated->getItems())
        );

        // ══ TOP CONTRIBUTEURS ══
        $allObjectifs   = $repo->findAll();
        $allWalletsData = $connection->fetchAllAssociative('SELECT id, utilisateur_id, pays FROM wallet');
        $walletToUser   = [];
        $userPays       = [];
        foreach ($allWalletsData as $w) {
            $walletToUser[$w['id']] = $w['utilisateur_id'];
            if ($w['utilisateur_id'] && !isset($userPays[$w['utilisateur_id']])) {
                $userPays[$w['utilisateur_id']] = $w['pays'] ?: '—';
            }
        }

        $usersMap = [];
        foreach ($utilisateurRepository->findAll() as $u) {
            $usersMap[$u->getId()] = [
                'nom'  => $u->getPrenom() . ' ' . $u->getNom(),
                'pays' => $userPays[$u->getId()] ?? '—',
            ];
        }

        $byUser = [];
        foreach ($allObjectifs as $objectif) {
            $wid = $objectif->getWalletId();
            $uid = $walletToUser[$wid] ?? null;
            if (!$uid || !isset($usersMap[$uid])) continue;

            $stats = $goalStats->compute($objectif);
            if (!isset($byUser[$uid])) {
                $byUser[$uid] = [
                    'userId'            => $uid,
                    'userName'          => $usersMap[$uid]['nom'],
                    'pays'              => $usersMap[$uid]['pays'],
                    'objectifsAtteints' => [],
                    'totalCollected'    => 0,
                ];
            }
            if ($stats['progressPct'] >= 100) {
                $byUser[$uid]['objectifsAtteints'][] = ['objectif' => $objectif, 'stats' => $stats];
                $byUser[$uid]['totalCollected'] += $stats['totalCollected'];
            }
        }

        // ── FIX : trier par totalCollected décroissant (et nb objectifs en priorité)
        usort($byUser, function ($a, $b) {
            $diff = count($b['objectifsAtteints']) - count($a['objectifsAtteints']);
            if ($diff !== 0) return $diff;
            return $b['totalCollected'] <=> $a['totalCollected'];
        });

        // Garder uniquement ceux qui ont au moins 1 objectif atteint, top 3
        $topContributeurs = array_slice(
            array_values(array_filter($byUser, fn($u) => count($u['objectifsAtteints']) > 0)),
            0, 3
        );

        return $this->render('objectif/index.html.twig', [
            'objectifs'        => $objectifsPaginated,
            'wallets'          => $wallets,
            'selectedWalletId' => $selectedWalletId,
            'notifCount'       => $notifService->countUnread(),
            'topContributeurs' => $topContributeurs,
        ]);
    }

    // ── NEW ───────────────────────────────────────────────────────────────
    #[Route('/new', name: 'objectif_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $walletId = $request->getSession()->get('selected_wallet_id');

        if (!$walletId) {
            $this->addFlash('error', 'Veuillez sélectionner un wallet avant de créer un objectif.');
            return $this->redirectToRoute('objectif_index');
        }

        $objectif = new Objectif();
        $objectif->setWalletId((int) $walletId);

        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($objectif);
            $em->flush();
            $this->addFlash('success', 'Objectif créé avec succès !');
            return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
        }

        return $this->render('objectif/new.html.twig', [
            'form'     => $form,
            'walletId' => $walletId,
        ]);
    }

    // ── NOTIFICATIONS ─────────────────────────────────────────────────────
    #[Route('/notifications', name: 'notifications_list', methods: ['GET'])]
    public function notificationsList(NotificationService $notifService): JsonResponse
    {
        return $this->json($notifService->getUnread());
    }

    #[Route('/notifications/read-all', name: 'notifications_read_all', methods: ['POST'])]
    public function notificationsReadAll(NotificationService $notifService): JsonResponse
    {
        $notifService->markAllRead();
        return $this->json(['ok' => true]);
    }

    #[Route('/notifications/{key}/read', name: 'notification_mark_read', methods: ['POST'])]
    public function notificationMarkRead(
        string              $key,
        NotificationService $notifService
    ): JsonResponse {
        $notifService->markRead($key);
        return $this->json(['ok' => true]);
    }

    // ── TOP CONTRIBUTIONS ─────────────────────────────────────────────────
    #[Route('/top-contributions/detail/{userId}', name: 'top_contributions', methods: ['GET'])]
    public function topContributionsDetail(
        int                   $userId,
        ObjectifRepository    $objectifRepo,
        GoalStatisticsService $goalStats,
        Connection            $connection,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté.');
        }

        $utilisateur = $utilisateurRepository->find($userId);
        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        // Récupérer les wallets de cet utilisateur
        $walletsData = $connection->fetchAllAssociative(
            'SELECT id, pays FROM wallet WHERE utilisateur_id = ?', [$userId]
        );
        $walletIds = array_column($walletsData, 'id');
        $pays      = $walletsData[0]['pays'] ?? '—';

        // ── FIX : Calculer le rang correctement ──
        $allObjectifs   = $objectifRepo->findAll();
        $allWalletsData = $connection->fetchAllAssociative('SELECT id, utilisateur_id FROM wallet');
        $walletToUser   = [];
        foreach ($allWalletsData as $w) {
            $walletToUser[$w['id']] = $w['utilisateur_id'];
        }

        // Construire $byUser en conservant le userId comme clé séparée
        $byUser = [];
        foreach ($allObjectifs as $objectif) {
            $wid = $objectif->getWalletId();
            $uid = $walletToUser[$wid] ?? null;
            if (!$uid) continue;

            $stats = $goalStats->compute($objectif);
            if (!isset($byUser[$uid])) {
                $byUser[$uid] = [
                    'userId'            => $uid,
                    'objectifsAtteints' => [],
                    'totalCollected'    => 0,
                ];
            }
            if ($stats['progressPct'] >= 100) {
                $byUser[$uid]['objectifsAtteints'][] = true;
                $byUser[$uid]['totalCollected'] += $stats['totalCollected'];
            }
        }

        // Filtrer ceux qui ont au moins 1 objectif atteint
        $byUser = array_values(array_filter($byUser, fn($u) => count($u['objectifsAtteints']) > 0));

        // Trier de la même façon que dans index()
        usort($byUser, function ($a, $b) {
            $diff = count($b['objectifsAtteints']) - count($a['objectifsAtteints']);
            if ($diff !== 0) return $diff;
            return $b['totalCollected'] <=> $a['totalCollected'];
        });

        // ── FIX : chercher le rang via userId stocké dans chaque entrée
        $rank = 1;
        foreach ($byUser as $entry) {
            if ((int)$entry['userId'] === $userId) break;
            $rank++;
        }

        // Construire les données détaillées pour cet utilisateur
        $objectifsAtteints = [];
        if ($walletIds) {
            $objectifs = $objectifRepo->findBy(['walletId' => $walletIds]);
            foreach ($objectifs as $objectif) {
                $stats = $goalStats->compute($objectif);
                if ($stats['progressPct'] >= 100) {
                    $objectifsAtteints[] = [
                        'objectif'      => $objectif,
                        'stats'         => $stats,
                        'contributions' => $objectif->getContributiongoals()->toArray(),
                    ];
                }
            }
        }

        $userData = [
            'userId'            => $userId,
            'userName'          => $utilisateur->getPrenom() . ' ' . $utilisateur->getNom(),
            'pays'              => $pays,
            'rank'              => $rank,
            'objectifsAtteints' => $objectifsAtteints,
        ];

        return $this->render('objectif/top_contributions_detail.html.twig', [
            'userData' => $userData,
        ]);
    }

    // ── HISTORIQUE ────────────────────────────────────────────────────────
    #[Route('/historique', name: 'objectif_historique', methods: ['GET'])]
    public function historique(
        ObjectifRepository    $repo,
        GoalStatisticsService $goalStats,
        Connection            $connection,
        Request               $request,
        NotificationService   $notifService,
        PaginatorInterface    $paginator
    ): Response {
        $user   = $this->getUser();
        $userId = $user?->getId() ?? 1;

        if ($this->isGranted('ROLE_ADMIN')) {
            $walletsRaw = $connection->fetchAllAssociative(
                'SELECT id, pays, devise, solde FROM wallet'
            );
        } else {
            $walletsRaw = $connection->fetchAllAssociative(
                'SELECT id, pays, devise, solde FROM wallet WHERE utilisateur_id = ?',
                [$userId]
            );
        }

        $walletIds = array_column($walletsRaw, 'id');
        $objectifs = $walletIds ? $repo->findBy(['walletId' => $walletIds]) : [];

        $historique = [];
        $enCours    = [];

        foreach ($objectifs as $objectif) {
            $stats = $goalStats->compute($objectif);

            if ($objectif->getStatut() === 'TERMINE') {
                $contribs = $objectif->getContributiongoals()->toArray();
                usort($contribs, fn($a, $b) => $b->getDate() <=> $a->getDate());
                $dateAtteinte = count($contribs) > 0 ? $contribs[0]->getDate() : null;

                $dureeReelle = null;
                if ($dateAtteinte && $objectif->getDateDebut()) {
                    $dureeReelle = (int) $objectif->getDateDebut()->diff($dateAtteinte)->days;
                }

                $historique[] = [
                    'objectif'     => $objectif,
                    'stats'        => $stats,
                    'dateAtteinte' => $dateAtteinte,
                    'dureeReelle'  => $dureeReelle,
                ];
            } else {
                $enCours[] = [
                    'objectif' => $objectif,
                    'stats'    => $stats,
                ];
            }
        }

        usort($historique, function ($a, $b) {
            if (!$a['dateAtteinte'] || !$b['dateAtteinte']) return 0;
            return $b['dateAtteinte'] <=> $a['dateAtteinte'];
        });

        $historiquePaginated = $paginator->paginate(
            $historique,
            $request->query->getInt('pageH', 1),
            5,
            ['pageParameterName' => 'pageH']
        );

        $enCoursPaginated = $paginator->paginate(
            $enCours,
            $request->query->getInt('pageE', 1),
            4,
            ['pageParameterName' => 'pageE']
        );

        $notifService->generateForObjectifs($objectifs);

        return $this->render('objectif/historique.html.twig', [
            'historique' => $historiquePaginated,
            'enCours'    => $enCoursPaginated,
            'notifCount' => $notifService->countUnread(),
        ]);
    }

    // ── SIMULER ───────────────────────────────────────────────────────────
    #[Route('/{id}/simuler', name: 'objectif_simuler', methods: ['POST'])]
    public function simuler(
        Request               $request,
        Objectif              $objectif,
        GoalStatisticsService $goalStats
    ): JsonResponse {
        $dailyAmount = (float) $request->request->get('montant_quotidien', 0);

        if ($dailyAmount <= 0) {
            return $this->json(['error' => 'Le montant journalier doit être positif.'], 400);
        }

        $simulation = $goalStats->simulateDailyContribution($objectif, $dailyAmount);

        if (!$simulation) {
            return $this->json(['message' => 'Cet objectif est déjà atteint !']);
        }

        return $this->json([
            'predictedDate'  => $simulation['predictedDate']->format('d/m/Y'),
            'daysNeeded'     => $simulation['daysNeeded'],
            'velocityPerDay' => $simulation['velocityPerDay'],
            'remaining'      => $simulation['remaining'],
            'confidence'     => $simulation['confidence'],
        ]);
    }

    // ── EVENTS CALENDRIER ─────────────────────────────────────────────────
    #[Route('/{id}/events', name: 'objectif_events', methods: ['GET'])]
    public function events(Objectif $objectif): JsonResponse
    {
        $events = [];

        foreach ($objectif->getContributiongoals() as $contrib) {
            $events[] = [
                'title'         => number_format($contrib->getMontant(), 2, ',', ' ') . ' €',
                'start'         => $contrib->getDate()->format('Y-m-d'),
                'color'         => '#1a9e6e',
                'textColor'     => '#fff',
                'extendedProps' => ['montant' => $contrib->getMontant()],
            ];
        }

        if ($objectif->getStatut() === 'TERMINE') {
            $last = $objectif->getContributiongoals()->last();
            if ($last) {
                $events[] = [
                    'title'     => '🏆 Objectif atteint',
                    'start'     => $last->getDate()->format('Y-m-d'),
                    'color'     => '#f39c12',
                    'textColor' => '#fff',
                ];
            }
        }

        return $this->json($events);
    }

    // ── SHOW ──────────────────────────────────────────────────────────────
    #[Route('/{id}', name: 'objectif_show', methods: ['GET'])]
    public function show(Objectif $objectif, GoalStatisticsService $goalStats): Response
    {
        $stats = $goalStats->compute($objectif);
        return $this->render('objectif/show.html.twig', [
            'objectif' => $objectif,
            'stats'    => $stats,
        ]);
    }

    // ── EDIT ──────────────────────────────────────────────────────────────
    #[Route('/{id}/edit', name: 'objectif_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request                $request,
        Objectif               $objectif,
        EntityManagerInterface $em
    ): Response {
        $walletId = $objectif->getWalletId();
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Objectif modifié avec succès !');
            return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
        }

        return $this->render('objectif/edit.html.twig', [
            'objectif' => $objectif,
            'form'     => $form,
        ]);
    }

    // ── DELETE ────────────────────────────────────────────────────────────
    #[Route('/{id}/delete', name: 'objectif_delete', methods: ['POST'])]
    public function delete(
        Request                $request,
        Objectif               $objectif,
        EntityManagerInterface $em,
        Connection             $connection
    ): Response {
        $walletId = $objectif->getWalletId();

        if ($this->isCsrfTokenValid('delete' . $objectif->getId(), $request->request->get('_token'))) {
            foreach ($objectif->getContributiongoals() as $contrib) {
                $connection->executeStatement(
                    'UPDATE wallet SET solde = solde + ? WHERE id = ?',
                    [$contrib->getMontant(), $walletId]
                );
            }

            $em->remove($objectif);
            $em->flush();
            $this->addFlash('success', 'Objectif supprimé et contributions remboursées dans le wallet.');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }

    // ── CONTRIBUER ────────────────────────────────────────────────────────
    #[Route('/{id}/contribuer', name: 'objectif_contribuer', methods: ['POST'])]
    public function contribuer(
        Request                $request,
        Objectif               $objectif,
        EntityManagerInterface $em,
        Connection             $connection,
        NotificationService    $notifService
    ): Response {
        $montant  = (float) $request->request->get('montant');
        $walletId = $objectif->getWalletId();

        if ($montant > 0) {
            $wallet = $connection->fetchAssociative(
                'SELECT * FROM wallet WHERE id = ?',
                [$walletId]
            );

            if (!$wallet || $wallet['solde'] < $montant) {
                $this->addFlash('error', 'Solde insuffisant dans ce wallet !');
                return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
            }

            if ($montant > $objectif->getMontant()) {
                $this->addFlash('error', sprintf(
                    'Le montant de la contribution (%.2f) ne peut pas dépasser le montant cible (%.2f) !',
                    $montant,
                    $objectif->getMontant()
                ));
                return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
            }

            $contribution = new Contributiongoal();
            $contribution->setMontant($montant);
            $contribution->setDate(new \DateTime());
            $contribution->setObjectif($objectif);
            $em->persist($contribution);

            $connection->executeStatement(
                'UPDATE wallet SET solde = solde - ? WHERE id = ?',
                [$montant, $walletId]
            );

            $totalContrib = $montant;
            foreach ($objectif->getContributiongoals() as $c) {
                $totalContrib += $c->getMontant();
            }

            $objectif->setStatut($totalContrib >= $objectif->getMontant() ? 'TERMINE' : 'EN_COURS');
            $em->flush();

            $notifService->generateForObjectifs([$objectif]);

            $this->addFlash('success', 'Contribution de ' . $montant . ' ajoutée !');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }

    // ── DELETE CONTRIBUTION ───────────────────────────────────────────────
    #[Route('/contrib/{id}/delete', name: 'contribution_delete', methods: ['POST'])]
    public function deleteContribution(
        Request                $request,
        Contributiongoal       $contribution,
        EntityManagerInterface $em,
        Connection             $connection,
        NotificationService    $notifService
    ): Response {
        $objectif = $contribution->getObjectif();
        $walletId = $objectif->getWalletId();
        $montant  = $contribution->getMontant();

        if ($this->isCsrfTokenValid('delete_contrib' . $contribution->getId(), $request->request->get('_token'))) {
            $connection->executeStatement(
                'UPDATE wallet SET solde = solde + ? WHERE id = ?',
                [$montant, $walletId]
            );

            $em->remove($contribution);
            $em->flush();

            $totalContrib = 0;
            foreach ($objectif->getContributiongoals() as $c) {
                $totalContrib += $c->getMontant();
            }
            $objectif->setStatut($totalContrib >= $objectif->getMontant() ? 'TERMINE' : 'EN_COURS');
            $em->flush();

            $notifService->generateForObjectifs([$objectif]);

            $this->addFlash('success', 'Contribution supprimée, ' . $montant . ' remboursé dans le wallet !');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }
}