<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Obligation;
use App\Form\ObligationType;
use App\Repository\ObligationRepository;
use App\Repository\InvestissementobligationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/loan/obligation')]
class ObligationController extends AbstractController
{
    #[Route('/', name: 'app_obligation_index', methods: ['GET'])]
    public function index(ObligationRepository $obligationRepository, Request $request): Response
    {
        $search = $request->query->get('search');
        
        if ($search) {
            $obligations = $obligationRepository->createQueryBuilder('o')
                ->where('o.nom LIKE :search')
                ->setParameter('search', '%' . $search . '%')
                ->getQuery()
                ->getResult();
        } else {
            $obligations = $obligationRepository->findAll();
        }

        return $this->render('loan/obligation/index.html.twig', [
            'obligations' => $obligations,
            'search' => $search,
        ]);
    }

    #[Route('/new', name: 'app_obligation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $obligation = new Obligation();
        $form = $this->createForm(ObligationType::class, $obligation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($obligation);
            $entityManager->flush();

            $this->addFlash('success', 'Obligation created successfully!');
            return $this->redirectToRoute('app_obligation_index');
        }

        return $this->render('loan/obligation/new.html.twig', [
            'obligation' => $obligation,
            'form' => $form,
        ]);
    }

    #[Route('/{idObligation}', name: 'app_obligation_show', methods: ['GET'])]
    public function show(int $idObligation, ObligationRepository $repository): Response
    {
        $obligation = $repository->find($idObligation);
        
        if (!$obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }
        
        return $this->render('loan/obligation/show.html.twig', [
            'obligation' => $obligation,
        ]);
    }

    #[Route('/{idObligation}/edit', name: 'app_obligation_edit', methods: ['GET', 'POST'])]
    public function edit(int $idObligation, Request $request, ObligationRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $obligation = $repository->find($idObligation);
        
        if (!$obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }
        
        $form = $this->createForm(ObligationType::class, $obligation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Obligation updated successfully!');
            return $this->redirectToRoute('app_obligation_index');
        }

        return $this->render('loan/obligation/edit.html.twig', [
            'obligation' => $obligation,
            'form' => $form,
        ]);
    }

    #[Route('/{idObligation}', name: 'app_obligation_delete', methods: ['POST'])]
    public function delete(int $idObligation, Request $request, ObligationRepository $repository, InvestissementobligationRepository $investmentRepository, EntityManagerInterface $entityManager): Response
    {
        $obligation = $repository->find($idObligation);
        
        if (!$obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }
        
        if ($this->isCsrfTokenValid('delete'.$obligation->getIdObligation(), $request->request->get('_token'))) {
            // First delete all related investments
            $investments = $investmentRepository->findBy(['obligationId' => $obligation->getIdObligation()]);
            foreach ($investments as $investment) {
                $entityManager->remove($investment);
            }
            
            // Then delete the obligation
            $entityManager->remove($obligation);
            $entityManager->flush();
            $this->addFlash('success', 'Obligation and all related investments deleted successfully!');
        }

        return $this->redirectToRoute('app_obligation_index');
    }
}