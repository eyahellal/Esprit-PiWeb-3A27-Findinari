<?php
namespace App\Controller;

use App\Entity\objective\Objectif;
use App\Entity\objective\Contributiongoal;
use App\Form\ObjectifType;
use App\Repository\ObjectifRepository;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\GoalStatisticsService;
use App\Repository\UtilisateurRepository;
#[Route('/objectif')]
class ObjectifController extends AbstractController
{
    #[Route('', name: 'objectif_index', methods: ['GET'])]
    public function index(ObjectifRepository $repo, Connection $connection, Request $request): Response
    {
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

        return $this->render('objectif/index.html.twig', [
            'objectifs'        => $objectifs,
            'wallets'          => $wallets,
            'selectedWalletId' => $selectedWalletId,
        ]);
    }

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

    // ⚠️ DOIT être AVANT /{id} sinon Symfony intercepte "top-contributions" comme un {id}
   #[Route('/top-contributions', name: 'top_contributions', methods: ['GET'])]
public function topContributions(
    ObjectifRepository $objectifRepo,
    GoalStatisticsService $goalStats,
    Connection $connection,
    UtilisateurRepository $utilisateurRepository
): Response {
    $user = $this->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException('Vous devez être connecté.');
    }

    // Récupérer tous les objectifs
    $objectifs = $objectifRepo->findAll();

    // Récupérer tous les utilisateurs (id => nom)
    $users = [];
    foreach ($utilisateurRepository->findAll() as $u) {
        $users[$u->getId()] = [
            'nom'  => $u->getPrenom() . ' ' . $u->getNom(),
            'pays' => null, // sera rempli plus tard
        ];
    }

    // Récupérer tous les wallets (id, utilisateur_id, pays)
    $walletsData = $connection->fetchAllAssociative('SELECT id, utilisateur_id, pays FROM wallet');
    $walletToUser = [];
    $userPays = []; // pour stocker un pays par utilisateur (le premier rencontré)
    foreach ($walletsData as $w) {
        $wid = $w['id'];
        $uid = $w['utilisateur_id'];
        $walletToUser[$wid] = $uid;
        // Si l'utilisateur n'a pas encore de pays, on lui attribue celui de ce wallet
        if ($uid && !isset($userPays[$uid])) {
            $userPays[$uid] = $w['pays'] ?: '—';
        }
    }

    // Appliquer le pays aux utilisateurs
    foreach ($users as $uid => &$info) {
        $info['pays'] = $userPays[$uid] ?? '—';
    }

    // Grouper par utilisateur
    $byUser = [];
    foreach ($objectifs as $objectif) {
        $wid = $objectif->getWalletId();
        $uid = $walletToUser[$wid] ?? null;
        if (!$uid || !isset($users[$uid])) {
            continue;
        }

        $stats = $goalStats->compute($objectif);
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
            $byUser[$uid]['objectifsAtteints'][] = [
                'objectif' => $objectif,
                'stats'    => $stats,
            ];
        } else {
            $byUser[$uid]['objectifsEnCours'][] = [
                'objectif' => $objectif,
                'stats'    => $stats,
            ];
        }
    }

    // Trier : d'abord par nombre d'objectifs atteints, puis par montant total collecté
    usort($byUser, function ($a, $b) {
        $diff = count($b['objectifsAtteints']) - count($a['objectifsAtteints']);
        if ($diff !== 0) return $diff;
        $totalA = array_sum(array_column($a['objectifsAtteints'], 'stats.totalCollected'));
        $totalB = array_sum(array_column($b['objectifsAtteints'], 'stats.totalCollected'));
        return $totalB <=> $totalA;
    });

    return $this->render('objectif/top_contributions.twig', [
        'byUser' => $byUser,
    ]);
}
    // ⚠️ /{id} doit toujours être en DERNIER parmi les routes GET
    #[Route('/{id}', name: 'objectif_show', methods: ['GET'])]
    public function show(Objectif $objectif, GoalStatisticsService $goalStats): Response
    {
        return $this->render('objectif/show.html.twig', [
            'objectif' => $objectif,
            'stats'    => $goalStats->compute($objectif),
        ]);
    }

    #[Route('/{id}/edit', name: 'objectif_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Objectif $objectif, EntityManagerInterface $em): Response
    {
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
    public function delete(Request $request, Objectif $objectif, EntityManagerInterface $em, Connection $connection): Response
    {
        $walletId = $objectif->getWalletId();

        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), $request->request->get('_token'))) {
            foreach ($objectif->getContributiongoals() as $contrib) {
                $montant = $contrib->getMontant();
                $connection->executeStatement(
                    'UPDATE wallet SET solde = solde + ? WHERE id = ?',
                    [$montant, $walletId]
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
        Request $request,
        Objectif $objectif,
        EntityManagerInterface $em,
        Connection $connection
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
                    'Le montant de la contribution (%.2f) ne peut pas dépasser le montant cible de l\'objectif (%.2f) !',
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

            $totalContrib = 0;
            foreach ($objectif->getContributiongoals() as $c) {
                $totalContrib += $c->getMontant();
            }
            $totalContrib += $montant;

            $objectif->setStatut($totalContrib >= $objectif->getMontant() ? 'TERMINE' : 'EN_COURS');
            $em->flush();

            $this->addFlash('success', 'Contribution de ' . $montant . ' ajoutée !');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }

    #[Route('/contrib/{id}/delete', name: 'contribution_delete', methods: ['POST'])]
    public function deleteContribution(
        Request $request,
        Contributiongoal $contribution,
        EntityManagerInterface $em,
        Connection $connection
    ): Response {
        $objectif = $contribution->getObjectif();
        $walletId = $objectif->getWalletId();
        $montant  = $contribution->getMontant();

        if ($this->isCsrfTokenValid('delete_contrib'.$contribution->getId(), $request->request->get('_token'))) {
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

            $this->addFlash('success', 'Contribution supprimée, ' . $montant . ' remboursé dans le wallet !');
        }

        return $this->redirectToRoute('objectif_index', ['wallet_id' => $walletId]);
    }
}