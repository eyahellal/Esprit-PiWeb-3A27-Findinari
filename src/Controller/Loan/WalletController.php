<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Wallet;
use App\Form\WalletType;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/wallet')]
class WalletController extends AbstractController
{
    #[Route('/', name: 'app_wallet_index', methods: ['GET'])]
    public function index(WalletRepository $repository, Request $request): Response
    {
        $search = $request->query->get('search');
        
        if ($search) {
            $wallets = $repository->createQueryBuilder('w')
                ->where('w.pays LIKE :search')
                ->orWhere('w.devise LIKE :search')
                ->setParameter('search', '%' . $search . '%')
                ->getQuery()
                ->getResult();
        } else {
            $wallets = $repository->findAll();
        }

        return $this->render('loan/wallet/index.html.twig', [
            'wallets' => $wallets,
            'search' => $search,
        ]);
    }

    #[Route('/new', name: 'app_wallet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $wallet = new Wallet();
        $form = $this->createForm(WalletType::class, $wallet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($wallet);
            $entityManager->flush();

            $this->addFlash('success', 'Wallet created successfully!');
            return $this->redirectToRoute('app_wallet_index');
        }

        return $this->render('loan/wallet/new.html.twig', [
            'wallet' => $wallet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_wallet_show', methods: ['GET'])]
    public function show(int $id, WalletRepository $repository): Response
    {
        $wallet = $repository->find($id);
        
        if (!$wallet) {
            throw $this->createNotFoundException('Wallet not found');
        }
        
        return $this->render('loan/wallet/show.html.twig', [
            'wallet' => $wallet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_wallet_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request, WalletRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $wallet = $repository->find($id);
        
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
    public function delete(int $id, Request $request, WalletRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $wallet = $repository->find($id);
        
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