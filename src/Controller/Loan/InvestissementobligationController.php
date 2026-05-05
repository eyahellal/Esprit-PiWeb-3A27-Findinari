<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
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
    private InvestmentValidatorService $investmentValidator;

    public function __construct(InvestmentValidatorService $investmentValidator)
    {
        $this->investmentValidator = $investmentValidator;
    }

    private function getUserOrCreate(EntityManagerInterface $entityManager): Utilisateur
    {
        $user = $this->getUser();

        if ($user instanceof Utilisateur) {
            return $user;
        }

        $fallbackUser = $entityManager->getRepository(Utilisateur::class)->find(1);

        if ($fallbackUser instanceof Utilisateur) {
            return $fallbackUser;
        }

        $fallbackUser = $entityManager->getRepository(Utilisateur::class)
            ->findOneBy(['gmail' => 'admin@findinari.com']);

        if ($fallbackUser instanceof Utilisateur) {
            return $fallbackUser;
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

    private function walletBelongsToUser(Wallet $wallet, Utilisateur $user): bool
    {
        $walletUser = $wallet->getUtilisateur();

        return $walletUser instanceof Utilisateur && $walletUser->getId() === $user->getId();
    }

    private function calculateMaturityDate(\DateTimeInterface $dateAchat, int $durationInMonths): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromInterface($dateAchat)
            ->modify('+' . $durationInMonths . ' months');
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
        $walletIds = [];

        foreach ($userWallets as $wallet) {
            $walletIds[] = $wallet->getId();
        }

        if ($walletIds === []) {
            $pagination = null;
            $investments = [];
        } else {
            $qb = $repository->createQueryBuilder('i')
                ->where('i.walletId IN (:walletIds)')
                ->setParameter('walletIds', $walletIds);

            if ($search) {
                $qb->andWhere('i.obligationId IN (SELECT o.idObligation FROM App\Entity\Loan\Obligation o WHERE o.nom LIKE :search)')
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

        foreach ($obligationRepo->findAll() as $ob) {
            $obligations[$ob->getIdObligation()] = $ob;
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

        if ($obligation instanceof Obligation) {
            $investment->setObligationId($obligation->getIdObligation());
        }

        $form = $this->createForm(InvestissementobligationType::class, $investment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUserOrCreate($entityManager);

            $walletId = $investment->getWalletId();
            $wallet = $entityManager->getRepository(Wallet::class)->find($walletId);

            if (!$wallet instanceof Wallet) {
                $this->addFlash('error', 'Wallet introuvable');

                return $this->redirectToRoute('app_investment_new');
            }

            if (!$this->walletBelongsToUser($wallet, $user)) {
                $this->addFlash('error', 'Ce wallet ne vous appartient pas');

                return $this->redirectToRoute('app_investment_new');
            }

            $selectedObligation = null;
            $obligationId = $investment->getObligationId();

            if ($obligationId !== null) {
                $obligationRepo = $entityManager->getRepository(Obligation::class);
                $foundObligation = $obligationRepo->find($obligationId);

                if ($foundObligation instanceof Obligation) {
                    $selectedObligation = $foundObligation;
                    $dateAchat = $investment->getDateAchat();
                    $durationInMonths = $selectedObligation->getDuree();

                    if ($dateAchat !== null && $durationInMonths !== null) {
                        $maturityDate = $this->calculateMaturityDate($dateAchat, $durationInMonths);
                        $investment->setDateMaturite($maturityDate);
                    }
                }
            }

            try {
                $this->investmentValidator->validate($investment, $wallet, $selectedObligation);
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('error', $e->getMessage());

                return $this->redirectToRoute('app_investment_new', ['idObligation' => $obligationId]);
            }

            $entityManager->persist($investment);
            $entityManager->flush();

            $notificationService->addNotification(
                'New Investment',
                sprintf(
                    'You invested %s DT in %s',
                    number_format((float) $investment->getMontantInvesti(), 2),
                    $selectedObligation?->getNom() ?? 'Obligation'
                ),
                'success'
            );

            $this->addFlash('success', 'Investment created successfully!');

            return $this->redirectToRoute('app_investment_index');
        }

        $obligationRepo = $entityManager->getRepository(Obligation::class);
        $allObligations = $obligationRepo->findAll();
        $obligationsData = [];

        foreach ($allObligations as $obl) {
            $obligationsData[$obl->getIdObligation()] = [
                'rate' => $obl->getTauxInteret(),
                'duration' => $obl->getDuree(),
                'name' => $obl->getNom(),
            ];
        }

        $user = $this->getUserOrCreate($entityManager);
        $wallets = $entityManager->getRepository(Wallet::class)->findBy(['utilisateur' => $user]);

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

        if (!$investment instanceof Investissementobligation) {
            throw $this->createNotFoundException('Investment not found');
        }

        $wallet = $walletRepository->find($investment->getWalletId());

        if (!$wallet instanceof Wallet || !$this->walletBelongsToUser($wallet, $user)) {
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

        if (!$investment instanceof Investissementobligation) {
            throw $this->createNotFoundException('Investment not found');
        }

        $wallet = $walletRepository->find($investment->getWalletId());

        if (!$wallet instanceof Wallet || !$this->walletBelongsToUser($wallet, $user)) {
            throw $this->createNotFoundException('Investment not found');
        }

        $oldAmount = $investment->getMontantInvesti();
        $oldObligationId = $investment->getObligationId();

        $obligation = null;

        if ($investment->getObligationId() !== null) {
            $obligationRepo = $entityManager->getRepository(Obligation::class);
            $foundObligation = $obligationRepo->find($investment->getObligationId());

            if ($foundObligation instanceof Obligation) {
                $obligation = $foundObligation;
            }
        }

        $form = $this->createForm(InvestissementobligationType::class, $investment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $obligationId = $investment->getObligationId();
            $selectedObligation = null;

            if ($obligationId !== null) {
                $obligationRepo = $entityManager->getRepository(Obligation::class);
                $foundObligation = $obligationRepo->find($obligationId);

                if ($foundObligation instanceof Obligation) {
                    $selectedObligation = $foundObligation;
                    $dateAchat = $investment->getDateAchat();
                    $durationInMonths = $selectedObligation->getDuree();

                    if ($dateAchat !== null && $durationInMonths !== null) {
                        $maturityDate = $this->calculateMaturityDate($dateAchat, $durationInMonths);
                        $investment->setDateMaturite($maturityDate);
                    }
                }
            }

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
                    'Investment Updated',
                    sprintf(
                        'Investment amount changed from %s DT to %s DT',
                        number_format((float) $oldAmount, 2),
                        number_format((float) $investment->getMontantInvesti(), 2)
                    ),
                    'info'
                );
            }

            if ($oldObligationId != $investment->getObligationId() && $selectedObligation instanceof Obligation) {
                $notificationService->addNotification(
                    'Investment Updated',
                    sprintf('Investment obligation changed to %s', $selectedObligation->getNom()),
                    'info'
                );
            }

            $this->addFlash('success', 'Investment updated successfully!');

            return $this->redirectToRoute('app_investment_index');
        }

        $obligationRepo = $entityManager->getRepository(Obligation::class);
        $allObligations = $obligationRepo->findAll();
        $obligationsData = [];

        foreach ($allObligations as $obl) {
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

        if (!$investment instanceof Investissementobligation) {
            throw $this->createNotFoundException('Investment not found');
        }

        $wallet = $walletRepository->find($investment->getWalletId());

        if (!$wallet instanceof Wallet || !$this->walletBelongsToUser($wallet, $user)) {
            throw $this->createNotFoundException('Investment not found');
        }

        $amount = $investment->getMontantInvesti();

        if ($this->isCsrfTokenValid('delete' . $investment->getIdInvestissement(), (string) $request->request->get('_token'))) {
            $entityManager->remove($investment);
            $entityManager->flush();

            $notificationService->addNotification(
                'Investment Deleted',
                sprintf('Investment of %s DT was deleted', number_format((float) $amount, 2)),
                'danger'
            );

            $this->addFlash('success', 'Investment deleted successfully!');
        }

        return $this->redirectToRoute('app_investment_index');
    }
}