<?php
// src/Controller/objective/MlPredictionController.php

namespace App\Controller\objective;

use App\Repository\ObjectifRepository;
use App\Service\GoalStatisticsService;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\user\Utilisateur;
#[Route('/ml')]
class MlPredictionController extends AbstractController
{
    private string $mlScriptPath;
    private string $pythonBin;
    private bool   $isWindows;

    public function __construct(string $projectDir)
    {
        $this->mlScriptPath = $projectDir . DIRECTORY_SEPARATOR . 'ml'
                            . DIRECTORY_SEPARATOR . 'scripts'
                            . DIRECTORY_SEPARATOR . 'ml_service.py';

        $this->isWindows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        $this->pythonBin = $this->isWindows ? 'python' : 'python3';
    }

    // ─────────────────────────────────────────────────────────────────────────
    // HELPER : appelle ml_service.py via fichier temporaire
    // ─────────────────────────────────────────────────────────────────────────
    private function callMlService(array $data): ?array
    {
        if (!file_exists($this->mlScriptPath)) {
            return null;
        }

        // Écrire le JSON dans un fichier temporaire
        $tmpFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'ml_input_' . uniqid() . '.json';
        file_put_contents($tmpFile, json_encode($data, JSON_UNESCAPED_UNICODE));

        $script  = $this->mlScriptPath;

        // ⭐ FIX 1 : forcer UTF-8 sur Windows via PYTHONIOENCODING
        $env     = $this->isWindows ? 'set PYTHONIOENCODING=utf-8 && ' : '';
        $command = "{$env}{$this->pythonBin} \"{$script}\" predict-file \"{$tmpFile}\" 2>&1";

        $output  = shell_exec($command);
        @unlink($tmpFile);

        if (!$output) {
            return null;
        }

        // ⭐ FIX 2 : convertir l'encodage Windows (CP1252) → UTF-8 si nécessaire
        if ($this->isWindows && !mb_check_encoding($output, 'UTF-8')) {
            $output = mb_convert_encoding($output, 'UTF-8', 'CP1252');
        }

        // ⭐ FIX 3 : le JSON est sur plusieurs lignes (indent=2)
        //    On extrait tout le bloc JSON en cherchant { ... }
        if (preg_match('/\{[^{]*"va_atteindre".*\}/s', $output, $matches)) {
            $jsonStr = $matches[0];
        } else {
            return null;
        }

        $result = json_decode($jsonStr, true);
        return (is_array($result) && !isset($result['error'])) ? $result : null;
    }

    // ─────────────────────────────────────────────────────────────────────────
    // HELPER : construit le vecteur de features depuis un objectif
    // ─────────────────────────────────────────────────────────────────────────
    private function buildFeatures(
        $objectif,
        float $walletSolde,
        GoalStatisticsService $goalStats
    ): array {
        $stats        = $goalStats->compute($objectif);
        $totalContrib = (float) ($stats['totalCollected'] ?? 0);
        $nbContrib    = $objectif->getContributiongoals()->count();

        $dateDebut        = $objectif->getDateDebut();
        $joursdepuisDebut = $dateDebut
            ? (int) $dateDebut->diff(new \DateTime())->days
            : 0;

        $contribs         = $objectif->getContributiongoals()->toArray();
        $joursSansContrib = $joursdepuisDebut;
        if (!empty($contribs)) {
            usort($contribs, fn($a, $b) => $b->getDate() <=> $a->getDate());
            $joursSansContrib = (int) $contribs[0]->getDate()->diff(new \DateTime())->days;
        }

        $freqContribMois = $joursdepuisDebut > 0
            ? round($nbContrib / ($joursdepuisDebut / 30), 4)
            : 0.0;

        return [
            'montant_cible'       => (float) $objectif->getMontant(),
            'duree_mois'          => (int)   ($objectif->getDuree() ?? 12),
            'wallet_solde'        => $walletSolde,
            'total_contributions' => $totalContrib,
            'nb_contributions'    => $nbContrib,
            'freq_contrib_mois'   => $freqContribMois,
            'jours_depuis_debut'  => $joursdepuisDebut,
            'jours_sans_contrib'  => $joursSansContrib,
        ];
    }

