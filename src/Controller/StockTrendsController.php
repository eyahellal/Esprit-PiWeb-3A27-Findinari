<?php
namespace App\Controller;

use App\Service\TwelveDataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StockTrendsController extends AbstractController
{
    #[Route('/stock/trend/{symbol}', name: 'stock_trend', requirements: ['symbol' => '.+'])]
    public function trend(string $symbol, TwelveDataService $twelveData): Response
    {
        $symbol = urldecode($symbol);

        try {
            $data = $twelveData->getStockTimeSeries($symbol, '1day', 30);

            $dates  = [];
            $values = [];

            if (isset($data['values']) && is_array($data['values'])) {
                // L'API retourne du plus récent au plus ancien — on inverse
                $reversed = array_reverse($data['values']);
                foreach ($reversed as $point) {
                    $dates[]  = $point['datetime'];
                    $values[] = (float) $point['close'];
                }
            }

            return $this->render('trends/stock_trend.html.twig', [
                'symbol' => $symbol,
                'dates'  => json_encode($dates),
                'values' => json_encode($values),
                'name'   => $data['meta']['name'] ?? $symbol,
            ]);

        } catch (\Exception $e) {
            return $this->render('trends/stock_trend.html.twig', [
                'symbol' => $symbol,
                'dates'  => '[]',
                'values' => '[]',
                'name'   => $symbol,
                'error'  => $e->getMessage(),
            ]);
        }
    }
}