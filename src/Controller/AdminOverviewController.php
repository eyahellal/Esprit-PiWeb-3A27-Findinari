<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Attribute\Route;

class AdminOverviewController extends AbstractController
{
    #[Route('/admin/overview-dashboard', name: 'app_admin_overview_dashboard')]
    public function index(Connection $connection): Response
    {
        $totalUsers = (int) $connection->fetchOne("SELECT COUNT(*) FROM utilisateur");
        $activeUsers = (int) $connection->fetchOne("SELECT COUNT(*) FROM utilisateur WHERE statut IN ('ACTIF', 'ACTIVE')");
        $totalWallets = (int) $connection->fetchOne("SELECT COUNT(*) FROM wallet");
        $totalFeedbacks = (int) $connection->fetchOne("SELECT COUNT(*) FROM feedback");

        $totalObligationInvestments = (int) $connection->fetchOne("SELECT COUNT(*) FROM investissementobligation");
        $totalActionPortfolios = (int) $connection->fetchOne("SELECT COUNT(*) FROM portefeuilleaction");
        $totalInvestments = $totalObligationInvestments + $totalActionPortfolios;

        $averageRating = $connection->fetchOne("SELECT ROUND(AVG(rating), 2) FROM feedback");
        $averageRating = $averageRating !== false ? (float) $averageRating : 0;

        $satisfactionRate = $connection->fetchOne("
            SELECT ROUND(
                COALESCE(
                    (SUM(CASE WHEN rating >= 4 THEN 1 ELSE 0 END) * 100.0) / NULLIF(COUNT(*), 0),
                    0
                ),
            2)
            FROM feedback
        ");
        $satisfactionRate = $satisfactionRate !== false ? (float) $satisfactionRate : 0;

        $faceEnabledUsers = (int) $connection->fetchOne("
            SELECT COUNT(*) FROM utilisateur WHERE face_enabled = 1
        ");

        $walletTotalsByCurrency = $connection->fetchAllAssociative("
            SELECT devise, COUNT(*) AS total_wallets, COALESCE(SUM(solde), 0) AS total_balance
            FROM wallet
            GROUP BY devise
            ORDER BY total_balance DESC
        ");

        $walletsByCountry = $connection->fetchAllAssociative("
            SELECT pays, COUNT(*) AS total
            FROM wallet
            GROUP BY pays
            ORDER BY total DESC, pays ASC
        ");

        $usersByRole = $connection->fetchAllAssociative("
            SELECT role, COUNT(*) AS total
            FROM utilisateur
            GROUP BY role
            ORDER BY total DESC
        ");

        $usersGrowth = $connection->fetchAllAssociative("
            SELECT DATE(dateCreation) AS day, COUNT(*) AS total
            FROM utilisateur
            GROUP BY DATE(dateCreation)
            ORDER BY day ASC
        ");

        $feedbackDistribution = $connection->fetchAllAssociative("
            SELECT rating, COUNT(*) AS total
            FROM feedback
            GROUP BY rating
            ORDER BY rating ASC
        ");

        $feedbackTimeline = $connection->fetchAllAssociative("
            SELECT DATE(created_at) AS day, COUNT(*) AS total
            FROM feedback
            GROUP BY DATE(created_at)
            ORDER BY day ASC
        ");

        $obligationInvestmentStats = $connection->fetchAssociative("
            SELECT COUNT(*) AS total_count,
                   COALESCE(SUM(montantInvesti), 0) AS total_amount,
                   COALESCE(AVG(montantInvesti), 0) AS average_amount
            FROM investissementobligation
        ");

        $portfolioStats = $connection->fetchAssociative("
            SELECT COUNT(*) AS total_count,
                   COALESCE(AVG(rendement), 0) AS average_rendement,
                   COALESCE(MAX(rendement), 0) AS max_rendement
            FROM portefeuilleaction
        ");

        $recentUsers = $connection->fetchAllAssociative("
            SELECT id, nom, prenom, gmail, role, statut, dateCreation
            FROM utilisateur
            ORDER BY dateCreation DESC
            LIMIT 8
        ");

        $recentFeedbacks = $connection->fetchAllAssociative("
            SELECT id, user_email, rating, message, created_at
            FROM feedback
            ORDER BY created_at DESC
            LIMIT 20
        ");

        $mlAnalysis = [
            'total_feedbacks' => 0,
            'positive' => 0,
            'negative' => 0,
            'neutral' => 0,
            'irrelevant' => 0,
            'results' => [],
        ];

        $ollamaAdvice = "No AI recommendation available.";

        try {
            $pythonScript = $this->getParameter('kernel.project_dir') . '/src/ml/analyze_feedbacks.py';
            $mlDirectory = $this->getParameter('kernel.project_dir') . '/src/ml';

            $process = new Process([
                'python',
                $pythonScript
            ]);

            $process->setWorkingDirectory($mlDirectory);
            $process->setInput(json_encode($recentFeedbacks));
            $process->setTimeout(300);
            $process->run();

            if (!$process->isSuccessful()) {
                $ollamaAdvice = "Python ML error: " . $process->getErrorOutput();
            } else {
                $decoded = json_decode($process->getOutput(), true);

                if (is_array($decoded)) {
                    $mlAnalysis = $decoded;
                }

                $prompt = "
You are an admin assistant for a financial web application called FinDinari.

Analyze this feedback sentiment report and give clear actions for the admin.

Rules:
- Be concise.
- Give practical admin decisions.
- Focus on user satisfaction, problems, and improvements.
- Answer in English.

Feedback analysis:
" . json_encode($mlAnalysis, JSON_PRETTY_PRINT);

                $client = HttpClient::create();

                $response = $client->request('POST', 'http://localhost:11434/api/generate', [
                    'json' => [
                        'model' => 'gemma3:1b',
                        'prompt' => $prompt,
                        'stream' => false,
                    ],
                    'timeout' => 120,
                ]);

                $ollamaData = $response->toArray(false);
                $ollamaAdvice = $ollamaData['response'] ?? "Ollama did not return advice.";
            }
        } catch (\Throwable $e) {
            $ollamaAdvice = "AI analysis error: " . $e->getMessage();
        }

        return $this->render('admin/dashboard_overview.html.twig', [
            'totalUsers' => $totalUsers,
            'activeUsers' => $activeUsers,
            'totalWallets' => $totalWallets,
            'totalFeedbacks' => $totalFeedbacks,
            'totalInvestments' => $totalInvestments,
            'averageRating' => $averageRating,
            'satisfactionRate' => $satisfactionRate,
            'faceEnabledUsers' => $faceEnabledUsers,

            'walletTotalsByCurrency' => $walletTotalsByCurrency,
            'walletsByCountry' => $walletsByCountry,
            'usersByRole' => $usersByRole,
            'recentUsers' => $recentUsers,
            'recentFeedbacks' => $recentFeedbacks,

            'obligationInvestmentStats' => $obligationInvestmentStats,
            'portfolioStats' => $portfolioStats,

            'usersGrowthLabels' => array_map(fn ($row) => $row['day'], $usersGrowth),
            'usersGrowthValues' => array_map(fn ($row) => (int) $row['total'], $usersGrowth),

            'walletCurrencyLabels' => array_map(fn ($row) => $row['devise'], $walletTotalsByCurrency),
            'walletCurrencyCounts' => array_map(fn ($row) => (int) $row['total_wallets'], $walletTotalsByCurrency),
            'walletCurrencyBalances' => array_map(fn ($row) => (float) $row['total_balance'], $walletTotalsByCurrency),

            'countryLabels' => array_map(fn ($row) => $row['pays'], $walletsByCountry),
            'countryValues' => array_map(fn ($row) => (int) $row['total'], $walletsByCountry),

            'roleLabels' => array_map(fn ($row) => $row['role'], $usersByRole),
            'roleValues' => array_map(fn ($row) => (int) $row['total'], $usersByRole),

            'feedbackLabels' => array_map(fn ($row) => 'Rating ' . $row['rating'], $feedbackDistribution),
            'feedbackValues' => array_map(fn ($row) => (int) $row['total'], $feedbackDistribution),

            'feedbackTimelineLabels' => array_map(fn ($row) => $row['day'], $feedbackTimeline),
            'feedbackTimelineValues' => array_map(fn ($row) => (int) $row['total'], $feedbackTimeline),

            'investmentBreakdownLabels' => ['Obligations', 'Action Portfolios'],
            'investmentBreakdownValues' => [
                (int) ($obligationInvestmentStats['total_count'] ?? 0),
                (int) ($portfolioStats['total_count'] ?? 0),
            ],

            'mlAnalysis' => $mlAnalysis,
            'ollamaAdvice' => $ollamaAdvice,
        ]);
    }
}