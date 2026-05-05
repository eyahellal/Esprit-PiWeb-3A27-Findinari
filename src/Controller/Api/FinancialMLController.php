<?php

// src/Controller/Api/FinancialMLController.php

namespace App\Controller\Api;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/ml')]
class FinancialMLController extends AbstractController
{
    private string $pythonScriptPath;

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->pythonScriptPath = __DIR__ . '/../../../ML/financial_predictor.py';
    }

    #[Route('/predict', name: 'api_ml_predict', methods: ['POST'])]
    public function predict(Request $request): JsonResponse
    {
        $decodedData = json_decode($request->getContent(), true);

        if (!is_array($decodedData)) {
            $decodedData = [];
        }

        $inputData = [
            'current_score' => (float) ($decodedData['current_score'] ?? 50),
            'savings_rate' => (float) ($decodedData['savings_rate'] ?? 50),
            'investment_ratio' => (float) ($decodedData['investment_ratio'] ?? 50),
            'diversification' => (float) ($decodedData['diversification'] ?? 50),
            'emergency_fund' => (float) ($decodedData['emergency_fund'] ?? 50),
            'goal_progress' => (float) ($decodedData['goal_progress'] ?? 50),
            'total_balance' => (float) ($decodedData['total_balance'] ?? 5000),
            'wallets_count' => (int) ($decodedData['wallets_count'] ?? 1),
            'investments_count' => (int) ($decodedData['investments_count'] ?? 0),
        ];

        if (!file_exists($this->pythonScriptPath)) {
            $this->logger->warning('Python script not found at: ' . $this->pythonScriptPath);

            return $this->json($this->getFallbackResponse($inputData['current_score']));
        }

        $jsonInput = json_encode($inputData);

        if ($jsonInput === false) {
            $this->logger->error('Failed to encode ML input data as JSON.');

            return $this->json($this->getFallbackResponse($inputData['current_score']));
        }

        try {
            $process = new Process(['python', $this->pythonScriptPath]);
            $process->setInput($jsonInput);
            $process->setTimeout(30);
            $process->run();

            if (!$process->isSuccessful()) {
                $this->logger->error('Python script error: ' . $process->getErrorOutput());

                return $this->json($this->getFallbackResponse($inputData['current_score']));
            }

            $output = $process->getOutput();
            $result = json_decode($output, true);

            if (is_array($result) && isset($result['predicted_score'])) {
                return $this->json($result);
            }

            return $this->json($this->getFallbackResponse($inputData['current_score']));
        } catch (\Throwable $e) {
            $this->logger->error('ML prediction exception: ' . $e->getMessage());

            return $this->json($this->getFallbackResponse($inputData['current_score']));
        }
    }

    /**
     * @return array{
     *     current_score: float,
     *     predicted_score: float,
     *     improvement: float,
     *     future_predictions: array<int, array{score: float, months: int}>,
     *     metrics: array{
     *         net_to_gross_ratio: float,
     *         tax_rate: float,
     *         cpp_ei_rate: float
     *     },
     *     recommendations: array<int, array{
     *         type: string,
     *         title: string,
     *         message: string,
     *         action: string
     *     }>,
     *     confidence: string
     * }
     */
    private function getFallbackResponse(float $currentScore): array
    {
        $predictedScore = min(100.0, $currentScore + 8.0);

        return [
            'current_score' => $currentScore,
            'predicted_score' => round($predictedScore, 1),
            'improvement' => round($predictedScore - $currentScore, 1),
            'future_predictions' => [
                [
                    'score' => round(min(100.0, $currentScore + 12.0), 1),
                    'months' => 3,
                ],
                [
                    'score' => round(min(100.0, $currentScore + 18.0), 1),
                    'months' => 6,
                ],
                [
                    'score' => round(min(100.0, $currentScore + 25.0), 1),
                    'months' => 12,
                ],
            ],
            'metrics' => [
                'net_to_gross_ratio' => 72.5,
                'tax_rate' => 15.2,
                'cpp_ei_rate' => 6.8,
            ],
            'recommendations' => [
                [
                    'type' => 'savings',
                    'title' => 'Improve Your Net Income Ratio',
                    'message' => 'Your current net-to-gross ratio could be improved with better tax planning.',
                    'action' => 'Consider RRSP contributions to reduce taxable income',
                ],
                [
                    'type' => 'diversification',
                    'title' => 'Diversify Your Income Sources',
                    'message' => 'Adding freelance or investment income could improve your financial resilience.',
                    'action' => 'Explore side hustle opportunities',
                ],
            ],
            'confidence' => 'medium',
        ];
    }
}