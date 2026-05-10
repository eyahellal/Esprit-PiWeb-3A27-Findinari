<?php

namespace App\Controller\managment;

use App\Entity\Loan\Wallet;
use App\Entity\management\Budget;
use App\Entity\management\Categorie;
use App\Entity\management\Transaction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminManagementController extends AbstractController
{
    #[Route('/admin/management', name: 'app_admin_management', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $allWallets = $entityManager->getRepository(Wallet::class)->findAll();
        $totalWallets = count($allWallets);
        $totalBalance = 0.0;

        foreach ($allWallets as $wallet) {
            $totalBalance += (float) $wallet->getSolde();
        }

        $allCategories = $entityManager->getRepository(Categorie::class)->findAll();
        $totalCategories = count($allCategories);
        $activeCategories = 0;
        $inactiveCategories = 0;

        foreach ($allCategories as $category) {
            if ($category->getStatut() === 'Active') {
                $activeCategories++;
            } else {
                $inactiveCategories++;
            }
        }

        $allBudgets = $entityManager->getRepository(Budget::class)->findAll();
        $totalBudgets = count($allBudgets);
        $activeBudgets = 0;
        $expiredBudgets = 0;
        $budgetUsage = [];
        $budgetsExpiry = [];

        foreach ($allBudgets as $budget) {
            $startDate = $budget->getDateBudget();

            if (!$startDate instanceof \DateTimeInterface) {
                continue;
            }

            $endDate = \DateTime::createFromInterface($startDate)
                ->modify('+' . $budget->getDureeBudget() . ' days');

            $isExpired = new \DateTime() > $endDate;
            $budgetsExpiry[$budget->getId()] = $isExpired;

            if ($isExpired) {
                $expiredBudgets++;
                continue;
            }

            $activeBudgets++;

            $category = $budget->getCategorie();
            $wallet = $budget->getWallet();

            if (!$category instanceof Categorie || !$wallet instanceof Wallet) {
                continue;
            }

            $totalSpent = $entityManager->getRepository(Transaction::class)
                ->createQueryBuilder('t')
                ->select('SUM(t.montant)')
                ->where('t.wallet = :wallet')
                ->andWhere('t.categorie = :categorie')
                ->andWhere('t.type = :type')
                ->setParameter('wallet', $wallet)
                ->setParameter('categorie', $category)
                ->setParameter('type', 'depense')
                ->getQuery()
                ->getSingleScalarResult() ?? 0;

            $catName = $category->getNom() ?? 'Unknown';

            if (isset($budgetUsage[$catName])) {
                $budgetUsage[$catName]['spent'] += (float) $totalSpent;
                $budgetUsage[$catName]['limit'] += (float) $budget->getMontantMax();
            } else {
                $budgetUsage[$catName] = [
                    'category' => $catName,
                    'spent' => (float) $totalSpent,
                    'limit' => (float) $budget->getMontantMax(),
                    'devise' => $wallet->getDevise() ?? '',
                ];
            }

            $budgetUsage[$catName]['percent'] = $budgetUsage[$catName]['limit'] > 0
                ? min(100, round(($budgetUsage[$catName]['spent'] / $budgetUsage[$catName]['limit']) * 100, 1))
                : 0;
        }

        $allTransactions = $entityManager->getRepository(Transaction::class)->findAll();
        $totalTransactions = count($allTransactions);
        $totalIncome = 0.0;
        $totalExpense = 0.0;
        $recurringCount = 0;
        $monthlyData = [];
        $categorySpending = [];

        foreach ($allTransactions as $transaction) {
            if ($transaction->getType() === 'income') {
                $totalIncome += (float) $transaction->getMontant();
            } else {
                $totalExpense += (float) $transaction->getMontant();
            }

            if ($transaction->isRecurring()) {
                $recurringCount++;
            }

            $transactionDate = $transaction->getDate();

            if ($transactionDate instanceof \DateTimeInterface) {
                $monthKey = $transactionDate->format('Y-m');

                if (!isset($monthlyData[$monthKey])) {
                    $monthlyData[$monthKey] = [
                        'income' => 0.0,
                        'expense' => 0.0,
                    ];
                }

                if ($transaction->getType() === 'income') {
                    $monthlyData[$monthKey]['income'] += (float) $transaction->getMontant();
                } else {
                    $monthlyData[$monthKey]['expense'] += (float) $transaction->getMontant();
                }
            }

            $category = $transaction->getCategorie();

            if ($transaction->getType() === 'depense' && $category instanceof Categorie) {
                $catName = $category->getNom() ?? 'Unknown';

                if (!isset($categorySpending[$catName])) {
                    $categorySpending[$catName] = [
                        'total' => 0.0,
                        'count' => 0,
                        'color' => $category->getColor() ?? '#16a34a',
                        'icon' => $category->getIcon() ?? 'fa-folder',
                    ];
                }

                $categorySpending[$catName]['total'] += (float) $transaction->getMontant();
                $categorySpending[$catName]['count']++;
            }
        }

        ksort($monthlyData);

        uasort(
            $categorySpending,
            static fn (array $a, array $b): int => $b['total'] <=> $a['total']
        );

        $recentTransactions = $entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->orderBy('t.date', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return $this->render('admin/management_dashboard.html.twig', [
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
            'budgetsExpiry' => $budgetsExpiry,
        ]);
    }
}