<?php
// src/Controller/MarketTrendsController.php

namespace App\Controller;

use App\Service\TwelveDataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MarketTrendsController extends AbstractController
{
    /**
     * On définit précisément le type pour éviter l'erreur missingType.iterableValue
     * @var array<string, list<string>>
     */
    private array $categories = [
        'Actions Tech'  => ['AAPL', 'MSFT', 'GOOGL', 'META', 'NVDA'],
        'Actions Santé' => ['JNJ', 'PFE', 'UNH'],
    ];

    #[Route('/market/trends', name: 'market_trends')]
    public function index(TwelveDataService $twelveData): Response
    {
        /** 
         * array_merge sur des listes produit une liste. 
         * On retire array_values ici pour éviter l'erreur "call has no effect".
         * @var list<string> $allSymbols 
         */
        $allSymbols = array_merge(...array_values($this->categories));

        try {
            // PHPStan sait maintenant que $allSymbols est une list<string>
            $quotes = $twelveData->getMultipleQuotes($allSymbols);
        } catch (\Exception $e) {
            $quotes = [];
        }

        return $this->render('trends/market_trends.html.twig', [
            'categories' => $this->categories,
            'quotes'     => $quotes,
        ]);
    }
}


