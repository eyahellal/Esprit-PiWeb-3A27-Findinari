<?php

namespace App\Service;

class IsolationForest
{
    private int   $nEstimators;
    private int   $maxSamples;
    private float $contamination;
    private array $trees = [];

    public function __construct(
        int   $nEstimators  = 100,
        int   $maxSamples   = 256,
        float $contamination = 0.1
    ) {
        $this->nEstimators   = $nEstimators;
        $this->maxSamples    = $maxSamples;
        $this->contamination = $contamination;
    }

    // ── ENTRAÎNER LE MODÈLE ──────────────────────────────────────
    public function fit(array $X): self
    {
        $this->trees = [];
        $n = count($X);
        $sampleSize = min($this->maxSamples, $n);

        for ($i = 0; $i < $this->nEstimators; $i++) {
            // Sous-échantillon aléatoire
            $indices = array_rand($X, $sampleSize);
            if (!is_array($indices)) $indices = [$indices];
            $sample = array_map(fn($idx) => $X[$idx], $indices);

            $maxDepth = (int) ceil(log($sampleSize, 2));
            $this->trees[] = $this->buildTree($sample, 0, $maxDepth);
        }

        return $this;
    }

    // ── SCORES D'ANOMALIE ────────────────────────────────────────
    // Retourne un score entre -1 (très anormal) et 0 (normal)
    public function scoresSamples(array $X): array
    {
        $scores = [];
        $n = count($X);

        foreach ($X as $point) {
            $pathLengths = [];
            foreach ($this->trees as $tree) {
                $pathLengths[] = $this->pathLength($point, $tree, 0);
            }
            $avgPath = array_sum($pathLengths) / count($pathLengths);
            $cn = $this->cFactor(min($this->maxSamples, $n));

            // Score normalisé : proche de -0.5 = normal, proche de -1 = anomalie
            $scores[] = -pow(2, -$avgPath / max($cn, 1e-10));
        }

        return $scores;
    }

    // ── PRÉDIRE (-1 anomalie, 1 normal) ─────────────────────────
    public function predict(array $X): array
    {
        $scores    = $this->scoresSamples($X);
        $threshold = $this->computeThreshold($scores);

        return array_map(fn($s) => $s < $threshold ? -1 : 1, $scores);
    }

    // ── CONSTRUCTION D'UN ARBRE ──────────────────────────────────
    private function buildTree(array $X, int $depth, int $maxDepth): array
    {
        $n = count($X);

        // Feuille si trop profond ou un seul point
        if ($depth >= $maxDepth || $n <= 1) {
            return ['type' => 'leaf', 'size' => $n];
        }

        $nFeatures = count($X[0]);
        $featureIdx = rand(0, $nFeatures - 1);

        // Min/Max de la feature choisie
        $values = array_column($X, $featureIdx);
        $min = min($values);
        $max = max($values);

        if ($min >= $max) {
            return ['type' => 'leaf', 'size' => $n];
        }

        // Split aléatoire
        $splitValue = $min + lcg_value() * ($max - $min);

        $left  = array_values(array_filter($X, fn($p) => $p[$featureIdx] < $splitValue));
        $right = array_values(array_filter($X, fn($p) => $p[$featureIdx] >= $splitValue));

        if (empty($left) || empty($right)) {
            return ['type' => 'leaf', 'size' => $n];
        }

        return [
            'type'        => 'node',
            'feature'     => $featureIdx,
            'splitValue'  => $splitValue,
            'left'        => $this->buildTree($left,  $depth + 1, $maxDepth),
            'right'       => $this->buildTree($right, $depth + 1, $maxDepth),
        ];
    }

    // ── LONGUEUR DU CHEMIN D'UN POINT DANS UN ARBRE ──────────────
    private function pathLength(array $point, array $node, int $depth): float
    {
        if ($node['type'] === 'leaf') {
            return $depth + $this->cFactor($node['size']);
        }

        if ($point[$node['feature']] < $node['splitValue']) {
            return $this->pathLength($point, $node['left'],  $depth + 1);
        } else {
            return $this->pathLength($point, $node['right'], $depth + 1);
        }
    }

    // ── FACTEUR DE NORMALISATION ─────────────────────────────────
    private function cFactor(int $n): float
    {
        if ($n <= 1) return 0.0;
        if ($n === 2) return 1.0;
        return 2.0 * (log($n - 1) + 0.5772156649) - (2.0 * ($n - 1) / $n);
    }

    // ── SEUIL AUTOMATIQUE ────────────────────────────────────────
    private function computeThreshold(array $scores): float
    {
        $sorted = $scores;
        sort($sorted);
        $idx = (int) floor($this->contamination * count($sorted));
        return $sorted[$idx];
    }
}