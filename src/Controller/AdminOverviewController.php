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
        $activeUsers = (int) $connection->fetchOne("SELECT COUNT(*) FROM utilisateur WHERE statut IN ('ACTIF','ACTIVE')");
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
                ), 2
            ) FROM feedback
        ");
        $satisfactionRate = $satisfactionRate !== false ? (float) $satisfactionRate : 0;

        $faceEnabledUsers = (int) $connection->fetchOne("
            SELECT COUNT(*) FROM utilisateur WHERE face_enabled = 1
        ");

        $walletTotalsByCurrency = $connection->fetchAllAssociative("
            SELECT devise, COUNT(*) AS total_wallets, COALESCE(SUM(solde),0) AS total_balance
            FROM wallet GROUP BY devise
        ");

        $walletsByCountry = $connection->fetchAllAssociative("
            SELECT pays, COUNT(*) AS total FROM wallet GROUP BY pays
        ");

        $usersByRole = $connection->fetchAllAssociative("
            SELECT role, COUNT(*) AS total FROM utilisateur GROUP BY role
        ");

        $usersGrowth = $connection->fetchAllAssociative("
            SELECT DATE(dateCreation) AS day, COUNT(*) AS total
            FROM utilisateur GROUP BY DATE(dateCreation)
        ");

        $feedbackDistribution = $connection->fetchAllAssociative("
            SELECT rating, COUNT(*) AS total FROM feedback GROUP BY rating
        ");

        $feedbackTimeline = $connection->fetchAllAssociative("
            SELECT DATE(created_at) AS day, COUNT(*) AS total
            FROM feedback GROUP BY DATE(created_at)
        ");

        $recentFeedbacks = $connection->fetchAllAssociative("
            SELECT id, user_email, rating, message, created_at
            FROM feedback ORDER BY created_at DESC LIMIT 20
        ");

        // ML
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
            $projectDir = $this->getParameter('kernel.project_dir');

            if (!is_string($projectDir)) {
                throw new \RuntimeException('Invalid project dir');
            }

            $process = new Process([
                'python',
                $projectDir . '/src/ml/analyze_feedbacks.py'
            ]);

            $process->setWorkingDirectory($projectDir . '/src/ml');

            $json = json_encode($recentFeedbacks);
            if ($json === false) {
                throw new \RuntimeException('JSON encode failed');
            }

            $process->setInput($json);
            $process->run();

            if ($process->isSuccessful()) {
                $decoded = json_decode($process->getOutput(), true);
                if (is_array($decoded)) {
                    $mlAnalysis = $decoded;
                }
            }

        } catch (\Throwable $e) {
            $ollamaAdvice = $e->getMessage();
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
            'recentFeedbacks' => $recentFeedbacks,

            'walletCurrencyLabels' => array_map(fn ($r) => $r['devise'], $walletTotalsByCurrency),
            'walletCurrencyCounts' => array_map(fn ($r) => (int) $r['total_wallets'], $walletTotalsByCurrency),
            'walletCurrencyBalances' => array_map(fn ($r) => (float) $r['total_balance'], $walletTotalsByCurrency),

            'countryLabels' => array_map(fn ($r) => $r['pays'], $walletsByCountry),
            'countryValues' => array_map(fn ($r) => (int) $r['total'], $walletsByCountry),

            'roleLabels' => array_map(fn ($r) => $r['role'], $usersByRole),
            'roleValues' => array_map(fn ($r) => (int) $r['total'], $usersByRole),

            'feedbackLabels' => array_map(fn ($r) => 'Rating '.$r['rating'], $feedbackDistribution),
            'feedbackValues' => array_map(fn ($r) => (int) $r['total'], $feedbackDistribution),

            'feedbackTimelineLabels' => array_map(fn ($r) => $r['day'], $feedbackTimeline),
            'feedbackTimelineValues' => array_map(fn ($r) => (int) $r['total'], $feedbackTimeline),

            'usersGrowthLabels' => array_map(fn ($r) => $r['day'], $usersGrowth),
            'usersGrowthValues' => array_map(fn ($r) => (int) $r['total'], $usersGrowth),

            'mlAnalysis' => $mlAnalysis,
            'ollamaAdvice' => $ollamaAdvice,
        ]);
    }
}