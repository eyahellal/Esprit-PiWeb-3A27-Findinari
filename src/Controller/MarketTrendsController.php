<?php
// src/Controller/MarketTrendsController.php

namespace App\Controller;

use App\Service\TwelveDataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MarketTrendsController extends AbstractController
{
    private array $categories = [
     'Actions Tech'    => ['AAPL', 'MSFT', 'GOOGL', 'META', 'NVDA'],
    'Actions Santé'   => ['JNJ', 'PFE', 'UNH'],
        
     
];


 #[Route('/market/trends', name: 'market_trends')]
public function index(TwelveDataService $twelveData): Response
{
    $allSymbols = array_merge(...array_values($this->categories));

    try {
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