<?php

namespace App\Controller\Loan;

use App\Entity\Loan\Obligation;
use App\form\ObligationType;
use App\Repository\ObligationRepository;
use App\Repository\InvestissementobligationRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

#[Route('/loan/obligation')]
class ObligationController extends AbstractController
{
    private $httpClient;
    private $ollamaApiUrl;
    private $logger;
    
    // Constructor with $ollamaApiUrl parameter
    public function __construct(HttpClientInterface $httpClient, string $ollamaApiUrl, LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->ollamaApiUrl = $ollamaApiUrl;
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
        
        if ($search) {
            $queryBuilder->where('o.nom LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
        
        // Paginate the query (6 items per page for 2x3 grid)
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

    #[Route('/api/obligation/recommendations', name: 'app_obligation_recommendations', methods: ['GET'])]
    public function getRecommendations(): JsonResponse
    {
        $prompt = "Generate 3 investment obligation recommendations for a financial platform. Each recommendation should have: a creative name, an interest rate between 3% and 15% (as a float number), and a duration in months between 6 and 60 (as an integer). Format the response as valid JSON only, no other text. Example format: [{\"name\":\"Example Bond\",\"rate\":8.5,\"duration\":24}]";
        
        try {
            $this->logger->info('Calling Ollama API at: ' . $this->ollamaApiUrl);
            
            $response = $this->httpClient->request('POST', $this->ollamaApiUrl, [
                'json' => [
                    'model' => 'gemma3:1b',
                    'prompt' => $prompt,
                    'stream' => false,
                    'temperature' => 0.8,
                    'num_predict' => 500
                ],
                'timeout' => 30
            ]);
            
            $statusCode = $response->getStatusCode();
            $this->logger->info('Ollama response status: ' . $statusCode);
            
            if ($statusCode !== 200) {
                $this->logger->error('Ollama returned non-200 status: ' . $statusCode);
                return $this->json(['recommendations' => $this->getDefaultRecommendations()]);
            }
            
            $data = $response->toArray();
            $output = trim($data['response'] ?? '');
            
            $this->logger->info('Ollama raw response: ' . $output);
            
            if (empty($output)) {
                $this->logger->warning('Empty response from Ollama');
                return $this->json(['recommendations' => $this->getDefaultRecommendations()]);
            }
            
            // Try to extract JSON from response
            preg_match('/\[(?:[^\[\]]|\[(?:[^\[\]]|\[[^\[\]]*\])*\])*\]/s', $output, $matches);
            $jsonString = $matches[0] ?? '';
            
            if (empty($jsonString)) {
                $this->logger->warning('No JSON found in Ollama response');
                return $this->json(['recommendations' => $this->getDefaultRecommendations()]);
            }
            
            $recommendations = json_decode($jsonString, true);
            
            if (!is_array($recommendations) || empty($recommendations)) {
                $this->logger->warning('Invalid JSON structure from Ollama');
                return $this->json(['recommendations' => $this->getDefaultRecommendations()]);
            }
            
            // Validate each recommendation has required fields
            foreach ($recommendations as $rec) {
                if (!isset($rec['name']) || !isset($rec['rate']) || !isset($rec['duration'])) {
                    $this->logger->warning('Missing fields in recommendation');
                    return $this->json(['recommendations' => $this->getDefaultRecommendations()]);
                }
            }
            
            return $this->json(['recommendations' => $recommendations]);
            
        } catch (\Exception $e) {
            $this->logger->error('Ollama API error: ' . $e->getMessage());
            return $this->json(['recommendations' => $this->getDefaultRecommendations()]);
        }
    }

    #[Route('/api/obligation/recommendation/add', name: 'app_obligation_recommendation_add', methods: ['POST'])]
    public function addRecommendation(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['name']) || !isset($data['rate']) || !isset($data['duration'])) {
            return $this->json(['success' => false, 'error' => 'Missing required fields'], 400);
        }
        
        $obligation = new Obligation();
        $obligation->setNom($data['name']);
        $obligation->setTauxInteret($data['rate']);
        $obligation->setDuree($data['duration']);
        
        $entityManager->persist($obligation);
        $entityManager->flush();
        
        return $this->json(['success' => true, 'id' => $obligation->getIdObligation()]);
    }

    private function getDefaultRecommendations(): array
    {
        return [
            ['name' => 'Eco Green Bond', 'rate' => 6.5, 'duration' => 24],
            ['name' => 'Tech Growth Bond', 'rate' => 9.0, 'duration' => 36],
            ['name' => 'Secure Plus Bond', 'rate' => 4.5, 'duration' => 12],
        ];
    }
}