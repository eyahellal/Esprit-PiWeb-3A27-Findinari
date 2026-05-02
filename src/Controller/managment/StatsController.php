<?php

namespace App\Controller\managment;

use App\Entity\management\Transaction;
use App\Entity\management\Budget;
use App\Entity\user\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stats')]
class StatsController extends AbstractController
{
    private function getUserOrCreate(EntityManagerInterface $entityManager): Utilisateur
    {
        $user = $this->getUser();
        if (!$user) {
            $user = $entityManager->getRepository(Utilisateur::class)->find(1);
        }
        return $user;
    }

    #[Route('/', name: 'app_stats_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUserOrCreate($entityManager);
        $walletId = $request->query->get('wallet', 'all');

        $wallets = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
            ->findBy(['utilisateur' => $user]);

        $selectedWallet = null;
        if ($walletId !== 'all') {
            $selectedWallet = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)->find($walletId);
        }

        // Get transactions
        $qb = $entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->where('t.wallet IN (:wallets)')
            ->setParameter('wallets', $wallets)
            ->orderBy('t.date', 'DESC');

        if ($selectedWallet) {
            $qb->andWhere('t.wallet = :wallet')
               ->setParameter('wallet', $selectedWallet);
        }

        $transactions = $qb->getQuery()->getResult();

        // Calculate stats
        $totalIncome = 0;
        $totalExpense = 0;
        $categorySpending = [];
        $monthlyData = [];
        $transactionsData = [];

        foreach ($transactions as $t) {
            $transactionsData[] = [
                'type' => $t->getType(),
                'montant' => $t->getMontant(),
                'devise' => $t->getDevise(),
                'categorie' => $t->getCategorie()->getNom(),
                'categorieColor' => $t->getCategorie()->getColor() ?? '#F27438',
                'categorieIcon' => $t->getCategorie()->getIcon() ?? 'fa-folder',
                'date' => $t->getDate()->format('Y-m'),
                'walletPays' => $t->getWallet()->getPays(),
            ];

            if ($t->getType() === 'income') {
                $totalIncome += $t->getMontant();
            } else {
                $totalExpense += $t->getMontant();

                // Category spending
                $catName = $t->getCategorie()->getNom();
                if (!isset($categorySpending[$catName])) {
                    $categorySpending[$catName] = [
                        'total' => 0,
                        'count' => 0,
                        'color' => $t->getCategorie()->getColor() ?? '#F27438',
                        'icon' => $t->getCategorie()->getIcon() ?? 'fa-folder',
                    ];
                }
                $categorySpending[$catName]['total'] += $t->getMontant();
                $categorySpending[$catName]['count']++;
            }

            // Monthly data
            $month = $t->getDate()->format('Y-m');
            if (!isset($monthlyData[$month])) {
                $monthlyData[$month] = ['income' => 0, 'expense' => 0];
            }
            if ($t->getType() === 'income') {
                $monthlyData[$month]['income'] += $t->getMontant();
            } else {
                $monthlyData[$month]['expense'] += $t->getMontant();
            }
        }

        // Sort category spending DESC
        arsort($categorySpending);

        // Sort monthly data by date
        ksort($monthlyData);

        // Budget usage
        $budgetUsage = [];
        $budgetQb = $entityManager->getRepository(Budget::class)
            ->createQueryBuilder('b')
            ->where('b.wallet IN (:wallets)')
            ->setParameter('wallets', $wallets);

        if ($selectedWallet) {
            $budgetQb->andWhere('b.wallet = :wallet')
                     ->setParameter('wallet', $selectedWallet);
        }

        $budgets = $budgetQb->getQuery()->getResult();

        foreach ($budgets as $budget) {
            $spent = $entityManager->getRepository(Transaction::class)
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

            $budgetUsage[] = [
                'category' => $budget->getCategorie()->getNom(),
                'color' => $budget->getCategorie()->getColor() ?? '#F27438',
                'limit' => $budget->getMontantMax(),
                'spent' => (float) $spent,
                'percent' => $budget->getMontantMax() > 0 ? min(100, round(($spent / $budget->getMontantMax()) * 100, 1)) : 0,
                'devise' => $budget->getWallet()->getDevise(),
            ];
        }

        return $this->render('management/stats/index.html.twig', [
            'wallets' => $wallets,
            'selectedWallet' => $walletId,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'totalTransactions' => count($transactions),
            'categorySpending' => $categorySpending,
            'monthlyData' => $monthlyData,
            'budgetUsage' => $budgetUsage,
            'transactionsData' => $transactionsData,
        ]);
    }
}