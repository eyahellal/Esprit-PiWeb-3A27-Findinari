<?php

namespace App\Controller;

use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Entity\Objectif;
use App\Entity\user\Feedback;
use App\Repository\UtilisateurRepository;
use App\Repository\FeedbackRepository;
use App\Repository\WalletRepository;

use App\Repository\ObjectifRepository;
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
            'users' => $users,
            'feedbacks' => $feedbacks,
            'totalUsers' => count($allUsers),
            'filteredUsersCount' => count($users),
            'totalFeedbacks' => count($feedbacks),
            'objectifs' => $objectifs,
            'adminCount' => $adminCount,
            'userCount' => $userCount,
            'influencerCount' => $influencerCount,
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
        $nom = trim((string) $request->request->get('nom'));
        $prenom = trim((string) $request->request->get('prenom'));
        $gmail = trim((string) $request->request->get('gmail'));
        $password = (string) $request->request->get('password');

        if (!$nom || !$prenom || !$gmail || !$password) {
            $this->addFlash('danger', 'All admin fields are required.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        $existing = $entityManager->getRepository(Utilisateur::class)->findOneBy([
            'gmail' => $gmail
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
    #[Route('/admin/objectifs', name: 'app_admin_objectifs')]
public function objectifs(
    ObjectifRepository $objectifRepository,
    WalletRepository $walletRepository,
    Request $request
): Response {
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $selectedWalletId = $request->query->get('wallet_id');

    // Construire le tableau wallets [id => [pays, devise, solde]]
    $wallets = [];
    foreach ($walletRepository->findAll() as $w) {
        $wallets[$w->getId()] = [
            'pays'   => $w->getPays(),
            'devise' => $w->getDevise(),
            'solde'  => $w->getSolde(),
        ];
    }

    // Filtrer les objectifs par wallet si sélectionné
    if ($selectedWalletId) {
        $objectifs = $objectifRepository->findBy(['walletId' => (int) $selectedWalletId]);
    } else {
        $objectifs = $objectifRepository->findAll();
    }

    return $this->render('admin/objectifs.html.twig', [
        'objectifs'        => $objectifs,
        'wallets'          => $wallets,
        'selectedWalletId' => $selectedWalletId,
    ]);
}
}
