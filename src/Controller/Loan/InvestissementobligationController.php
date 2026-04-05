<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Form\InvestissementobligationType;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/loan/investment')]
class InvestissementobligationController extends AbstractController
{
    #[Route('/', name: 'app_investment_index', methods: ['GET'])]
    public function index(InvestissementobligationRepository $repository, ObligationRepository $obligationRepo, Request $request): Response
    {
        $search = $request->query->get('search');
        
        if ($search) {
            // Search investments by obligation name
            $qb = $repository->createQueryBuilder('i');
            $investments = $qb
                ->where('i.obligationId IN (SELECT o.idObligation FROM App\Entity\Loan\Obligation o WHERE o.nom LIKE :search)')
                ->setParameter('search', '%' . $search . '%')
                ->getQuery()
                ->getResult();
        } else {
            $investments = $repository->findAll();
        }
        
        // Get obligations for display
        $obligations = [];
        foreach ($obligationRepo->findAll() as $ob) {
            $obligations[$ob->getIdObligation()] = $ob;
        }

        return $this->render('loan/investment/index.html.twig', [
            'investments' => $investments,
            'obligations' => $obligations,
            'search' => $search,
        ]);
    }

    #[Route('/new/{idObligation?}', name: 'app_investment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ?Obligation $obligation = null): Response
    {
        $investment = new Investissementobligation();
        
        if ($obligation) {
            $investment->setObligationId($obligation->getIdObligation());
        }
        
        $form = $this->createForm(InvestissementobligationType::class, $investment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Calculate maturity date based on obligation duration
            $obligationId = $investment->getObligationId();
            if ($obligationId) {
                $obligationRepo = $entityManager->getRepository(Obligation::class);
                $selectedObligation = $obligationRepo->find($obligationId);
                if ($selectedObligation) {
                    $durationInMonths = $selectedObligation->getDuree();
                    $maturityDate = (clone $investment->getDateAchat())->modify("+{$durationInMonths} months");
                    $investment->setDateMaturite($maturityDate);
                }
            }
            
            $entityManager->persist($investment);
            $entityManager->flush();

            $this->addFlash('success', 'Investment created successfully!');
            return $this->redirectToRoute('app_investment_index');
        }

        return $this->render('loan/investment/new.html.twig', [
            'investment' => $investment,
            'form' => $form,
            'selected_obligation' => $obligation,
        ]);
    }

    #[Route('/{idInvestissement}', name: 'app_investment_show', methods: ['GET'])]
    public function show(int $idInvestissement, InvestissementobligationRepository $repository, ObligationRepository $obligationRepo): Response
    {
        $investment = $repository->find($idInvestissement);
        
        if (!$investment) {
            throw $this->createNotFoundException('Investment not found');
        }
        
        $obligation = $obligationRepo->find($investment->getObligationId());

        return $this->render('loan/investment/show.html.twig', [
            'investment' => $investment,
            'obligation' => $obligation,
        ]);
    }
    
    #[Route('/{idInvestissement}/edit', name: 'app_investment_edit', methods: ['GET', 'POST'])]
    public function edit(int $idInvestissement, Request $request, InvestissementobligationRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $investment = $repository->find($idInvestissement);
        
        if (!$investment) {
            throw $this->createNotFoundException('Investment not found');
        }
        
        $form = $this->createForm(InvestissementobligationType::class, $investment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Recalculate maturity date
            $obligationId = $investment->getObligationId();
            if ($obligationId) {
                $obligationRepo = $entityManager->getRepository(Obligation::class);
                $selectedObligation = $obligationRepo->find($obligationId);
                if ($selectedObligation) {
                    $durationInMonths = $selectedObligation->getDuree();
                    $maturityDate = (clone $investment->getDateAchat())->modify("+{$durationInMonths} months");
                    $investment->setDateMaturite($maturityDate);
                }
            }
            
            $entityManager->flush();
            $this->addFlash('success', 'Investment updated successfully!');
            return $this->redirectToRoute('app_investment_index');
        }

        return $this->render('loan/investment/edit.html.twig', [
            'investment' => $investment,
            'form' => $form,
        ]);
    }

    #[Route('/{idInvestissement}', name: 'app_investment_delete', methods: ['POST'])]
    public function delete(Request $request, Investissementobligation $investment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$investment->getIdInvestissement(), $request->request->get('_token'))) {
            $entityManager->remove($investment);
            $entityManager->flush();
            $this->addFlash('success', 'Investment deleted successfully!');
        }

        return $this->redirectToRoute('app_investment_index');
    }
}