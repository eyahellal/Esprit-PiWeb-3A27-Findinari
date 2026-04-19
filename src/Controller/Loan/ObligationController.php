<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Obligation;
use App\form\ObligationType;
use App\Repository\ObligationRepository;
use App\Repository\InvestissementobligationRepository;
use App\Service\SimpleNotificationService;
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
    public function new(Request $request, EntityManagerInterface $entityManager, SimpleNotificationService $notificationService): Response
    {
        $obligation = new Obligation();
        $form = $this->createForm(ObligationType::class, $obligation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($obligation);
            $entityManager->flush();

            // Add notification
            $notificationService->addNotification(
                '📋 New Obligation Created',
                sprintf('Obligation "%s" has been created with %.2f%% interest rate', $obligation->getNom(), $obligation->getTauxInteret()),
                'success'
            );

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
    public function edit(int $idObligation, Request $request, ObligationRepository $repository, EntityManagerInterface $entityManager, SimpleNotificationService $notificationService): Response
    {
        $obligation = $repository->find($idObligation);
        
        if (!$obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }
        
        $form = $this->createForm(ObligationType::class, $obligation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            // Add notification
            $notificationService->addNotification(
                '✏️ Obligation Updated',
                sprintf('Obligation "%s" has been updated', $obligation->getNom()),
                'info'
            );
            
            $this->addFlash('success', 'Obligation updated successfully!');
            return $this->redirectToRoute('app_obligation_index');
        }

        return $this->render('loan/obligation/edit.html.twig', [
            'obligation' => $obligation,
            'form' => $form,
        ]);
    }

    #[Route('/{idObligation}', name: 'app_obligation_delete', methods: ['POST'])]
    public function delete(int $idObligation, Request $request, ObligationRepository $repository, InvestissementobligationRepository $investmentRepository, EntityManagerInterface $entityManager, SimpleNotificationService $notificationService): Response
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
            
            // Add notification
            $notificationService->addNotification(
                '🗑️ Obligation Deleted',
                sprintf('Obligation "%s" has been deleted', $obligation->getNom()),
                'danger'
            );
            
            $this->addFlash('success', 'Obligation and all related investments deleted successfully!');
        }

        return $this->redirectToRoute('app_obligation_index');
    }
}