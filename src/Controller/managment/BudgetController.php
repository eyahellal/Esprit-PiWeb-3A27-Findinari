<?php

namespace App\Controller\managment;
use App\Entity\user\Utilisateur;
use App\Entity\management\Budget;
use App\Repository\BudgetRepository;
use App\Repository\CategorieRepository;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/budget')]
class BudgetController extends AbstractController
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

#[Route('/', name: 'app_budget_index', methods: ['GET'])]
public function index(Request $request, EntityManagerInterface $entityManager): Response
{
    $user = $this->getUserOrCreate($entityManager);

    // First get all wallet IDs of the current user
    $wallets = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
        ->findBy(['utilisateur' => $user]);

    // Then get all budgets that belong to those wallets
    $budgets = [];
    if (!empty($wallets)) {
        $budgets = $entityManager->getRepository(\App\Entity\management\Budget::class)
            ->createQueryBuilder('b')
            ->where('b.wallet IN (:wallets)')
            ->setParameter('wallets', $wallets)
            ->getQuery()
            ->getResult();
    }

    return $this->render('management/budget/index.html.twig', [
        'budgets' => $budgets,
    ]);
}
    #[Route('/new/step1', name: 'app_budget_new_step1', methods: ['GET', 'POST'])]
public function step1(Request $request, WalletRepository $walletRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
{
    $user = $this->getUserOrCreate($entityManager);

    if ($request->isMethod('POST')) {
        $walletId = $request->request->get('wallet_id');
        if ($walletId) {
            // Verify the wallet belongs to the current user
            $wallet = $walletRepository->findOneBy([
                'id' => $walletId,
                'utilisateur' => $user
            ]);
            if ($wallet) {
                $session->set('budget_wallet_id', $walletId);
                return $this->redirectToRoute('app_budget_new_step2');
            }
        }
    }

    // Fetch ONLY wallets of the current user
    $wallets = $walletRepository->findBy(['utilisateur' => $user]);

    return $this->render('management/budget/step1.html.twig', [
        'wallets' => $wallets,
    ]);
}

    #[Route('/new/step2', name: 'app_budget_new_step2', methods: ['GET', 'POST'])]
    public function step2(Request $request, CategorieRepository $categorieRepository, SessionInterface $session): Response
    {
        if (!$session->get('budget_wallet_id')) {
            return $this->redirectToRoute('app_budget_new_step1');
        }

        if ($request->isMethod('POST')) {
            $categorieId = $request->request->get('categorie_id');
            if ($categorieId) {
                $session->set('budget_categorie_id', $categorieId);
                return $this->redirectToRoute('app_budget_new_step3');
            }
        }

        // Only fetch ACTIVE categories
        $categories = $categorieRepository->findBy(['statut' => 'Active']);

        return $this->render('management/budget/step2.html.twig', [
            'categories' => $categories,
            'wallet_id' => $session->get('budget_wallet_id'),
        ]);
    }

    #[Route('/new/step3', name: 'app_budget_new_step3', methods: ['GET', 'POST'])]
    public function step3(
        Request $request,
        SessionInterface $session,
        EntityManagerInterface $entityManager,
        WalletRepository $walletRepository,
        CategorieRepository $categorieRepository
    ): Response {
        if (!$session->get('budget_wallet_id') || !$session->get('budget_categorie_id')) {
            return $this->redirectToRoute('app_budget_new_step1');
        }

        $wallet = $walletRepository->find($session->get('budget_wallet_id'));
        $categorie = $categorieRepository->find($session->get('budget_categorie_id'));

        if ($request->isMethod('POST')) {
            $budget = new Budget();
            $budget->setWallet($wallet);
            $budget->setCategorie($categorie);
            $budget->setMontantMax((float) $request->request->get('montantMax'));
            $budget->setDureeBudget((int) $request->request->get('dureeBudget'));
            $budget->setDateBudget(new \DateTime($request->request->get('dateBudget')));

            $entityManager->persist($budget);
            $entityManager->flush();

            // Clear session
            $session->remove('budget_wallet_id');
            $session->remove('budget_categorie_id');

            $this->addFlash('success', 'Budget created successfully!');
            return $this->redirectToRoute('app_budget_index');
        }

        return $this->render('management/budget/step3.html.twig', [
            'wallet' => $wallet,
            'categorie' => $categorie,
        ]);
    }
#[Route('/{id}/edit', name: 'app_budget_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Budget $budget, EntityManagerInterface $entityManager): Response
{
    if ($request->isMethod('POST')) {
        $budget->setMontantMax((float) $request->request->get('montantMax'));
        $budget->setDureeBudget((int) $request->request->get('dureeBudget'));
        $budget->setDateBudget(new \DateTime($request->request->get('dateBudget')));

        $entityManager->flush();

        $this->addFlash('success', 'Budget updated successfully!');
        return $this->redirectToRoute('app_budget_index');
    }

    return $this->render('management/budget/edit.html.twig', [
        'budget' => $budget,
    ]);
}
    #[Route('/{id}/delete', name: 'app_budget_delete', methods: ['POST'])]
    public function delete(Request $request, Budget $budget, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$budget->getId(), $request->request->get('_token'))) {
            $entityManager->remove($budget);
            $entityManager->flush();
            $this->addFlash('success', 'Budget deleted!');
        }
        return $this->redirectToRoute('app_budget_index');
    }
}