<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\management\Wallet;
use App\Entity\user\Utilisateur;
use App\Form\InvestissementobligationType;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;
use App\Service\Loan\InvestmentValidatorService;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/loan/investment')]
class InvestissementobligationController extends AbstractController
{
    public function __construct(
        private InvestmentValidatorService $investmentValidator
    ) {}

    private function getUserOrCreate(EntityManagerInterface $entityManager): Utilisateur
    {
        $user = $this->getUser();

        if (!$user) {
            $user = $entityManager->getRepository(Utilisateur::class)->find(1);
        }

        if (!$user) {
            $user = $entityManager->getRepository(Utilisateur::class)->findOneBy([
                'gmail' => 'admin@findinari.com',
            ]);
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

    private function updateMaturityDate(Investissementobligation $investment, ?Obligation $obligation): void
    {
        if (!$obligation) {
            return;
        }

        $dateAchat = $investment->getDateAchat();

        if ($dateAchat instanceof \DateTimeInterface) {
            $maturityDate = (clone $dateAchat)->modify('+' . $obligation->getDuree() . ' months');
            $investment->setDateMaturite($maturityDate);
        }
    }

    #[Route('/', name: 'app_investment_index', methods: ['GET'])]
    public function index(
        InvestissementobligationRepository $repository,
        ObligationRepository $obligationRepo,
        WalletRepository $walletRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        $search = $request->query->get('search');
        $user = $this->getUserOrCreate($entityManager);

        $userWallets = $walletRepository->findBy(['utilisateur' => $user]);
        $walletIds = array_map(fn ($wallet) => $wallet->getId(), $userWallets);

        if (empty($walletIds)) {
            $pagination = null;
            $investments = [];
        } else {
            $qb = $repository->createQueryBuilder('i')
                ->where('i.walletId IN (:walletIds)')
                ->setParameter('walletIds', $walletIds);

            if ($search) {
                $qb->andWhere('i.obligationId IN (
                    SELECT o.idObligation 
                    FROM App\Entity\Loan\Obligation o 
                    WHERE o.nom LIKE :search
                )')
                ->setParameter('search', '%' . $search . '%');
            }

            $pagination = $paginator->paginate(
                $qb,
                $request->query->getInt('page', 1),
                3
            );

            $investments = $pagination->getItems();
        }

        $obligations = [];
        foreach ($obligationRepo->findAll() as $obligation) {
            $obligations[$obligation->getIdObligation()] = $obligation;
        }

        return $this->render('loan/investment/index.html.twig', [
            'pagination' => $pagination,
            'investments' => $investments,
            'obligations' => $obligations,
            'search' => $search,
        ]);
    }

    #[Route('/new/{idObligation?}', name: 'app_investment_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService,
        ?Obligation $obligation = null
    ): Response {
        $investment = new Investissementobligation();

        if ($obligation) {
            $investment->setObligationId($obligation->getIdObligation());
        }

        $form = $this->createForm(InvestissementobligationType::class, $investment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUserOrCreate($entityManager);

            $walletId = $investment->getWalletId();
            $wallet = $entityManager->getRepository(Wallet::class)->find($walletId);

            if (!$wallet) {
                $this->addFlash('error', 'Wallet introuvable');
                return $this->redirectToRoute('app_investment_new');
            }

            if ($wallet->getUtilisateur()->getId() !== $user->getId()) {
                $this->addFlash('error', 'Ce wallet ne vous appartient pas');
                return $this->redirectToRoute('app_investment_new');
            }

            $obligationId = $investment->getObligationId();
            $selectedObligation = null;

            if ($obligationId) {
                $selectedObligation = $entityManager
                    ->getRepository(Obligation::class)
                    ->find($obligationId);
            }

            $this->updateMaturityDate($investment, $selectedObligation);

            try {
                $this->investmentValidator->validate($investment, $wallet, $selectedObligation);
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_investment_new', [
                    'idObligation' => $obligationId,
                ]);
            }

            $entityManager->persist($investment);
            $entityManager->flush();

            $notificationService->addNotification(
                '💰 New Investment',
                sprintf(
                    'You invested %s DT in %s',
                    number_format($investment->getMontantInvesti(), 2),
                    $selectedObligation?->getNom() ?? 'Obligation'
                ),
                'success'
            );

            $this->addFlash('success', 'Investment created successfully!');
            return $this->redirectToRoute('app_investment_index');
        }

        $obligationsData = [];
        foreach ($entityManager->getRepository(Obligation::class)->findAll() as $obl) {
            $obligationsData[$obl->getIdObligation()] = [
                'rate' => $obl->getTauxInteret(),
                'duration' => $obl->getDuree(),
                'name' => $obl->getNom(),
            ];
        }

        $user = $this->getUserOrCreate($entityManager);
        $wallets = $entityManager->getRepository(Wallet::class)->findBy([
            'utilisateur' => $user,
        ]);

