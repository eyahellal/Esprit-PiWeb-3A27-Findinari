<?php

namespace App\Service;

use App\Entity\objective\Objectif;

class GoalStatisticsService
{
    /**
     * @return array{
     *     totalCollected: float,
     *     contributionCount: int,
     *     targetAmount: float,
     *     progressPct: float,
     *     prediction: array{
     *         predictedDate: \DateTime,
     *         daysNeeded: int,
     *         velocityPerDay: float,
     *         remaining: float,
     *         confidence: string
     *     }|null
     * }
     */
    public function compute(Objectif $objectif): array
    {
        $totalCollected = 0.0;
        $contributionCount = 0;

        foreach ($objectif->getContributiongoals() as $contrib) {
            $totalCollected += (float) $contrib->getMontant();
            $contributionCount++;
        }

        $targetAmount = (float) $objectif->getMontant();
        $progressPct = $targetAmount > 0 ? ($totalCollected / $targetAmount) * 100 : 0.0;
        $progressPct = min(100, $progressPct);

        $prediction = $this->computePrediction($objectif, $totalCollected, $contributionCount);

        return [
            'totalCollected' => $totalCollected,
            'contributionCount' => $contributionCount,
            'targetAmount' => $targetAmount,
            'progressPct' => $progressPct,
            'prediction' => $prediction,
        ];
    }

    /**
     * @return array{
     *     predictedDate: \DateTime,
     *     daysNeeded: int,
     *     velocityPerDay: float,
     *     remaining: float,
     *     confidence: string
     * }|null
     */
    public function computePrediction(
        Objectif $objectif,
        float $totalCollected,
        int $contributionCount = -1
    ): ?array {
        if ($objectif->getStatut() === 'TERMINE') {
            return null;
        }

        $contributions = $objectif->getContributiongoals()->toArray();

        /**
         * Remove contributions without date because PHPStan knows
         * getDate() can return DateTimeInterface|null.
         */
        $contributions = array_values(array_filter(
            $contributions,
            static fn ($contrib): bool => $contrib->getDate() !== null
        ));

        if (count($contributions) === 0) {
            return null;
        }

        if ($contributionCount < 0) {
            $contributionCount = count($contributions);
        }

        usort($contributions, static function ($a, $b): int {
            $dateA = $a->getDate();
            $dateB = $b->getDate();

            if ($dateA === null || $dateB === null) {
                return 0;
            }

            return $dateA <=> $dateB;
        });

        $firstDate = $contributions[0]->getDate();

        if ($firstDate === null) {
            return null;
        }

        $now = new \DateTime();
        $daysElapsed = max(1, (int) $firstDate->diff($now)->days);

        $velocityPerDay = $totalCollected / $daysElapsed;

        if ($velocityPerDay <= 0) {
            return null;
        }

        $targetAmount = (float) $objectif->getMontant();
        $remaining = $targetAmount - $totalCollected;

        if ($remaining <= 0) {
            return null;
        }

        $daysNeeded = (int) ceil($remaining / $velocityPerDay);
        $predictedDate = (clone $now)->modify("+{$daysNeeded} days");

        $confidence = match (true) {
            $contributionCount >= 5 && $daysElapsed >= 14 => 'haute',
            $contributionCount >= 2 && $daysElapsed >= 3 => 'moyenne',
            default => 'faible',
        };

        return [
            'predictedDate' => $predictedDate,
            'daysNeeded' => $daysNeeded,
            'velocityPerDay' => round($velocityPerDay, 2),
            'remaining' => round($remaining, 2),
            'confidence' => $confidence,
        ];
    }

    /**
     * @return array{
     *     predictedDate: \DateTime,
     *     daysNeeded: int,
     *     velocityPerDay: float,
     *     remaining: float,
     *     confidence: string,
     *     isSimulation: bool
     * }|null
     */
    public function simulateDailyContribution(Objectif $objectif, float $dailyAmount): ?array
    {
        if ($dailyAmount <= 0) {
            return null;
        }

        $totalCollected = 0.0;
        $contributionCount = 0;

        foreach ($objectif->getContributiongoals() as $contrib) {
            $totalCollected += (float) $contrib->getMontant();
            $contributionCount++;
        }

        $targetAmount = (float) $objectif->getMontant();
        $remaining = $targetAmount - $totalCollected;

        if ($remaining <= 0) {
            return null;
        }

        $daysNeeded = (int) ceil($remaining / $dailyAmount);
        $now = new \DateTime();
        $predictedDate = (clone $now)->modify("+{$daysNeeded} days");

        $contributions = $objectif->getContributiongoals()->toArray();

        $contributions = array_values(array_filter(
            $contributions,
            static fn ($contrib): bool => $contrib->getDate() !== null
        ));

        $daysElapsed = 1;

        if (count($contributions) > 0) {
            usort($contributions, static function ($a, $b): int {
                $dateA = $a->getDate();
                $dateB = $b->getDate();

                if ($dateA === null || $dateB === null) {
                    return 0;
                }

                return $dateA <=> $dateB;
            });

            $firstDate = $contributions[0]->getDate();

            if ($firstDate !== null) {
                $daysElapsed = max(1, (int) $firstDate->diff($now)->days);
            }
        }

        $confidence = match (true) {
            $contributionCount >= 5 && $daysElapsed >= 14 => 'haute',
            $contributionCount >= 2 && $daysElapsed >= 3 => 'moyenne',
            default => 'faible',
        };

        return [
            'predictedDate' => $predictedDate,
            'daysNeeded' => $daysNeeded,
            'velocityPerDay' => round($dailyAmount, 2),
            'remaining' => round($remaining, 2),
            'confidence' => $confidence,
            'isSimulation' => true,
        ];
    }
}