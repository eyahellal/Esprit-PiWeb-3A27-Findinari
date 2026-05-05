<?php

namespace App\Service;

class IsolationForest
{
    private int   $nEstimators;
    private int   $maxSamples;
    private float $contamination;

    /** @var array<int, array<string, mixed>> */
    private array $trees = [];

    public function __construct(
        int   $nEstimators   = 100,
        int   $maxSamples    = 256,
        float $contamination = 0.1
    ) {
        $this->nEstimators   = $nEstimators;
        $this->maxSamples    = $maxSamples;
        $this->contamination = $contamination;
    }

    /**
     * @param array<int, array<int, float>> $X
     */
    public function fit(array $X): self
    {
        $this->trees = [];
        $n = count($X);
        $sampleSize = min($this->maxSamples, $n);

        for ($i = 0; $i < $this->nEstimators; $i++) {
            $indices = array_rand($X, $sampleSize);
            if (!is_array($indices)) $indices = [$indices];
            $sample = array_map(fn($idx) => $X[$idx], $indices);

            $maxDepth = (int) ceil(log($sampleSize, 2));
            $this->trees[] = $this->buildTree($sample, 0, $maxDepth);
        }

        return $this;
    }

    /**
     * @param array<int, array<int, float>> $X
     * @return array<int, float>
     */
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

            $scores[] = -pow(2, -$avgPath / max($cn, 1e-10));
        }

        return $scores;
    }

    /**
     * @param array<int, array<int, float>> $X
     * @return array<int, int>
     */
    public function predict(array $X): array
    {
        $scores    = $this->scoresSamples($X);
        $threshold = $this->computeThreshold($scores);

        return array_map(fn($s) => $s < $threshold ? -1 : 1, $scores);
    }

    /**
     * @param array<int, array<int, float>> $X
     * @return array<string, mixed>
     */
    private function buildTree(array $X, int $depth, int $maxDepth): array
    {
        $n = count($X);

        if ($depth >= $maxDepth || $n <= 1) {
            return ['type' => 'leaf', 'size' => $n];
        }

        $nFeatures  = count($X[0]);
        $featureIdx = rand(0, $nFeatures - 1);

        $values = array_column($X, $featureIdx);

        // ✅ Fix min/max sur tableau potentiellement vide
        if (empty($values)) {
            return ['type' => 'leaf', 'size' => $n];
        }

        $min = min($values);
        $max = max($values);

        if ($min >= $max) {
            return ['type' => 'leaf', 'size' => $n];
        }

        $splitValue = $min + lcg_value() * ($max - $min);

        $left  = array_values(array_filter($X, fn($p) => $p[$featureIdx] < $splitValue));
        $right = array_values(array_filter($X, fn($p) => $p[$featureIdx] >= $splitValue));

        if (empty($left) || empty($right)) {
            return ['type' => 'leaf', 'size' => $n];
        }

        return [
            'type'       => 'node',
            'feature'    => $featureIdx,
            'splitValue' => $splitValue,
            'left'       => $this->buildTree($left,  $depth + 1, $maxDepth),
            'right'      => $this->buildTree($right, $depth + 1, $maxDepth),
        ];
    }

    /**
     * @param array<int, float> $point
     * @param array<string, mixed> $node
     */
   private function pathLength(array $point, array $node, int $depth): float
{
    if ($node['type'] === 'leaf') {
        return $depth + $this->cFactor((int) $node['size']);
    }

    if ($point[(int) $node['feature']] < (float) $node['splitValue']) {
        return $this->pathLength($point, $node['left'],  $depth + 1);
    } else {
        return $this->pathLength($point, $node['right'], $depth + 1);
    }
}

    private function cFactor(int $n): float
    {
        if ($n <= 1) return 0.0;
        if ($n === 2) return 1.0;
        return 2.0 * (log($n - 1) + 0.5772156649) - (2.0 * ($n - 1) / $n);
    }

    /**
     * @param array<int, float> $scores
     */
    private function computeThreshold(array $scores): float
    {
        $sorted = $scores;
        sort($sorted);
        $idx = (int) floor($this->contamination * count($sorted));
        return $sorted[$idx];
    }
}