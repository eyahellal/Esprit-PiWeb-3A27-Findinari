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
        ObjectifRepository  $repo,
        Connection          $connection,
        Request             $request,
        NotificationService $notifService
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

        if ($selectedWalletId) {
            $objectifs = $repo->findBy(['walletId' => $selectedWalletId]);
        } else {
            $walletIds = array_keys($wallets);
            $objectifs = $walletIds ? $repo->findBy(['walletId' => $walletIds]) : [];
        }

        // ── Génère / rafraîchit les notifications en session ──
        $notifService->generateForObjectifs($objectifs);

        return $this->render('objectif/index.html.twig', [
            'objectifs'        => $objectifs,
            'wallets'          => $wallets,
            'selectedWalletId' => $selectedWalletId,
            'notifCount'       => $notifService->countUnread(),
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

    // ── STATIC ROUTES BEFORE /{id} ────────────────────────────────────────

    // ── NOTIFICATIONS : liste (AJAX) ──────────────────────────────────────
    #[Route('/notifications', name: 'notifications_list', methods: ['GET'])]
    public function notificationsList(NotificationService $notifService): JsonResponse
    {
        return $this->json($notifService->getUnread());
    }

    // ── NOTIFICATIONS : marquer une lue (AJAX) ────────────────────────────
    #[Route('/notifications/read-all', name: 'notifications_read_all', methods: ['POST'])]
    public function notificationsReadAll(NotificationService $notifService): JsonResponse
    {
        $notifService->markAllRead();
        return $this->json(['ok' => true]);
    }

    // ── NOTIFICATIONS : marquer une lue par clé (AJAX) ───────────────────
    // DOIT être APRÈS /notifications/read-all pour éviter que {key}="read-all"
    #[Route('/notifications/{key}/read', name: 'notification_mark_read', methods: ['POST'])]
    public function notificationMarkRead(
        string              $key,
        NotificationService $notifService
    ): JsonResponse {
        $notifService->markRead($key);
        return $this->json(['ok' => true]);
    }

    // ── TOP CONTRIBUTIONS ─────────────────────────────────────────────────
    #[Route('/top-contributions', name: 'top_contributions', methods: ['GET'])]
    public function topContributions(
        ObjectifRepository    $objectifRepo,
        GoalStatisticsService $goalStats,
        Connection            $connection,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté.');
        }

        $objectifs = $objectifRepo->findAll();

        $users = [];
        foreach ($utilisateurRepository->findAll() as $u) {
            $users[$u->getId()] = [
                'nom'  => $u->getPrenom() . ' ' . $u->getNom(),
                'pays' => null,
            ];
        }

        $walletsData  = $connection->fetchAllAssociative('SELECT id, utilisateur_id, pays FROM wallet');
        $walletToUser = [];
        $userPays     = [];
        foreach ($walletsData as $w) {
            $walletToUser[$w['id']] = $w['utilisateur_id'];
            if ($w['utilisateur_id'] && !isset($userPays[$w['utilisateur_id']])) {
                $userPays[$w['utilisateur_id']] = $w['pays'] ?: '—';
            }
        }

        foreach ($users as $uid => &$info) {
            $info['pays'] = $userPays[$uid] ?? '—';
        }
        unset($info);

        $byUser = [];
        foreach ($objectifs as $objectif) {
            $wid = $objectif->getWalletId();
            $uid = $walletToUser[$wid] ?? null;
            if (!$uid || !isset($users[$uid])) {
                continue;
            }

            $stats    = $goalStats->compute($objectif);
            $userInfo = $users[$uid];

            if (!isset($byUser[$uid])) {
                $byUser[$uid] = [
                    'userName'          => $userInfo['nom'],
                    'pays'              => $userInfo['pays'],
                    'objectifsAtteints' => [],
                    'objectifsEnCours'  => [],
                ];
            }

            if ($stats['progressPct'] >= 100) {
                $byUser[$uid]['objectifsAtteints'][] = ['objectif' => $objectif, 'stats' => $stats];
            } else {
                $byUser[$uid]['objectifsEnCours'][]  = ['objectif' => $objectif, 'stats' => $stats];
            }
        }

        usort($byUser, function ($a, $b) {
            $diff = count($b['objectifsAtteints']) - count($a['objectifsAtteints']);
            if ($diff !== 0) return $diff;
            $totalA = array_sum(array_map(fn($item) => $item['stats']['totalCollected'], $a['objectifsAtteints']));
            $totalB = array_sum(array_map(fn($item) => $item['stats']['totalCollected'], $b['objectifsAtteints']));
            return $totalB <=> $totalA;
        });

        return $this->render('objectif/top_contributions.twig', [
            'byUser' => $byUser,
        ]);
    }

    // ── HISTORIQUE ────────────────────────────────────────────────────────
    #[Route('/historique', name: 'objectif_historique', methods: ['GET'])]
    public function historique(
        ObjectifRepository    $repo,
        GoalStatisticsService $goalStats,
        Connection            $connection,
        Request               $request,
        NotificationService   $notifService
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

        // Rafraîchir les notifications depuis la page historique aussi
        $notifService->generateForObjectifs($objectifs);

        return $this->render('objectif/historique.html.twig', [
            'historique' => $historique,
            'enCours'    => $enCours,
            'notifCount' => $notifService->countUnread(),
        ]);
    }

    // ── SIMULER (AI Advisor) ──────────────────────────────────────────────
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

    // ── /{id} ROUTES EN DERNIER ───────────────────────────────────────────

    #[Route('/{id}', name: 'objectif_show', methods: ['GET'])]
    public function show(Objectif $objectif, GoalStatisticsService $goalStats): Response
    {
        return $this->render('objectif/show.html.twig', [
            'objectif' => $objectif,
            'stats'    => $goalStats->compute($objectif),
        ]);
    }

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

            // ── Régénérer les notifications après la contribution ──
            $notifService->generateForObjectifs([$objectif]);

            $this->addFlash('success', 'Contribution de ' . $montant . ' ajoutée !');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }

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

            // ── Régénérer après suppression de contribution ──
            $notifService->generateForObjectifs([$objectif]);

            $this->addFlash('success', 'Contribution supprimée, ' . $montant . ' remboursé dans le wallet !');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }
}