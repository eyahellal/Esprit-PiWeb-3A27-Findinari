<?php
// src/Controller/Api/FinancialMLController.php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

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
        $data = json_decode($request->getContent(), true);
        
        // Données par défaut si non fournies
        $inputData = [
            'current_score' => $data['current_score'] ?? 50,
            'savings_rate' => $data['savings_rate'] ?? 50,
            'investment_ratio' => $data['investment_ratio'] ?? 50,
            'diversification' => $data['diversification'] ?? 50,
            'emergency_fund' => $data['emergency_fund'] ?? 50,
            'goal_progress' => $data['goal_progress'] ?? 50,
            'total_balance' => $data['total_balance'] ?? 5000,
            'wallets_count' => $data['wallets_count'] ?? 1,
            'investments_count' => $data['investments_count'] ?? 0
        ];
        
        // Vérifier si le script Python existe
        if (!file_exists($this->pythonScriptPath)) {
            $this->logger->warning('Python script not found at: ' . $this->pythonScriptPath);
            return $this->json($this->getFallbackResponse($inputData['current_score']));
        }
        
        try {
            // Commande pour Windows
            $command = ['python', $this->pythonScriptPath];
            
            $process = new Process($command);
            $process->setInput(json_encode($inputData));
            $process->setTimeout(30);
            $process->run();
            
            if (!$process->isSuccessful()) {
                $error = $process->getErrorOutput();
                $this->logger->error('Python script error: ' . $error);
                return $this->json($this->getFallbackResponse($inputData['current_score']));
            }
            
            $output = $process->getOutput();
            $result = json_decode($output, true);
            
            if ($result && isset($result['predicted_score'])) {
                return $this->json($result);
            } else {
                return $this->json($this->getFallbackResponse($inputData['current_score']));
            }
            
        } catch (\Exception $e) {
            $this->logger->error('ML prediction exception: ' . $e->getMessage());
            return $this->json($this->getFallbackResponse($inputData['current_score']));
        }
    }
    
    private function getFallbackResponse(float $currentScore): array
    {
        $predictedScore = min(100, $currentScore + 8);
        
        return [
            'current_score' => $currentScore,
            'predicted_score' => round($predictedScore, 1),
            'improvement' => round($predictedScore - $currentScore, 1),
            'future_predictions' => [
                ['score' => round(min(100, $currentScore + 12), 1), 'months' => 3],
                ['score' => round(min(100, $currentScore + 18), 1), 'months' => 6],
                ['score' => round(min(100, $currentScore + 25), 1), 'months' => 12]
            ],
            'metrics' => [
                'net_to_gross_ratio' => 72.5,
                'tax_rate' => 15.2,
                'cpp_ei_rate' => 6.8
            ],
            'recommendations' => [
                [
                    'type' => 'savings',
                    'title' => '💪 Improve Your Net Income Ratio',
                    'message' => 'Your current net-to-gross ratio could be improved with better tax planning.',
                    'action' => 'Consider RRSP contributions to reduce taxable income'
                ],
                [
                    'type' => 'diversification',
                    'title' => '🔄 Diversify Your Income Sources',
                    'message' => 'Adding freelance or investment income could improve your financial resilience.',
                    'action' => 'Explore side hustle opportunities'
                ]
            ],
            'confidence' => 'medium'
        ];
    }
}