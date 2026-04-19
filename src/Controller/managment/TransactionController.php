<?php

namespace App\Controller\managment;

use App\Entity\management\Transaction;
use App\Entity\user\Utilisateur;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/transaction')]
class TransactionController extends AbstractController
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

   #[Route('/', name: 'app_transaction_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUserOrCreate($entityManager);
        $this->executeRecurringTransactions($entityManager, $user);

        $wallets = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
            ->findBy(['utilisateur' => $user]);

        $transactions = [];
        $total = 0;
        $totalIncome = 0;
        $totalExpense = 0;
        $page = $request->query->getInt('page', 1);
        $limit = 8;
        $totalPages = 1;
        $type = $request->query->get('type', '');

        if (!empty($wallets)) {
            $qb = $entityManager->getRepository(Transaction::class)
                ->createQueryBuilder('t')
                ->where('t.wallet IN (:wallets)')
                ->setParameter('wallets', $wallets)
                ->orderBy('t.date', 'DESC');

            if ($type) {
                $qb->andWhere('t.type = :type')
                   ->setParameter('type', $type);
            }

            // Calculate stats from ALL matching transactions (before pagination)
            $allTransactions = (clone $qb)->getQuery()->getResult();
            foreach ($allTransactions as $t) {
                if ($t->getType() === 'income') {
                    $totalIncome += $t->getMontant();
                } else {
                    $totalExpense += $t->getMontant();
                }
            }

            // Count total
            $total = count($allTransactions);
            $totalPages = max(1, ceil($total / $limit));

            if ($page < 1) $page = 1;
            if ($page > $totalPages) $page = $totalPages;

            // Get paginated results
            $transactions = $qb->setFirstResult(($page - 1) * $limit)
                               ->setMaxResults($limit)
                               ->getQuery()
                               ->getResult();
        }

        return $this->render('management/transaction/index.html.twig', [
            'transactions' => $transactions,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'type' => $type,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'total' => $total,
        ]);
    }

    #[Route('/new/step1', name: 'app_transaction_new_step1', methods: ['GET', 'POST'])]
