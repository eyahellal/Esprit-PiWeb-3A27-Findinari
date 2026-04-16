<?php

namespace App\Service;

use App\Entity\objective\Objectif;

class GoalStatisticsService
{
    public function compute(Objectif $objectif): array
    {
        $totalCollected = 0;
        $contributionCount = 0;
        foreach ($objectif->getContributiongoals() as $contrib) {
            $totalCollected += $contrib->getMontant();
            $contributionCount++;
        }
        $targetAmount = $objectif->getMontant();
        $progressPct = $targetAmount > 0 ? ($totalCollected / $targetAmount) * 100 : 0;
        $progressPct = min(100, $progressPct);

        return [
            'totalCollected' => $totalCollected,
            'contributionCount' => $contributionCount,
            'targetAmount' => $targetAmount,
            'progressPct' => $progressPct,
        ];
    }
}