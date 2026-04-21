<?php

namespace App\Controller;

use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Entity\Objectif;
use App\Entity\user\Feedback;
use App\Repository\UtilisateurRepository;
use App\Repository\FeedbackRepository;
use App\Repository\WalletRepository;
use App\Service\GoalStatisticsService;
use App\Repository\ObjectifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;
use App\Service\AnomalyDetectorService;
class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function dashboard(
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        FeedbackRepository $feedbackRepository,
        ObjectifRepository $objectifRepo
    ): Response {
        $q = trim((string) $request->query->get('q', ''));
        $sort = trim((string) $request->query->get('sort', 'name_asc'));

        $qb = $utilisateurRepository->createQueryBuilder('u');

        if ($q !== '') {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q')
               ->setParameter('q', '%' . $q . '%');
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
        $objectifs = $objectifRepo->findAll();

        $adminCount = 0;
        $userCount = 0;
        $influencerCount = 0;

        foreach ($allUsers as $u) {
            if ($u->getRole() === 'ADMIN') {
                $adminCount++;
            } elseif ($u->getRole() === 'INFLUENCER') {
                $influencerCount++;
            } else {
                $userCount++;
            }
        }

        return $this->render('admin/dashboard.html.twig', [
            'users'              => $users,
            'feedbacks'          => $feedbacks,
            'totalUsers'         => count($allUsers),
            'filteredUsersCount' => count($users),
            'totalFeedbacks'     => count($feedbacks),
            'objectifs'          => $objectifs,
            'adminCount'         => $adminCount,
            'userCount'          => $userCount,
            'influencerCount'    => $influencerCount,
            'search'             => $q,
            'sort'               => $sort,
        ]);
    }

    #[Route('/admin/user/{id}/delete', name: 'app_admin_user_delete', methods: ['POST'])]
    public function deleteUser(
        Utilisateur $utilisateur,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete_user_' . $utilisateur->getId(), $request->request->get('_token'))) {
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

    #[Route('/admin/create-admin', name: 'app_admin_create_admin', methods: ['POST'])]
    public function createAdmin(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $nom      = trim((string) $request->request->get('nom'));
        $prenom   = trim((string) $request->request->get('prenom'));
        $gmail    = trim((string) $request->request->get('gmail'));
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
        if ($this->isCsrfTokenValid('delete_feedback_admin_' . $feedback->getId(), $request->request->get('_token'))) {
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
        WalletRepository $walletRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/wallets.html.twig', [
            'wallets' => $walletRepository->findAll(),
        ]);
    }

    #[Route('/admin/wallet/{id}/delete', name: 'app_admin_wallet_delete', methods: ['POST'])]
    public function deleteWalletAdmin(
        Wallet $wallet,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete_wallet_admin_' . $wallet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($wallet);
            $entityManager->flush();

            $this->addFlash('success', 'Wallet deleted successfully.');
        } else {
            $this->addFlash('danger', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('app_admin_wallets');
    }

// app/Controller/AdminController.php

#[Route('/admin/objectifs', name: 'app_admin_objectifs')]
public function objectifs(
    ObjectifRepository $objectifRepository,
    WalletRepository $walletRepository,
    UtilisateurRepository $utilisateurRepository,  // ← ajouter
    Request $request,
    AnomalyDetectorService $anomalyDetector
): Response {
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $filterWalletId = $request->query->get('wallet_id');
    $filterStatut   = $request->query->get('status');
    $searchObjectif = trim((string) $request->query->get('q', ''));

    $wallets = [];
    foreach ($walletRepository->findAll() as $w) {
        $wallets[$w->getId()] = [
            'pays'   => $w->getPays(),
            'devise' => $w->getDevise(),
            'solde'  => $w->getSolde(),
        ];
    }

    $criteria = [];
    if ($filterWalletId) $criteria['walletId'] = (int) $filterWalletId;
    if ($filterStatut)   $criteria['statut']   = $filterStatut;

    $objectifs = $objectifRepository->findBy($criteria);

    if ($searchObjectif !== '') {
        $objectifs = array_values(array_filter(
            $objectifs,
            fn($o) => str_contains(strtolower($o->getTitre()), strtolower($searchObjectif))
        ));
    }

    // ── AI Anomaly Detector ──
    $anomalies = null;
    $stats     = null;

    if ($request->isMethod('POST')) {
        // Construire un map walletId → utilisateur
        $walletUserMap = [];
        foreach ($walletRepository->findAll() as $w) {
            // Si Wallet a une relation vers Utilisateur
            $user = $w->getUtilisateur(); // adapte selon ton getter
            if ($user) {
                $walletUserMap[$w->getId()] = [
                    'nom'    => $user->getNom() . ' ' . $user->getPrenom(),
                    'pays'   => $w->getPays(),
                ];
            } else {
                $walletUserMap[$w->getId()] = [
                    'nom'  => 'Inconnu',
                    'pays' => $w->getPays() ?? '—',
                ];
            }
        }

        $allContributions = [];
        foreach ($objectifRepository->findAll() as $obj) {
            $walletId   = $obj->getWalletId();
            $userInfo   = $walletUserMap[$walletId] ?? ['nom' => 'Inconnu', 'pays' => '—'];

            foreach ($obj->getContributiongoals() as $c) {
                $allContributions[] = [
                    'objectif_id'    => $obj->getId(),
                    'objectif_titre' => $obj->getTitre(),
                    'wallet_id'      => $walletId,
                    'user_nom'       => $userInfo['nom'],   // ← nouveau
                    'user_pays'      => $userInfo['pays'],  // ← nouveau
                    'montant'        => $c->getMontant(),
                    'date'           => $c->getDate()?->format('Y-m-d'),
                ];
            }
        }

        if (!empty($allContributions)) {
            $anomalies = $anomalyDetector->detect($allContributions);
            $montants  = array_column($allContributions, 'montant');
            $stats = [
                'total_contributions' => count($allContributions),
                'total_anomalies'     => count($anomalies),
                'eleve'  => count(array_filter($anomalies, fn($a) => in_array(strtoupper($a['niveau_risque']), ['ÉLEVÉ','ELEVE']))),
                'moyen'  => count(array_filter($anomalies, fn($a) => strtoupper($a['niveau_risque']) === 'MOYEN')),
                'moyenne'=> count($montants) > 0 ? array_sum($montants) / count($montants) : 0,
            ];
        } else {
            $anomalies = [];
            $stats = ['total_contributions' => 0, 'total_anomalies' => 0, 'eleve' => 0, 'moyen' => 0, 'moyenne' => 0];
        }
    }

    return $this->render('admin/objectifs.html.twig', [
        'objectifs'      => $objectifs,
        'wallets'        => $wallets,
        'filterWalletId' => $filterWalletId,
        'filterStatut'   => $filterStatut,
        'searchObjectif' => $searchObjectif,
        'anomalies'      => $anomalies,
        'stats'          => $stats,
    ]);
}

    #[Route('/admin/tickets', name: 'app_admin_tickets')]
    public function tickets(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/tickets.html.twig');
    }
}