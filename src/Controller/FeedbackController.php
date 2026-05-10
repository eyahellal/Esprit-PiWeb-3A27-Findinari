<?php

namespace App\Controller;

use App\Entity\user\Feedback;
use App\Entity\user\Utilisateur;
use App\Form\FeedbackType;
use App\Repository\FeedbackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FeedbackController extends AbstractController
{
    #[Route('/feedback', name: 'app_feedback_index')]
    public function index(
        Request $request,
        FeedbackRepository $feedbackRepository,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        $formView = null;

        if ($user instanceof Utilisateur) {
            $userEmail = $user->getGmail();

            if ($userEmail !== null) {
                $feedback = new Feedback();
                $form = $this->createForm(FeedbackType::class, $feedback);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $feedback->setUserEmail($userEmail);
                    $feedback->setCreatedAt(new \DateTime());

                    $entityManager->persist($feedback);
                    $entityManager->flush();

                    $this->addFlash('success', 'Feedback added successfully.');

                    return $this->redirectToRoute('app_feedback_index');
                }

                $formView = $form->createView();
            }
        }

        $queryBuilder = $feedbackRepository
            ->createQueryBuilder('f')
            ->orderBy('f.createdAt', 'DESC');

        $feedbacks = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('feedback/index.html.twig', [
            'feedbacks' => $feedbacks,
            'feedbackForm' => $formView,
        ]);
    }

    #[Route('/feedback/{id}/edit', name: 'app_feedback_edit')]
    public function edit(
        Feedback $feedback,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user instanceof Utilisateur) {
            return $this->redirectToRoute('app_front_login');
        }

        $userEmail = $user->getGmail();

        if ($userEmail === null) {
            throw $this->createAccessDeniedException('User email not found.');
        }

        if ($feedback->getUserEmail() !== $userEmail) {
            throw $this->createAccessDeniedException('You can only edit your own feedback.');
        }

        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Feedback updated successfully.');

            return $this->redirectToRoute('app_feedback_index');
        }

        return $this->render('feedback/edit.html.twig', [
            'feedbackForm' => $form->createView(),
            'feedback' => $feedback,
        ]);
    }

    #[Route('/feedback/{id}/delete', name: 'app_feedback_delete', methods: ['POST'])]
    public function delete(
        Feedback $feedback,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user instanceof Utilisateur) {
            return $this->redirectToRoute('app_front_login');
        }

        $userEmail = $user->getGmail();

        if ($userEmail === null) {
            throw $this->createAccessDeniedException('User email not found.');
        }

        if ($feedback->getUserEmail() !== $userEmail) {
            throw $this->createAccessDeniedException('You can only delete your own feedback.');
        }

        $token = $request->request->get('_token');

        if (!is_string($token) && $token !== null) {
            $token = (string) $token;
        }

        if ($this->isCsrfTokenValid('delete_feedback_' . $feedback->getId(), $token)) {
            $entityManager->remove($feedback);
            $entityManager->flush();

            $this->addFlash('success', 'Feedback deleted successfully.');
        }

        return $this->redirectToRoute('app_feedback_index');
    }
}