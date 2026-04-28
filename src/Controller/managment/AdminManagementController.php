<?php

namespace App\Controller\managment;

use App\Entity\management\Budget;
use App\Entity\management\Categorie;
use App\Entity\management\Transaction;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminManagementController extends AbstractController
{
    #[Route('/admin/management', name: 'app_admin_management', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // ── All Wallets ──
        $allWallets = $entityManager->getRepository(Wallet::class)->findAll();
        $totalWallets = count($allWallets);
        $totalBalance = 0;
        foreach ($allWallets as $w) {
            $totalBalance += $w->getSolde();
        }

        // ── All Categories ──
        $allCategories = $entityManager->getRepository(Categorie::class)->findAll();
        $totalCategories = count($allCategories);
        $activeCategories = 0;
        $inactiveCategories = 0;
        foreach ($allCategories as $cat) {
            if ($cat->getStatut() === 'Active') {
                $activeCategories++;
            } else {
                $inactiveCategories++;
            }
        }

       // ── All Budgets with expiry info ──
$allBudgets = $entityManager->getRepository(Budget::class)->findAll();
$totalBudgets = count($allBudgets);
$activeBudgets = 0;
$expiredBudgets = 0;
$budgetUsage = [];
$budgetsExpiry = [];

foreach ($allBudgets as $budget) {
    /** @var \DateTime $endDate */
    $endDate = (clone $budget->getDateBudget())->modify('+' . $budget->getDureeBudget() . ' days');
    $isExpired = new \DateTime() > $endDate;
    $budgetsExpiry[$budget->getId()] = $isExpired;

    if ($isExpired) {
    $expiredBudgets++;
} else {
    $activeBudgets++;

    $totalSpent = $entityManager->getRepository(Transaction::class)
        ->createQueryBuilder('t')
        ->select('SUM(t.montant)')
        ->where('t.wallet = :wallet')
        ->andWhere('t.categorie = :categorie')
        ->andWhere('t.type = :type')
        ->setParameter('wallet', $budget->getWallet())
        ->setParameter('categorie', $budget->getCategorie())
        ->setParameter('type', 'depense')
        ->getQuery()
        ->getSingleScalarResult() ?? 0;  //retourner une seule valeur 

    $catName = $budget->getCategorie()->getNom();

    if (isset($budgetUsage[$catName])) {
        // Merge: add limits and spent together
        $budgetUsage[$catName]['spent'] += (float) $totalSpent;
        $budgetUsage[$catName]['limit'] += (float) $budget->getMontantMax();
    } else {
        $budgetUsage[$catName] = [
            'category' => $catName,
            'spent' => (float) $totalSpent,
            'limit' => (float) $budget->getMontantMax(),
            'devise' => $budget->getWallet()->getDevise(),
        ];
    }

    // Recalculate percent after merge
    $budgetUsage[$catName]['percent'] = $budgetUsage[$catName]['limit'] > 0
        ? min(100, round(($budgetUsage[$catName]['spent'] / $budgetUsage[$catName]['limit']) * 100, 1))
        : 0;
}
}
        // ── All Transactions ──
        $allTransactions = $entityManager->getRepository(Transaction::class)->findAll();
        $totalTransactions = count($allTransactions);
        $totalIncome = 0;
        $totalExpense = 0;
        $recurringCount = 0;
        $monthlyData = [];
        $categorySpending = [];

        foreach ($allTransactions as $t) {
            // Income / Expense totals
            if ($t->getType() === 'income') {
                $totalIncome += $t->getMontant();
            } else {
                $totalExpense += $t->getMontant();
            }

            // Recurring count
            if ($t->isRecurring()) {
                $recurringCount++;
            }

            // Monthly data for chart
            $monthKey = $t->getDate()->format('Y-m');
            if (!isset($monthlyData[$monthKey])) {
                $monthlyData[$monthKey] = ['income' => 0, 'expense' => 0];
            }
            if ($t->getType() === 'income') {
                $monthlyData[$monthKey]['income'] += $t->getMontant();
            } else {
                $monthlyData[$monthKey]['expense'] += $t->getMontant();
            }

            // Category spending for pie chart
            if ($t->getType() === 'depense' && $t->getCategorie()) {
                $catName = $t->getCategorie()->getNom();
                if (!isset($categorySpending[$catName])) {
                    $categorySpending[$catName] = [
                        'total' => 0,
                        'count' => 0,
                        'color' => $t->getCategorie()->getColor() ?? '#16a34a',
                        'icon' => $t->getCategorie()->getIcon() ?? 'fa-folder',
                    ];
                }
                $categorySpending[$catName]['total'] += $t->getMontant();
                $categorySpending[$catName]['count']++;
            }
        }

        // Sort monthly data by date
        ksort($monthlyData);

        // Sort category spending by total (highest first)
        uasort($categorySpending, fn($a, $b) => $b['total'] <=> $a['total']);

        // Recent transactions (last 10)
        $recentTransactions = $entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')  //crée un QueryBuilder
            ->orderBy('t.date', 'DESC')
            ->setMaxResults(10)
            ->getQuery()  //transforme le QueryBuilder en requête executable
            ->getResult(); //exécute la requête

        return $this->render('admin/management_dashboard.html.twig', [  //afficher une vue
            'totalWallets' => $totalWallets,
            'totalBalance' => $totalBalance,
            'totalCategories' => $totalCategories,
            'activeCategories' => $activeCategories,
            'inactiveCategories' => $inactiveCategories,
            'totalBudgets' => $totalBudgets,
            'activeBudgets' => $activeBudgets,
            'expiredBudgets' => $expiredBudgets,
            'totalTransactions' => $totalTransactions,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'recurringCount' => $recurringCount,
            'monthlyData' => $monthlyData,
            'categorySpending' => $categorySpending,
            'budgetUsage' => $budgetUsage,
            'recentTransactions' => $recentTransactions,
            'allWallets' => $allWallets,
            'allCategories' => $allCategories,
            'allBudgets' => $allBudgets,
        ]);
    }
}
