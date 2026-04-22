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
    private $newsApiUrl;
    private $newsApiKey;
    
    public function __construct(HttpClientInterface $httpClient, string $newsApiUrl, string $newsApiKey)
    {
        $this->httpClient = $httpClient;
        $this->newsApiUrl = $newsApiUrl;
        $this->newsApiKey = $newsApiKey;
    }
    
    #[Route('/', name: 'api_news_all', methods: ['GET'])]
    public function getAllNews(Request $request): JsonResponse
    {
        $search = $request->query->get('search', 'finance investment economy');
        $url = $this->newsApiUrl . '/everything?q=' . urlencode($search) . '&language=en&sortBy=publishedAt&apiKey=' . $this->newsApiKey;
        
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
    
    #[Route('/top-headlines', name: 'api_news_top', methods: ['GET'])]
    public function getTopHeadlines(): JsonResponse
    {
        $url = $this->newsApiUrl . '/top-headlines?country=us&category=business&apiKey=' . $this->newsApiKey;
        
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
    
    #[Route('/financial', name: 'api_news_financial', methods: ['GET'])]
    public function getFinancialNews(): JsonResponse
    {
        $url = $this->newsApiUrl . '/everything?q=finance%20OR%20investment%20OR%20economy&language=en&sortBy=publishedAt&apiKey=' . $this->newsApiKey;
        
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
                ]);
            }
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'API Error: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    #[Route('/crypto', name: 'api_news_crypto', methods: ['GET'])]
    public function getCryptoNews(): JsonResponse
    {
        $url = $this->newsApiUrl . '/everything?q=cryptocurrency%20OR%20bitcoin%20OR%20ethereum&language=en&sortBy=publishedAt&apiKey=' . $this->newsApiKey;
        
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
                ]);
            }
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'API Error: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    #[Route('/search', name: 'api_news_search', methods: ['GET'])]
    public function searchNews(Request $request): JsonResponse
    {
        $query = $request->query->get('q', 'finance');
        $url = $this->newsApiUrl . '/everything?q=' . urlencode($query) . '&language=en&sortBy=relevancy&apiKey=' . $this->newsApiKey;
        
        try {
            $response = $this->httpClient->request('GET', $url);
            $data = $response->toArray();
            
            if ($data['status'] === 'ok') {
                return $this->json([
                    'success' => true,
                    'query' => $query,
                    'articles' => $data['articles'],
                    'totalResults' => $data['totalResults']
                ]);
            } else {
                return $this->json([
                    'success' => false,
                    'error' => $data['message'] ?? 'Unknown error'
                ]);
            }
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'API Error: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}