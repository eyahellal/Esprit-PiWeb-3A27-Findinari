<?php

namespace App\Controller;

use App\Entity\objective\Contributiongoal;
use App\Form\ContributiongoalType;
use App\Repository\ContributiongoalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/contribution')]
final class ContributionController extends AbstractController
{
    #[Route(name: 'app_contribution_index', methods: ['GET'])]
    public function index(ContributiongoalRepository $contributiongoalRepository): Response
    {
        return $this->render('contribution/index.html.twig', [
            'contributiongoals' => $contributiongoalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_contribution_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contributiongoal = new Contributiongoal();
        $form = $this->createForm(ContributiongoalType::class, $contributiongoal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contributiongoal);
            $entityManager->flush();

            return $this->redirectToRoute('app_contribution_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contribution/new.html.twig', [
            'contributiongoal' => $contributiongoal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contribution_show', methods: ['GET'])]
    public function show(Contributiongoal $contributiongoal): Response
    {
        return $this->render('contribution/show.html.twig', [
            'contributiongoal' => $contributiongoal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contribution_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contributiongoal $contributiongoal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContributiongoalType::class, $contributiongoal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_contribution_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contribution/edit.html.twig', [
            'contributiongoal' => $contributiongoal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contribution_delete', methods: ['POST'])]
    public function delete(Request $request, Contributiongoal $contributiongoal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contributiongoal->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($contributiongoal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_contribution_index', [], Response::HTTP_SEE_OTHER);
    }
}