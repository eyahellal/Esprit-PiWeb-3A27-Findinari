<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Obligation;
use App\Form\ObligationType;
use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/loan/obligation')]
class ObligationController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_obligation_index', methods: ['GET'])]
    public function index(
        ObligationRepository $obligationRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $search = $request->query->get('search');

        $queryBuilder = $obligationRepository->createQueryBuilder('o');

        if (is_string($search) && $search !== '') {
            $queryBuilder->where('o.nom LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('loan/obligation/index.html.twig', [
            'pagination' => $pagination,
            'search' => $search,
        ]);
    }

    #[Route('/new', name: 'app_obligation_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $obligation = new Obligation();
        $form = $this->createForm(ObligationType::class, $obligation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($obligation);
            $entityManager->flush();

            $notificationService->addNotification(
                'New Obligation Created',
                sprintf(
                    'Obligation "%s" has been created with %.2f%% interest rate',
                    $obligation->getNom(),
                    $obligation->getTauxInteret()
                ),
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
    public function show(
        int $idObligation,
        ObligationRepository $repository
    ): Response {
        $obligation = $repository->find($idObligation);

        if (!$obligation instanceof Obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }

        return $this->render('loan/obligation/show.html.twig', [
            'obligation' => $obligation,
        ]);
    }

    #[Route('/{idObligation}/edit', name: 'app_obligation_edit', methods: ['GET', 'POST'])]
    public function edit(
        int $idObligation,
        Request $request,
        ObligationRepository $repository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $obligation = $repository->find($idObligation);

        if (!$obligation instanceof Obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }

        $form = $this->createForm(ObligationType::class, $obligation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $notificationService->addNotification(
                'Obligation Updated',
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
    public function delete(
        int $idObligation,
        Request $request,
        ObligationRepository $repository,
        InvestissementobligationRepository $investmentRepository,
        EntityManagerInterface $entityManager,
        SimpleNotificationService $notificationService
    ): Response {
        $obligation = $repository->find($idObligation);

        if (!$obligation instanceof Obligation) {
            throw $this->createNotFoundException('Obligation not found');
        }

        $token = $request->request->get('_token');

        if ($this->isCsrfTokenValid(
            'delete' . $obligation->getIdObligation(),
            is_scalar($token) ? (string) $token : null
        )) {
            $investments = $investmentRepository->findBy([
                'obligationId' => $obligation->getIdObligation(),
            ]);

            foreach ($investments as $investment) {
                $entityManager->remove($investment);
            }

            $entityManager->remove($obligation);
            $entityManager->flush();

            $notificationService->addNotification(
                'Obligation Deleted',
                sprintf('Obligation "%s" has been deleted', $obligation->getNom()),
                'danger'
            );

            $this->addFlash('success', 'Obligation and all related investments deleted successfully!');
        }

        return $this->redirectToRoute('app_obligation_index');
    }

    #[Route('/api/recommendations', name: 'app_obligation_recommendations', methods: ['GET'])]
    public function getRecommendations(): JsonResponse
    {
        return $this->json([
            'recommendations' => $this->getDefaultRecommendations(),
        ]);
    }

    #[Route('/api/recommendation/add', name: 'app_obligation_recommendation_add', methods: ['POST'])]
    public function addRecommendation(
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        if (!is_array($data)) {
            return $this->json([
                'success' => false,
                'error' => 'Invalid JSON body',
            ], 400);
        }

        if (!isset($data['name'], $data['rate'], $data['duration'])) {
            return $this->json([
                'success' => false,
                'error' => 'Missing required fields',
            ], 400);
        }

        try {
            $obligation = new Obligation();
            $obligation->setNom((string) $data['name']);
            $obligation->setTauxInteret((float) $data['rate']);
            $obligation->setDuree((int) $data['duration']);

            $entityManager->persist($obligation);
            $entityManager->flush();

            return $this->json([
                'success' => true,
                'id' => $obligation->getIdObligation(),
            ]);
        } catch (\Throwable $e) {
            $this->logger->error('Error saving recommendation: ' . $e->getMessage());

            return $this->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @return list<array{name: string, rate: float, duration: int}>
     */
    private function getDefaultRecommendations(): array
    {
        return [
            ['name' => 'Eco Green Bond', 'rate' => 6.5, 'duration' => 24],
            ['name' => 'Tech Growth Bond', 'rate' => 9.0, 'duration' => 36],
            ['name' => 'Secure Plus Bond', 'rate' => 4.5, 'duration' => 12],
            ['name' => 'Digital Future Bond', 'rate' => 7.8, 'duration' => 48],
            ['name' => 'Stable Income Bond', 'rate' => 5.2, 'duration' => 18],
        ];
    }
}