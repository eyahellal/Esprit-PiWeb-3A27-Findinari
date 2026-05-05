<?php

namespace App\Controller;

use App\Entity\objective\Objectif;
use App\Entity\objective\Contributiongoal;
use App\Entity\management\Wallet;
use App\Entity\user\Utilisateur;
use App\Form\ObjectifType;
use App\Repository\ObjectifRepository;
use App\Repository\WalletRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/objective')]
class ObjectifController extends AbstractController
{
    /**
     * Récupère l'utilisateur connecté ou le crée par défaut
     */
    private function getUserOrCreate(EntityManagerInterface $entityManager): Utilisateur
    {
        $user = $this->getUser();
       
        if ($user instanceof Utilisateur) {
            return $user;
        }
       
        // Chercher un utilisateur par défaut
        $defaultUser = $entityManager->getRepository(Utilisateur::class)->find(1);
        if ($defaultUser) {
            return $defaultUser;
        }
       
        $defaultUser = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => 'admin@findinari.com']);
        if ($defaultUser) {
            return $defaultUser;
        }
       
        // Créer un utilisateur par défaut
        $newUser = new Utilisateur();
        $newUser->setNom('Admin');
        $newUser->setPrenom('User');
        $newUser->setGmail('admin@findinari.com');
        $newUser->setMdp('password');
        $newUser->setRole('ADMIN');
        $newUser->setStatut('ACTIF');
        $newUser->setDateCreation(new \DateTime());
        $newUser->setDateModification(new \DateTime());
        $newUser->setFaceEnabled(false);
       
        $entityManager->persist($newUser);
        $entityManager->flush();
       
        return $newUser;
    }

    /**
     * Récupère l'ID de l'utilisateur connecté
     */
    private function getCurrentUserId(EntityManagerInterface $entityManager): int
    {
        $user = $this->getUserOrCreate($entityManager);
        $userId = $user->getId();
       
        if ($userId === null) {
            throw new \RuntimeException('User ID cannot be null');
        }
       
        return $userId;
    }

    #[Route('/', name: 'app_objectif_index', methods: ['GET'])]
    public function index(
        ObjectifRepository $objectifRepository,
        WalletRepository $walletRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $userId = $this->getCurrentUserId($entityManager);
       
        $search = $request->query->get('search');
        $page = $request->query->getInt('page', 1);
        $limit = 6;
       
        // Récupérer les wallets de l'utilisateur
        $userWallets = $walletRepository->findBy(['utilisateur' => $userId]);
        $walletIds = [];
        foreach ($userWallets as $wallet) {
            $walletIds[] = $wallet->getId();
        }
       
        if (empty($walletIds)) {
            $objectifs = [];
            $total = 0;
            $totalPages = 1;
        } else {
            $qb = $objectifRepository->createQueryBuilder('o')
                ->where('o.walletId IN (:walletIds)')
                ->setParameter('walletIds', $walletIds);
           
            if ($search) {
                $qb->andWhere('o.titre LIKE :search')
                   ->setParameter('search', '%' . $search . '%');
            }
           
            $total = (clone $qb)->select('COUNT(o.id)')->getQuery()->getSingleScalarResult();
            $totalPages = max(1, ceil($total / $limit));
           
            if ($page < 1) $page = 1;
            if ($page > $totalPages) $page = $totalPages;
           
            $objectifs = $qb->setFirstResult(($page - 1) * $limit)
                            ->setMaxResults($limit)
                            ->getQuery()
                            ->getResult();
        }
       
        return $this->render('objective/index.html.twig', [
            'objectifs' => $objectifs,
            'search' => $search,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'total' => $total,
        ]);
    }

    #[Route('/new', name: 'app_objectif_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $userId = $this->getCurrentUserId($entityManager);
       
        $objectif = new Objectif();
       
        // Récupérer les wallets de l'utilisateur
        $walletRepository = $entityManager->getRepository(Wallet::class);
        $wallets = $walletRepository->findBy(['utilisateur' => $userId]);
       
        $form = $this->createForm(ObjectifType::class, $objectif, [
            'wallets' => $wallets
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($objectif);
            $entityManager->flush();

            $notificationService->addNotification(
                '🎯 New Financial Goal Created',
                sprintf('Goal "%s" has been created with target amount %.2f DT', $objectif->getTitre(), $objectif->getMontant()),
                'success'
            );

            $this->addFlash('success', 'Goal created successfully!');
            return $this->redirectToRoute('app_objectif_index');
        }

        return $this->render('objective/new.html.twig', [
            'objectif' => $objectif,
            'form' => $form,
            'wallets' => $wallets,
        ]);
    }

    #[Route('/{id}', name: 'app_objectif_show', methods: ['GET'])]
    public function show(
        int $id,
        ObjectifRepository $objectifRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $userId = $this->getCurrentUserId($entityManager);
       
        $objectif = $objectifRepository->find($id);
       
        if (!$objectif) {
            throw $this->createNotFoundException('Goal not found');
        }
       
        // Vérifier que l'objectif appartient à l'utilisateur
        $walletRepository = $entityManager->getRepository(Wallet::class);
        $wallet = $walletRepository->find($objectif->getWalletId());
       
        if (!$wallet || $wallet->getUtilisateur()->getId() !== $userId) {
            throw $this->createNotFoundException('Goal not found');
        }
       
        $contributions = $objectif->getContributiongoals();
        $totalContributed = 0;
        foreach ($contributions as $contribution) {
            $totalContributed += $contribution->getMontant();
        }
       
        $progress = $objectif->getMontant() > 0 ? ($totalContributed / $objectif->getMontant()) * 100 : 0;
       
        return $this->render('objective/show.html.twig', [
            'objectif' => $objectif,
            'contributions' => $contributions,
            'totalContributed' => $totalContributed,
            'progress' => round($progress, 2),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_objectif_edit', methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        Request $request,
        ObjectifRepository $objectifRepository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $userId = $this->getCurrentUserId($entityManager);
       
        $objectif = $objectifRepository->find($id);
       
        if (!$objectif) {
            throw $this->createNotFoundException('Goal not found');
        }
       
        // Vérifier que l'objectif appartient à l'utilisateur
        $walletRepository = $entityManager->getRepository(Wallet::class);
        $wallet = $walletRepository->find($objectif->getWalletId());
       
        if (!$wallet || $wallet->getUtilisateur()->getId() !== $userId) {
            throw $this->createNotFoundException('Goal not found');
        }
       
        $wallets = $walletRepository->findBy(['utilisateur' => $userId]);
       
        $form = $this->createForm(ObjectifType::class, $objectif, [
            'wallets' => $wallets
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
           
            $notificationService->addNotification(
                '✏️ Financial Goal Updated',
                sprintf('Goal "%s" has been updated', $objectif->getTitre()),
                'info'
            );
           
            $this->addFlash('success', 'Goal updated successfully!');
            return $this->redirectToRoute('app_objectif_index');
        }

        return $this->render('objective/edit.html.twig', [
            'objectif' => $objectif,
            'form' => $form,
            'wallets' => $wallets,
        ]);
    }

    #[Route('/{id}', name: 'app_objectif_delete', methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        ObjectifRepository $objectifRepository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $userId = $this->getCurrentUserId($entityManager);
       
        $objectif = $objectifRepository->find($id);
       
        if (!$objectif) {
            throw $this->createNotFoundException('Goal not found');
        }
       
        // Vérifier que l'objectif appartient à l'utilisateur
        $walletRepository = $entityManager->getRepository(Wallet::class);
        $wallet = $walletRepository->find($objectif->getWalletId());
       
        if (!$wallet || $wallet->getUtilisateur()->getId() !== $userId) {
            throw $this->createNotFoundException('Goal not found');
        }
       
        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), $request->request->get('_token'))) {
            $entityManager->remove($objectif);
            $entityManager->flush();
           
            $notificationService->addNotification(
                '🗑️ Financial Goal Deleted',
                sprintf('Goal "%s" has been deleted', $objectif->getTitre()),
                'danger'
            );
           
            $this->addFlash('success', 'Goal deleted successfully!');
        }

        return $this->redirectToRoute('app_objectif_index');
    }

    #[Route('/contribute/{id}', name: 'app_objectif_contribute', methods: ['POST'])]
    public function contribute(
        int $id,
        Request $request,
        ObjectifRepository $objectifRepository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): JsonResponse {
        $userId = $this->getCurrentUserId($entityManager);
       
        $data = json_decode($request->getContent(), true);
        $amount = $data['amount'] ?? 0;
       
        if ($amount <= 0) {
            return $this->json(['success' => false, 'error' => 'Amount must be greater than 0'], 400);
        }
       
        $objectif = $objectifRepository->find($id);
       
        if (!$objectif) {
            return $this->json(['success' => false, 'error' => 'Goal not found'], 404);
        }
       
        // Vérifier que l'objectif appartient à l'utilisateur
        $walletRepository = $entityManager->getRepository(Wallet::class);
        $wallet = $walletRepository->find($objectif->getWalletId());
       
        if (!$wallet || $wallet->getUtilisateur()->getId() !== $userId) {
            return $this->json(['success' => false, 'error' => 'Goal not found'], 404);
        }
       
        // Créer la contribution
        $contribution = new Contributiongoal();
        $contribution->setObjectif($objectif);
        $contribution->setMontant($amount);
        $contribution->setDate(new \DateTime());
       
        $entityManager->persist($contribution);
        $entityManager->flush();
       
        // Calculer la progression
        $totalContributed = 0;
        foreach ($objectif->getContributiongoals() as $contributionGoal) {
            $totalContributed += $contributionGoal->getMontant();
        }
       
        $progress = $objectif->getMontant() > 0 ? ($totalContributed / $objectif->getMontant()) * 100 : 0;
       
        $notificationService->addNotification(
            '💰 Contribution Added',
            sprintf('You contributed %.2f DT to goal "%s"', $amount, $objectif->getTitre()),
            'success'
        );
       
        return $this->json([
            'success' => true,
            'message' => 'Contribution added successfully',
            'totalContributed' => $totalContributed,
            'progress' => round($progress, 2),
            'remaining' => $objectif->getMontant() - $totalContributed
        ]);
    }
}