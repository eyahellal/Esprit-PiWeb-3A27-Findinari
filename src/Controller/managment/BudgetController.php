<?php

namespace App\Controller\managment;
use App\Entity\user\Utilisateur;
use App\Entity\management\Budget;
use App\Repository\BudgetRepository;
use App\Repository\CategorieRepository;
use App\Repository\WalletRepository;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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

    $wallets = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
        ->findBy(['utilisateur' => $user]);

    $activeBudgets = [];
    $expiredBudgets = [];
    $budgetsStats = [];
    $totalBudgets = 0;
    $totalAmount = 0;

    if (!empty($wallets)) {
        $budgets = $entityManager->getRepository(\App\Entity\management\Budget::class)
            ->createQueryBuilder('b')
            ->where('b.wallet IN (:wallets)')
            ->setParameter('wallets', $wallets)
            ->getQuery()
            ->getResult();

        $totalBudgets = count($budgets);

        foreach ($budgets as $budget) {
            $totalAmount += $budget->getMontantMax();

            $totalSpent = $entityManager->getRepository(\App\Entity\management\Transaction::class)
                ->createQueryBuilder('t')
                ->select('SUM(t.montant)')
                ->where('t.wallet = :wallet')
                ->andWhere('t.categorie = :categorie')
                ->andWhere('t.type = :type')
                ->setParameter('wallet', $budget->getWallet())
                ->setParameter('categorie', $budget->getCategorie())
                ->setParameter('type', 'depense')
                ->getQuery()
                ->getSingleScalarResult() ?? 0;

            $montantMax = $budget->getMontantMax();
            $remaining = $montantMax - $totalSpent;
            $spentPercent = $montantMax > 0 ? min(100, ($totalSpent / $montantMax) * 100) : 0;

            $startDate = $budget->getDateBudget();
            $endDate = (clone $startDate)->modify('+' . $budget->getDureeBudget() . ' days');
            $now = new \DateTime();

            $totalDays = $budget->getDureeBudget();
            $daysPassed = max(0, $startDate->diff($now)->days);
            if ($now < $startDate) $daysPassed = 0;
            $daysLeft = max(0, $totalDays - $daysPassed);
            $timePercent = $totalDays > 0 ? min(100, ($daysPassed / $totalDays) * 100) : 0;
            $expired = $now > $endDate;

            $budgetsStats[$budget->getId()] = [
                'totalSpent' => (float) $totalSpent,
                'remaining' => (float) $remaining,
                'spentPercent' => round($spentPercent, 1),
                'daysPassed' => $daysPassed,
                'daysLeft' => $daysLeft,
                'timePercent' => round($timePercent, 1),
                'expired' => $expired,
                'endDate' => $endDate,
            ];

            // Separate active and expired
            if ($expired) {
                $expiredBudgets[] = $budget;
            } else {
                $activeBudgets[] = $budget;
            }
        }
    }

    // Paginate active budgets
    $activePage = $request->query->getInt('active_page', 1);
    $limit = 6;
    $totalActivePages = max(1, ceil(count($activeBudgets) / $limit));
    if ($activePage < 1) $activePage = 1;
    if ($activePage > $totalActivePages) $activePage = $totalActivePages;
    $paginatedActive = array_slice($activeBudgets, ($activePage - 1) * $limit, $limit);

    // Paginate expired budgets
    $expiredPage = $request->query->getInt('expired_page', 1);
    $totalExpiredPages = max(1, ceil(count($expiredBudgets) / $limit));
    if ($expiredPage < 1) $expiredPage = 1;
    if ($expiredPage > $totalExpiredPages) $expiredPage = $totalExpiredPages;
    $paginatedExpired = array_slice($expiredBudgets, ($expiredPage - 1) * $limit, $limit);

    return $this->render('management/budget/index.html.twig', [
        'activeBudgets' => $paginatedActive,
        'expiredBudgets' => $paginatedExpired,
        'budgetsStats' => $budgetsStats,
        'totalBudgets' => $totalBudgets,
        'totalAmount' => $totalAmount,
        'totalActive' => count($activeBudgets),
        'totalExpired' => count($expiredBudgets),
        'activePage' => $activePage,
        'totalActivePages' => $totalActivePages,
        'expiredPage' => $expiredPage,
        'totalExpiredPages' => $totalExpiredPages,
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
        CategorieRepository $categorieRepository,
        ValidatorInterface $validator
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

            $montantMax = $request->request->get('montantMax');
            $budget->setMontantMax($montantMax !== '' && $montantMax !== null ? (float)$montantMax : null);

            $duree = $request->request->get('dureeBudget');
            $budget->setDureeBudget($duree !== '' && $duree !== null ? (int)$duree : null);

            $date = $request->request->get('dateBudget');
            $budget->setDateBudget($date ? new \DateTime($date) : null);

            // Validate using @Assert constraints
            $errors = $validator->validate($budget);

            if (count($errors) > 0) {
                return $this->render('management/budget/step3.html.twig', [
                    'wallet' => $wallet,
                    'categorie' => $categorie,
                    'errors' => $errors,
                ]);
            }

            // Business logic: check if budget amount exceeds wallet balance
            if ($budget->getMontantMax() > $wallet->getSolde()) {
                $this->addFlash('error', 'Budget amount (' . $budget->getMontantMax() . ' ' . $wallet->getDevise() . ') exceeds your wallet balance (' . $wallet->getSolde() . ' ' . $wallet->getDevise() . ')!');
                return $this->render('management/budget/step3.html.twig', [
                    'wallet' => $wallet,
                    'categorie' => $categorie,
                ]);
            }

            $entityManager->persist($budget);
            $entityManager->flush();

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
public function edit(Request $request, Budget $budget, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
{
    if ($request->isMethod('POST')) {
        $montantMax = $request->request->get('montantMax');
        $budget->setMontantMax($montantMax !== '' && $montantMax !== null ? (float)$montantMax : null);

        $duree = $request->request->get('dureeBudget');
        $budget->setDureeBudget($duree !== '' && $duree !== null ? (int)$duree : null);

        $date = $request->request->get('dateBudget');
        $budget->setDateBudget($date ? new \DateTime($date) : null);

        $errors = $validator->validate($budget);

        if (count($errors) > 0) {
            return $this->render('management/budget/edit.html.twig', [
                'budget' => $budget,
                'errors' => $errors,
            ]);
        }

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