public function step1(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
{
    $user = $this->getUserOrCreate($entityManager);
    $wallets = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
        ->findBy(['utilisateur' => $user]);

    if ($request->isMethod('POST')) {
        $walletId = $request->request->get('wallet_id');
        if ($walletId) {
            $wallet = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
                ->findOneBy(['id' => $walletId, 'utilisateur' => $user]);
            if ($wallet) {
                $session->set('transaction_wallet_id', $walletId);
                return $this->redirectToRoute('app_transaction_new_step2');
            }
        }
    }

    return $this->render('management/transaction/step1.html.twig', [
        'wallets' => $wallets,
    ]);
}

#[Route('/new/step2', name: 'app_transaction_new_step2', methods: ['GET', 'POST'])]
public function step2(Request $request, SessionInterface $session): Response
{
    if (!$session->get('transaction_wallet_id')) {
        return $this->redirectToRoute('app_transaction_new_step1');
    }

    if ($request->isMethod('POST')) {
        $type = $request->request->get('type');
        if ($type) {
            $session->set('transaction_type', $type);
            return $this->redirectToRoute('app_transaction_new_step3');
        }
    }

    return $this->render('management/transaction/step2.html.twig');
}

#[Route('/new/step3', name: 'app_transaction_new_step3', methods: ['GET', 'POST'])]
public function step3(Request $request, SessionInterface $session, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
{
    if (!$session->get('transaction_wallet_id') || !$session->get('transaction_type')) {
        return $this->redirectToRoute('app_transaction_new_step1');
    }

    $wallet = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
        ->find($session->get('transaction_wallet_id'));
    $type = $session->get('transaction_type');

    $categories = [];
    $budgets = [];
    $budgetsData = [];

   if ($type === 'depense') {
    $budgets = $entityManager->getRepository(\App\Entity\management\Budget::class)
        ->createQueryBuilder('b')
        ->where('b.wallet = :wallet')
        ->setParameter('wallet', $wallet)
        ->getQuery()
        ->getResult();

    foreach ($budgets as $budget) {
        // Check if budget is expired
        $endDate = (clone $budget->getDateBudget())->modify('+' . $budget->getDureeBudget() . ' days');
        if ($endDate < new \DateTime()) {
            continue; // Skip expired budgets
        }

        $categorie = $budget->getCategorie();
        $categories[] = $categorie;

        $totalSpent = $entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->select('SUM(t.montant)')
            ->where('t.wallet = :wallet')
            ->andWhere('t.categorie = :categorie')
            ->andWhere('t.type = :type')
            ->setParameter('wallet', $wallet)
            ->setParameter('categorie', $categorie)
            ->setParameter('type', 'depense')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $budgetsData[$categorie->getId()] = [
            'montantMax' => (float) $budget->getMontantMax(),
            'totalSpent' => (float) $totalSpent,
            'remaining' => (float) $budget->getMontantMax() - (float) $totalSpent,
        ];
    }
} else {
    $categories = $entityManager->getRepository(\App\Entity\management\Categorie::class)
        ->findBy(['statut' => 'Active']);
}

    if ($request->isMethod('POST')) {
        $transaction = new Transaction();
        $transaction->setWallet($wallet);
        $transaction->setType($type);
        $transaction->setDevise($wallet->getDevise());
        $transaction->setDate(new \DateTime());
        $transaction->setDescription($request->request->get('description'));

        // Safe value handling
        $montant = $request->request->get('montant');
        $transaction->setMontant($montant !== '' && $montant !== null ? (float)$montant : null);

        $categorieId = $request->request->get('categorie_id');
        if ($categorieId) {
            $categorie = $entityManager->getRepository(\App\Entity\management\Categorie::class)
                ->find($categorieId);
            $transaction->setCategorie($categorie);
        }
// After setting description, before validation:

$isRecurring = $request->request->get('isRecurring');
$transaction->setIsRecurring($isRecurring ? true : false);

if ($isRecurring) {
    $transaction->setFrequency($request->request->get('frequency'));

    $endDate = $request->request->get('endDate');
    $transaction->setEndDate($endDate ? new \DateTime($endDate) : null);

    // Next execution = today + frequency
    $next = new \DateTime();
    match ($request->request->get('frequency')) {
        'daily' => $next->modify('+1 day'),
        'weekly' => $next->modify('+1 week'),
        'monthly' => $next->modify('+1 month'),
        'yearly' => $next->modify('+1 year'),
        default => null,
    };
    $transaction->setNextExecutionDate($next);
}
        // Validate using @Assert constraints
        $errors = $validator->validate($transaction);

        if (count($errors) > 0) {
            return $this->render('management/transaction/step3.html.twig', [
                'wallet' => $wallet,
                'type' => $type,
                'categories' => $categories,
                'budgetsData' => $budgetsData,
                'errors' => $errors,
            ]);
        }

        // Balance update
        if ($type === 'income') {
            $wallet->setSolde($wallet->getSolde() + $transaction->getMontant());
        } else {
            $wallet->setSolde($wallet->getSolde() - $transaction->getMontant());
        }

        $entityManager->persist($transaction);
        $entityManager->flush();

        $session->remove('transaction_wallet_id');
        $session->remove('transaction_type');

        $this->addFlash('success', 'Transaction added successfully!');
        return $this->redirectToRoute('app_transaction_index');
    }

    return $this->render('management/transaction/step3.html.twig', [
        'wallet' => $wallet,
        'type' => $type,
        'categories' => $categories,
        'budgetsData' => $budgetsData,
    ]);
}

    #[Route('/{id}/delete', name: 'app_transaction_delete', methods: ['POST'])]
    public function delete(Request $request, Transaction $transaction, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transaction->getId(), $request->request->get('_token'))) {
            // Reverse the wallet balance
            $wallet = $transaction->getWallet();
            if ($transaction->getType() === 'income') {
                $wallet->setSolde($wallet->getSolde() - $transaction->getMontant());
            } else {
                $wallet->setSolde($wallet->getSolde() + $transaction->getMontant());
            }
            $entityManager->remove($transaction);
            $entityManager->flush();
            $this->addFlash('success', 'Transaction deleted!');
        }
        return $this->redirectToRoute('app_transaction_index');
    }
    private function executeRecurringTransactions(EntityManagerInterface $entityManager, $user): void
{
    $wallets = $entityManager->getRepository(\App\Entity\Loan\Wallet::class)
        ->findBy(['utilisateur' => $user]);

    if (empty($wallets)) return;

    $today = new \DateTime('today');

    $dueTransactions = $entityManager->getRepository(Transaction::class)
        ->createQueryBuilder('t')
        ->where('t.isRecurring = :recurring')
        ->andWhere('t.nextExecutionDate <= :today')
        ->andWhere('t.wallet IN (:wallets)')
        ->andWhere('t.endDate IS NULL OR t.endDate >= :today')
        ->setParameter('recurring', true)
        ->setParameter('today', $today)
        ->setParameter('wallets', $wallets)
        ->getQuery()
        ->getResult();

    foreach ($dueTransactions as $recurring) {
        $wallet = $recurring->getWallet();

        // Keep creating transactions until nextExecutionDate is in the future
        while ($recurring->getNextExecutionDate() <= $today) {

            // Check end date
            if ($recurring->getEndDate() && $recurring->getNextExecutionDate() > $recurring->getEndDate()) {
                $recurring->setIsRecurring(false);
                break;
            }

            // Skip if insufficient balance for expense
            if ($recurring->getType() === 'depense' && $recurring->getMontant() > $wallet->getSolde()) {
                break;
            }

            // Create the actual transaction
            $transaction = new Transaction();
            $transaction->setWallet($wallet);
            $transaction->setCategorie($recurring->getCategorie());
            $transaction->setType($recurring->getType());
            $transaction->setMontant($recurring->getMontant());
            $transaction->setDevise($wallet->getDevise());
            $transaction->setDate(clone $recurring->getNextExecutionDate());
            $transaction->setDescription('[Auto] ' . ($recurring->getDescription() ?? 'Recurring'));
            $transaction->setIsRecurring(false);

            // Update wallet balance
            if ($recurring->getType() === 'income') {
                $wallet->setSolde($wallet->getSolde() + $recurring->getMontant());
            } else {
                $wallet->setSolde($wallet->getSolde() - $recurring->getMontant());
            }

            $entityManager->persist($transaction);

            // Calculate next execution date
            $next = clone $recurring->getNextExecutionDate();
            match ($recurring->getFrequency()) {
                'daily' => $next->modify('+1 day'),
                'weekly' => $next->modify('+1 week'),
                'monthly' => $next->modify('+1 month'),
                'yearly' => $next->modify('+1 year'),
                default => null,
            };
            $recurring->setNextExecutionDate($next);
        }
    }

    $entityManager->flush();
}
#[Route('/{id}/toggle-recurring', name: 'app_transaction_toggle_recurring', methods: ['POST'])]
public function toggleRecurring(Transaction $transaction, EntityManagerInterface $entityManager, Request $request): Response
{
    if ($this->isCsrfTokenValid('toggle' . $transaction->getId(), $request->request->get('_token'))) {
        $transaction->setIsRecurring(!$transaction->isRecurring());
        $entityManager->flush();
        $this->addFlash('success', $transaction->isRecurring() ? 'Recurring transaction activated!' : 'Recurring transaction stopped!');
    }
    return $this->redirectToRoute('app_transaction_index');
}
}