        return $this->render('loan/investment/new.html.twig', [
            'investment' => $investment,
            'form' => $form,
            'selected_obligation' => $obligation,
            'obligationsData' => $obligationsData,
            'wallets' => $wallets,
        ]);
    }

    #[Route('/{idInvestissement}', name: 'app_investment_show', methods: ['GET'])]
    public function show(
        int $idInvestissement,
        InvestissementobligationRepository $repository,
        ObligationRepository $obligationRepo,
        WalletRepository $walletRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUserOrCreate($entityManager);
        $investment = $repository->find($idInvestissement);

        if (!$investment) {
            throw $this->createNotFoundException('Investment not found');
        }

        $wallet = $walletRepository->find($investment->getWalletId());

        if (!$wallet || $wallet->getUtilisateur()->getId() !== $user->getId()) {
            throw $this->createNotFoundException('Investment not found');
        }

        $obligation = $obligationRepo->find($investment->getObligationId());

        return $this->render('loan/investment/show.html.twig', [
            'investment' => $investment,
            'obligation' => $obligation,
        ]);
    }

    #[Route('/{idInvestissement}/edit', name: 'app_investment_edit', methods: ['GET', 'POST'])]
    public function edit(
        int $idInvestissement,
        Request $request,
        InvestissementobligationRepository $repository,
        WalletRepository $walletRepository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $user = $this->getUserOrCreate($entityManager);
        $investment = $repository->find($idInvestissement);

        if (!$investment) {
            throw $this->createNotFoundException('Investment not found');
        }

        $wallet = $walletRepository->find($investment->getWalletId());

        if (!$wallet || $wallet->getUtilisateur()->getId() !== $user->getId()) {
            throw $this->createNotFoundException('Investment not found');
        }

        $oldAmount = $investment->getMontantInvesti();
        $oldObligationId = $investment->getObligationId();

        $obligation = null;
        if ($investment->getObligationId()) {
            $obligation = $entityManager
                ->getRepository(Obligation::class)
                ->find($investment->getObligationId());
        }

        $form = $this->createForm(InvestissementobligationType::class, $investment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $obligationId = $investment->getObligationId();
            $selectedObligation = null;

            if ($obligationId) {
                $selectedObligation = $entityManager
                    ->getRepository(Obligation::class)
                    ->find($obligationId);
            }

            $this->updateMaturityDate($investment, $selectedObligation);

            try {
                $this->investmentValidator->validate($investment, $wallet, $selectedObligation);
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_investment_edit', [
                    'idInvestissement' => $idInvestissement,
                ]);
            }

            $entityManager->flush();

            if ($oldAmount != $investment->getMontantInvesti()) {
                $notificationService->addNotification(
                    '✏️ Investment Updated',
                    sprintf(
                        'Investment amount changed from %s DT to %s DT',
                        number_format($oldAmount, 2),
                        number_format($investment->getMontantInvesti(), 2)
                    ),
                    'info'
                );
            }

            if ($oldObligationId != $investment->getObligationId() && $selectedObligation) {
                $notificationService->addNotification(
                    '🔄 Investment Updated',
                    sprintf('Investment obligation changed to %s', $selectedObligation->getNom()),
                    'info'
                );
            }

            $this->addFlash('success', 'Investment updated successfully!');
            return $this->redirectToRoute('app_investment_index');
        }

        $obligationsData = [];
        foreach ($entityManager->getRepository(Obligation::class)->findAll() as $obl) {
            $obligationsData[$obl->getIdObligation()] = [
                'rate' => $obl->getTauxInteret(),
                'duration' => $obl->getDuree(),
                'name' => $obl->getNom(),
            ];
        }

        return $this->render('loan/investment/edit.html.twig', [
            'investment' => $investment,
            'form' => $form,
            'obligation' => $obligation,
            'obligationsData' => $obligationsData,
        ]);
    }

    #[Route('/{idInvestissement}', name: 'app_investment_delete', methods: ['POST'])]
    public function delete(
        int $idInvestissement,
        Request $request,
        InvestissementobligationRepository $repository,
        WalletRepository $walletRepository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $user = $this->getUserOrCreate($entityManager);
        $investment = $repository->find($idInvestissement);

        if (!$investment) {
            throw $this->createNotFoundException('Investment not found');
        }

        $wallet = $walletRepository->find($investment->getWalletId());

        if (!$wallet || $wallet->getUtilisateur()->getId() !== $user->getId()) {
            throw $this->createNotFoundException('Investment not found');
        }

        $amount = $investment->getMontantInvesti();

        if ($this->isCsrfTokenValid('delete' . $investment->getIdInvestissement(), $request->request->get('_token'))) {
            $entityManager->remove($investment);
            $entityManager->flush();

            $notificationService->addNotification(
                '🗑️ Investment Deleted',
                sprintf('Investment of %s DT was deleted', number_format($amount, 2)),
                'danger'
            );

            $this->addFlash('success', 'Investment deleted successfully!');
        }

        return $this->redirectToRoute('app_investment_index');
    }
}