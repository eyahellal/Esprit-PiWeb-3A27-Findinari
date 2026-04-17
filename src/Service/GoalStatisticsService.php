<?php

namespace App\Service;

use App\Entity\objective\Objectif;

class GoalStatisticsService
{
    /**
     * Compute all stats + prediction for a given objective.
     * Returns array with keys:
     *   totalCollected, contributionCount, targetAmount, progressPct, prediction
     */
    public function compute(Objectif $objectif): array
    {
        $totalCollected    = 0;
        $contributionCount = 0;

        foreach ($objectif->getContributiongoals() as $contrib) {
            $totalCollected    += $contrib->getMontant();
            $contributionCount++;
        }

        $targetAmount = (float) $objectif->getMontant();
        $progressPct  = $targetAmount > 0 ? ($totalCollected / $targetAmount) * 100 : 0;
        $progressPct  = min(100, $progressPct);

        // ── Prediction (only for non-finished goals) ──────────────────────
        $prediction = $this->computePrediction($objectif, $totalCollected, $contributionCount);

        return [
            'totalCollected'    => $totalCollected,
            'contributionCount' => $contributionCount,
            'targetAmount'      => $targetAmount,
            'progressPct'       => $progressPct,
            'prediction'        => $prediction,
        ];
    }

    /**
     * Predict completion date based on current contribution velocity.
     *
     * @param int $contributionCount  Pre-computed count (avoids iterating twice)
     */
    public function computePrediction(
        Objectif $objectif,
        float    $totalCollected,
        int      $contributionCount = -1
    ): ?array {
        // Already finished → no prediction
        if ($objectif->getStatut() === 'TERMINE') {
            return null;
        }

        $contributions = $objectif->getContributiongoals()->toArray();

        // Need at least one contribution
        if (count($contributions) === 0) {
            return null;
        }

        // Use passed count or compute it
        if ($contributionCount < 0) {
            $contributionCount = count($contributions);
        }

        // Sort ascending by date
        usort($contributions, fn($a, $b) => $a->getDate() <=> $b->getDate());

        $firstDate   = $contributions[0]->getDate();
        $now         = new \DateTime();
        $daysElapsed = (int) $firstDate->diff($now)->days;

        if ($daysElapsed < 1) {
            $daysElapsed = 1; // avoid division by zero on same-day contributions
        }

        $velocityPerDay = $totalCollected / $daysElapsed;

        if ($velocityPerDay <= 0) {
            return null;
        }

        $targetAmount = (float) $objectif->getMontant();
        $remaining    = $targetAmount - $totalCollected;

        if ($remaining <= 0) {
            return null;
        }

        $daysNeeded    = (int) ceil($remaining / $velocityPerDay);
        $predictedDate = (clone $now)->modify("+{$daysNeeded} days");

        // Confidence: more contributions + more elapsed days = more reliable
        $confidence = match (true) {
            $contributionCount >= 5 && $daysElapsed >= 14 => 'haute',
            $contributionCount >= 2 && $daysElapsed >= 3  => 'moyenne',
            default                                        => 'faible',
        };

        return [
            'predictedDate'  => $predictedDate,
            'daysNeeded'     => $daysNeeded,
            'velocityPerDay' => round($velocityPerDay, 2),
            'remaining'      => round($remaining, 2),
            'confidence'     => $confidence,
        ];
    }

    /**
     * Simulate: "If I contribute $dailyAmount per day, when will I reach my goal?"
     * Returns the same shape as computePrediction(), or null if already done.
     *
     * @param float $dailyAmount  Hypothetical daily contribution
     */
    public function simulateDailyContribution(Objectif $objectif, float $dailyAmount): ?array
    {
        if ($dailyAmount <= 0) {
            return null;
        }

        $totalCollected = 0;
        $contributionCount = 0;
        foreach ($objectif->getContributiongoals() as $contrib) {
            $totalCollected    += $contrib->getMontant();
            $contributionCount++;
        }

        $targetAmount = (float) $objectif->getMontant();
        $remaining    = $targetAmount - $totalCollected;

        if ($remaining <= 0) {
            return null; // already reached
        }

        $daysNeeded    = (int) ceil($remaining / $dailyAmount);
        $now           = new \DateTime();
        $predictedDate = (clone $now)->modify("+{$daysNeeded} days");

        // Same confidence logic but based on simulated velocity
        $contributions = $objectif->getContributiongoals()->toArray();
        $daysElapsed   = 1;
        if (count($contributions) > 0) {
            usort($contributions, fn($a, $b) => $a->getDate() <=> $b->getDate());
            $daysElapsed = max(1, (int) $contributions[0]->getDate()->diff($now)->days);
        }

        $confidence = match (true) {
            $contributionCount >= 5 && $daysElapsed >= 14 => 'haute',
            $contributionCount >= 2 && $daysElapsed >= 3  => 'moyenne',
            default                                        => 'faible',
        };

        return [
            'predictedDate'  => $predictedDate,
            'daysNeeded'     => $daysNeeded,
            'velocityPerDay' => round($dailyAmount, 2),
            'remaining'      => round($remaining, 2),
            'confidence'     => $confidence,
            'isSimulation'   => true,
        ];
    }
}