<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/api/crypto')]
class CryptoApiController extends AbstractController
{
    private $httpClient;
    
    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }
    
    #[Route('/prices', name: 'api_crypto_prices', methods: ['GET'])]
    public function getCryptoPrices(): JsonResponse
    {
        $url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,ripple,cardano,dogecoin,solana,polkadot,chainlink,uniswap,litecoin&vs_currencies=usd,eur&include_24hr_change=true';
        
        try {
            $response = $this->httpClient->request('GET', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                ]
            ]);
            $data = $response->toArray();
            
            return $this->json([
                'success' => true,
                'prices' => $data
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to fetch crypto prices: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    #[Route('/market-data', name: 'api_crypto_market', methods: ['GET'])]
    public function getMarketData(): JsonResponse
    {
        $url = 'https://api.coingecko.com/api/v3/global';
        
        try {
            $response = $this->httpClient->request('GET', $url);
            $data = $response->toArray();
            
            return $this->json([
                'success' => true,
                'market' => $data['data'] ?? []
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to fetch market data'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}