    // ─────────────────────────────────────────────────────────────────────────
    // DASHBOARD
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/dashboard', name: 'ml_dashboard', methods: ['GET'])]
    public function dashboard(
        ObjectifRepository    $objectifRepo,
        GoalStatisticsService $goalStats,
        Connection            $connection,
        Request               $request
    ): Response {
        $user   = $this->getUser();
        $userId = ($user instanceof Utilisateur) ? $user->getId() : 1;

        $walletsRaw = $connection->fetchAllAssociative(
            'SELECT id, pays, devise, solde FROM wallet WHERE utilisateur_id = ?',
            [$userId]
        );

        $walletsMap = [];
        foreach ($walletsRaw as $w) {
            $walletsMap[$w['id']] = $w;
        }

        $walletIds = array_column($walletsRaw, 'id');
        $objectifs = $walletIds
            ? $objectifRepo->findBy(['walletId' => $walletIds])
            : [];

        $predictions = [];
        foreach ($objectifs as $objectif) {
            if ($objectif->getStatut() === 'TERMINE') {
                continue;
            }

            $walletId    = $objectif->getWalletId();
            $walletData  = $walletsMap[$walletId] ?? null;
            $walletSolde = $walletData ? (float) $walletData['solde'] : 0.0;

            $features   = $this->buildFeatures($objectif, $walletSolde, $goalStats);
            $prediction = $this->callMlService($features);

            if (!$prediction) {
                $prediction = [
                    'va_atteindre'       => false,
                    'probabilite_succes' => 0.0,
                    'pct_prevu'          => 0.0,
                    'jours_restants'     => 0,
                    'date_fin_estimee'   => 'N/A',
                    'niveau_risque'      => 'ÉLEVÉ',
                    'recommandation'     => 'Impossible de calculer la prédiction.',
                ];
            }

            $predictions[] = [
                'objectif'   => $objectif,
                'stats'      => $goalStats->compute($objectif),
                'prediction' => $prediction,
                'wallet'     => $walletData,
            ];
        }

        return $this->render('ml/ml_dashboard.html.twig', [
            'predictions' => $predictions,
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    // PREDICT JSON
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/predict/{id}', name: 'objectif_ml_predict', methods: ['GET'])]
    public function predict(
        int                   $id,
        ObjectifRepository    $objectifRepo,
        GoalStatisticsService $goalStats,
        Connection            $connection
    ): JsonResponse {
        $objectif = $objectifRepo->find($id);

        if (!$objectif) {
            return $this->json(['error' => 'Objectif introuvable.'], 404);
        }

        $wallet = $connection->fetchAssociative(
            'SELECT solde FROM wallet WHERE id = ?',
            [$objectif->getWalletId()]
        );
        $walletSolde = $wallet ? (float) $wallet['solde'] : 0.0;

        $features   = $this->buildFeatures($objectif, $walletSolde, $goalStats);
        $prediction = $this->callMlService($features);

        if (!$prediction) {
            return new JsonResponse(
                json_encode(['error' => 'Erreur ML.', 'features' => $features], JSON_UNESCAPED_UNICODE),
                500,
                ['Content-Type' => 'application/json'],
                true   // $json = true → pas de double-encodage
            );
        }

        return new JsonResponse(
            json_encode(array_merge($prediction, ['features_envoyees' => $features]), JSON_UNESCAPED_UNICODE),
            200,
            ['Content-Type' => 'application/json'],
            true
        );
    }

    // ─────────────────────────────────────────────────────────────────────────
    // HEALTH
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/health', name: 'ml_health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        $scriptExists = file_exists($this->mlScriptPath);
        $modelsDir    = dirname($this->mlScriptPath, 2) . DIRECTORY_SEPARATOR . 'models';
        $metaExists   = file_exists($modelsDir . DIRECTORY_SEPARATOR . 'meta.json');
        $python       = trim(shell_exec("{$this->pythonBin} --version 2>&1") ?? 'non trouvé');

        return $this->json([
            'status'       => ($scriptExists && $metaExists) ? 'ok' : 'error',
            'script_path'  => $this->mlScriptPath,
            'script_found' => $scriptExists,
            'models_dir'   => $modelsDir,
            'meta_found'   => $metaExists,
            'python'       => $python,
            'os'           => PHP_OS,
            'is_windows'   => $this->isWindows,
        ]);
    }
}