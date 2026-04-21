<?php

namespace App\Controller\Loan;

use App\Entity\management\Wallet;
use App\form\WalletType;
use App\Entity\user\Utilisateur;
use App\Repository\WalletRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/wallet')]
class WalletController extends AbstractController
{
    private function getUserOrCreate(EntityManagerInterface $entityManager): Utilisateur
    {
        $user = $this->getUser();
        
        if (!$user) {
            $user = $entityManager->getRepository(Utilisateur::class)->find(1);
        }
        
        if (!$user) {
            $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => 'admin@findinari.com']);
        }
        
        if (!$user) {
            $user = new Utilisateur();
            $user->setNom('Admin');
            $user->setPrenom('User');
            $user->setGmail('admin@findinari.com');
            $user->setMdp('password');
            $user->setRole('ADMIN');
            $user->setStatut('ACTIF');
            $user->setDateCreation(new \DateTime());
            $user->setDateModification(new \DateTime());
            $user->setFaceEnabled(false);
            $entityManager->persist($user);
            $entityManager->flush();
        }
        
        return $user;
    }

    #[Route('/', name: 'app_wallet_index', methods: ['GET'])]
    public function index(WalletRepository $repository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $search = $request->query->get('search');
        $user = $this->getUserOrCreate($entityManager);
        
        $qb = $repository->createQueryBuilder('w')
            ->where('w.utilisateur = :user')
            ->setParameter('user', $user);
        
        if ($search) {
            $qb->andWhere('w.pays LIKE :search OR w.devise LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        $wallets = $qb->getQuery()->getResult();

        return $this->render('loan/wallet/index.html.twig', [
            'wallets' => $wallets,
            'search' => $search,
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

            // Add notification
            $notificationService->addNotification(
                '💳 New Wallet Created',
                sprintf('New wallet in %s with balance %.2f %s', $wallet->getPays(), $wallet->getSolde(), $wallet->getDevise()),
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
        
        if (!$wallet) {
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
        
        if (!$wallet) {
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
        
        if (!$wallet) {
            throw $this->createNotFoundException('Wallet not found');
        }
        
        if ($this->isCsrfTokenValid('delete'.$wallet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($wallet);
            $entityManager->flush();
            $this->addFlash('success', 'Wallet deleted successfully!');
        }

        return $this->redirectToRoute('app_wallet_index');
    }
}