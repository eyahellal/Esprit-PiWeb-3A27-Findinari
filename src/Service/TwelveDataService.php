<?php
namespace App\Service;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TwelveDataService
{
    private FilesystemAdapter $cache;

    public function __construct(
        private HttpClientInterface $client,
        private string $apiKey
    ) {
        $this->cache = new FilesystemAdapter('twelvedata', 3600); // cache 1h
    }

    public function getStockTimeSeries(string $symbol, string $interval = '1day', int $outputsize = 30): array
    {
        $cacheKey = 'stock_' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($symbol)) . '_' . $interval . '_' . $outputsize;

        return $this->cache->get($cacheKey, function (ItemInterface $item) use ($symbol, $interval, $outputsize) {
            $item->expiresAfter(3600); // 1 heure

            $response = $this->client->request('GET', 'https://api.twelvedata.com/time_series', [
                'query' => [
                    'symbol'     => $symbol,
                    'interval'   => $interval,
                    'outputsize' => $outputsize,
                    'apikey'     => $this->apiKey,
                ]
            ]);

            $data = $response->toArray(false);

            // Erreur API (rate limit, symbole invalide, etc.)
            if (isset($data['status']) && $data['status'] === 'error') {
                // Cache court pour les erreurs (5 min) pour réessayer vite
                $item->expiresAfter(300);
                throw new \RuntimeException($data['message'] ?? 'Erreur API TwelveData');
            }

            if (!isset($data['values']) || empty($data['values'])) {
                $item->expiresAfter(300);
                throw new \RuntimeException('Aucune donnée retournée pour ' . $symbol);
            }

            return $data;
        });
    }

    public function searchSymbol(string $query): array
    {
        $cacheKey = 'search_' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($query));

        return $this->cache->get($cacheKey, function (ItemInterface $item) use ($query) {
            $item->expiresAfter(86400); // 24h pour la recherche

            $response = $this->client->request('GET', 'https://api.twelvedata.com/symbol_search', [
                'query' => [
                    'symbol' => $query,
                    'apikey' => $this->apiKey,
                ]
            ]);

            $data = $response->toArray(false);
            return $data['data'] ?? [];
        });
    }
    public function getMultipleQuotes(array $symbols): array
{
    $results = [];

    foreach ($symbols as $symbol) {
        $cacheKey = 'quote_' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($symbol));

        try {
            $quote = $this->cache->get($cacheKey, function (ItemInterface $item) use ($symbol) {
                $item->expiresAfter(300); // 5 minutes pour les quotes (prix temps réel)

                $response = $this->client->request('GET', 'https://api.twelvedata.com/quote', [
                    'query' => [
                        'symbol' => $symbol,
                        'apikey' => $this->apiKey,
                    ]
                ]);

                $data = $response->toArray(false);

                if (isset($data['status']) && $data['status'] === 'error') {
                    throw new \RuntimeException($data['message'] ?? 'Erreur API');
                }

                return $data;
            });

            $results[$symbol] = $quote;

        } catch (\Exception $e) {
            // Si une action échoue, on continue avec les autres
            $results[$symbol] = null;
        }
    }

    return $results;
}
}