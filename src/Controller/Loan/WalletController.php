<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Wallet;
use App\Form\WalletType;
use App\Entity\user\Utilisateur;
use App\Repository\WalletRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/wallet')]
class WalletController extends AbstractController
{
    private function getUserOrCreate(EntityManagerInterface $entityManager): Utilisateur
    {
        $user = $this->getUser();

        if ($user instanceof Utilisateur) {
            return $user;
        }

        $defaultUser = $entityManager->getRepository(Utilisateur::class)->find(1);
        if ($defaultUser instanceof Utilisateur) {
            return $defaultUser;
        }

        $defaultUser = $entityManager->getRepository(Utilisateur::class)
            ->findOneBy(['gmail' => 'admin@findinari.com']);
        if ($defaultUser instanceof Utilisateur) {
            return $defaultUser;
        }

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

    #[Route('/', name: 'app_wallet_index', methods: ['GET'])]
    public function index(WalletRepository $repository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $search = $request->query->get('search');
        $page   = $request->query->getInt('page', 1);
        $limit  = 6;
        $user   = $this->getUserOrCreate($entityManager);

        $qb = $repository->createQueryBuilder('w')
            ->where('w.utilisateur = :user')
            ->setParameter('user', $user);

        if ($search) {
            $qb->andWhere('w.pays LIKE :search OR w.devise LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $total = (int) (clone $qb)->select('COUNT(w.id)')->getQuery()->getSingleScalarResult();
        $totalPages = max(1, (int) ceil($total / $limit));

        $currentPage = max(1, min($page, $totalPages));

        $wallets = $qb->setFirstResult((int)(($currentPage - 1) * $limit))
                      ->setMaxResults($limit)
                      ->getQuery()
                      ->getResult();

        return $this->render('loan/wallet/index.html.twig', [
            'wallets'     => $wallets,
            'search'      => $search,
            'currentPage' => $currentPage,
            'totalPages'  => $totalPages,
            'total'       => $total,
        ]);
    }

    #[Route('/new', name: 'app_wallet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SimpleNotificationService $notificationService): Response
    {
        $wallet = new Wallet();
        $user = $this->getUserOrCreate($entityManager);
        $wallet->setUtilisateur($user);
        
        $form = $this->createForm(WalletType::class, $wallet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($wallet);
            $entityManager->flush();

            $notificationService->addNotification(
                '💳 New Wallet Created',
                sprintf('New wallet in %s with balance %.2f %s', $wallet->getPays(), $wallet->getSolde() ?? 0, $wallet->getDevise()),
                'success'
            );

            $this->addFlash('success', 'Wallet created successfully!');
            return $this->redirectToRoute('app_wallet_index');
        }

        return $this->render('loan/wallet/new.html.twig', [
            'wallet' => $wallet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_wallet_show', methods: ['GET'])]
    public function show(string $id, WalletRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUserOrCreate($entityManager);
        $wallet = $repository->findOneBy(['id' => $id, 'utilisateur' => $user]);
        
        if (!$wallet instanceof Wallet) {
            throw $this->createNotFoundException('Wallet not found');
        }
        
        return $this->render('loan/wallet/show.html.twig', [
            'wallet' => $wallet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_wallet_edit', methods: ['GET', 'POST'])]
    public function edit(string $id, Request $request, WalletRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUserOrCreate($entityManager);
        $wallet = $repository->findOneBy(['id' => $id, 'utilisateur' => $user]);
        
        if (!$wallet instanceof Wallet) {
            throw $this->createNotFoundException('Wallet not found');
        }
        
        $form = $this->createForm(WalletType::class, $wallet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Wallet updated successfully!');
            return $this->redirectToRoute('app_wallet_index');
        }

        return $this->render('loan/wallet/edit.html.twig', [
            'wallet' => $wallet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_wallet_delete', methods: ['POST'])]
    public function delete(string $id, Request $request, WalletRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUserOrCreate($entityManager);
        $wallet = $repository->findOneBy(['id' => $id, 'utilisateur' => $user]);

        if (!$wallet instanceof Wallet) {
            throw $this->createNotFoundException('Wallet not found');
        }

        $token = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $wallet->getId(), $token !== null ? (string)$token : '')) {
            $entityManager->remove($wallet);
            $entityManager->flush();
            $this->addFlash('success', 'Wallet deleted successfully!');
        }

        return $this->redirectToRoute('app_wallet_index');
    }

    // ==============================================
    // API ROUTE FOR FRIEND LOAN
    // ==============================================
    
    #[Route('/api/list', name: 'app_wallet_api_list', methods: ['GET'])]
    public function getWalletsList(WalletRepository $walletRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUserOrCreate($entityManager);
        $wallets = $walletRepository->findBy(['utilisateur' => $user]);
        
        $results = [];
        foreach ($wallets as $wallet) {
            $results[] = [
                'id' => $wallet->getId(),
                'country' => $wallet->getPays(),
                'balance' => (float)($wallet->getSolde() ?? 0),
                'currency' => $wallet->getDevise()
            ];
        }
        
        return $this->json(['wallets' => $results]);
    }
}