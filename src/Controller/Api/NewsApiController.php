<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/api/news')]
class NewsApiController extends AbstractController
{
    private $httpClient;
    private $apiKey;
    
    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = '7a54e513da494a5491ae73ff5910163d';
    }
    
    #[Route('/', name: 'api_news_all', methods: ['GET'])]
    public function getAllNews(Request $request): JsonResponse
    {
        $search = $request->query->get('search', 'finance investment economy');
        $url = 'https://newsapi.org/v2/everything?q=' . urlencode($search) . '&language=en&sortBy=publishedAt&apiKey=' . $this->apiKey;
        
        try {
            $response = $this->httpClient->request('GET', $url);
            $data = $response->toArray();
            
            if ($data['status'] === 'ok') {
                return $this->json([
                    'success' => true,
                    'articles' => $data['articles'],
                    'totalResults' => $data['totalResults']
                ]);
            } else {
                return $this->json([
                    'success' => false,
                    'error' => $data['message'] ?? 'Unknown error'
                ], Response::HTTP_BAD_REQUEST);
            }
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'API Error: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}