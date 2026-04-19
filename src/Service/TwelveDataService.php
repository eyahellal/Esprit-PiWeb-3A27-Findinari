<?php
// src/Service/TwelveDataService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;

class TwelveDataService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private CacheInterface $cache,
        private string $apiKey,
    ) {}

    public function getStockTimeSeries(string $symbol, string $interval = '1day', int $outputSize = 30): array
    {
        $cacheKey = 'twelve_data_ts_' . $symbol . '_' . $interval . '_' . $outputSize;
        return $this->cache->get($cacheKey, function() use ($symbol, $interval, $outputSize) {
            $response = $this->httpClient->request('GET', 'https://api.twelvedata.com/time_series', [
                'query' => [
                    'symbol'     => $symbol,
                    'interval'   => $interval,
                    'outputsize' => $outputSize,
                    'apikey'     => $this->apiKey,
                ],
            ]);
            $data = $response->toArray();
            if (isset($data['code']) && $data['code'] !== 200) {
                throw new \RuntimeException($data['message'] ?? 'Erreur API Twelve Data');
            }
            return $data;
        });
    }

    public function getMultipleQuotes(array $symbols): array
    {
        $symbolStr = implode(',', $symbols);
        $response = $this->httpClient->request('GET', 'https://api.twelvedata.com/quote', [
            'query' => [
                'symbol' => $symbolStr,
                'apikey' => $this->apiKey,
            ],
        ]);
        $data = $response->toArray();
        if (isset($data['symbol'])) {
            // Si un seul symbole, l'API retourne directement l'objet
            return [$data['symbol'] => $data];
        }
        return $data;
    }
}