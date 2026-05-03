<?php

namespace App\Controller;

use App\Service\TwelveDataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StockTrendsController extends AbstractController
{
    private const CATEGORIES = [
        'Big Tech'          => ['MSFT', 'AAPL', 'GOOGL', 'META'],
        'E-commerce'        => ['AMZN'],
        'Semi-conducteurs'  => ['NVDA'],
        'Automobile'        => ['TSLA'],
    ];

    // ─── Liste des tendances ────────────────────────────────────────────────
    #[Route('/trends', name: 'market_trends')]
    public function index(TwelveDataService $twelveData): Response
    {
        $allSymbols = array_merge(...array_values(self::CATEGORIES));
        $quotes     = $twelveData->getMultipleQuotes($allSymbols);

        return $this->render('trends/market_trends.html.twig', [
            'categories' => self::CATEGORIES,
            'quotes'     => $quotes,          // tableau indexé par symbol
        ]);
    }

    // ─── Détail graphique d'un symbole ─────────────────────────────────────
    #[Route('/stock/trend/{symbol}', name: 'stock_trend', requirements: ['symbol' => '.+'])]
    public function trend(string $symbol, TwelveDataService $twelveData): Response
    {
        $symbol = strtoupper(urldecode($symbol));

        try {
            $data = $twelveData->getStockTimeSeries($symbol, '1day', 30);

            $reversed = array_reverse($data['values']);
            $dates    = array_column($reversed, 'datetime');
            $values   = array_map(fn($p) => (float) $p['close'], $reversed);

            return $this->render('trends/stock_trend.html.twig', [
                'symbol' => $symbol,
                'name'   => $data['meta']['name'] ?? $symbol,
                'dates'  => json_encode($dates),
                'values' => json_encode($values),
                'error'  => null,
            ]);

        } catch (\Exception $e) {
            return $this->render('trends/stock_trend.html.twig', [
                'symbol' => $symbol,
                'name'   => $symbol,
                'dates'  => '[]',
                'values' => '[]',
                'error'  => $e->getMessage(),
            ]);
        }
    }
}