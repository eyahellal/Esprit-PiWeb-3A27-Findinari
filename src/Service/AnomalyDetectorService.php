<?php

namespace App\Service;

// Note: IsolationForest n'existe pas dans php-ml
// Nous allons implémenter une version simplifiée ou importer une librairie externe
// Pour l'instant, nous commentons l'utilisation de IsolationForest

/**
 * @phpstan-type Contribution array{
 *     objectif_id: int,
 *     objectif_titre: string,
 *     wallet_id: int,
 *     montant: float,
 *     date: string,
 *     niveau_risque?: string,
 *     methode?: string,
 *     score?: float,
 *     raison?: string,
 *     source?: string
 * }
 *
 * @phpstan-type Anomaly array{
 *     objectif_id: int,
 *     objectif_titre: string,
 *     wallet_id: int,
 *     montant: float,
 *     date: string,
 *     niveau_risque: string,
 *     methode: string,
 *     score: float,
 *     raison: string,
 *     source: string
 * }
 */
class AnomalyDetectorService
{
    public function __construct()
    {
        // IsolationForest n'est pas disponible
        // $this->model = new IsolationForest(
        //     nEstimators:   100,
        //     maxSamples:    256,
        //     contamination: 0.1
        // );
    }

    /**
     * Point d'entrée principal
     *
     * @param Contribution[] $contributions
     * @return Anomaly[]
     */
    public function detect(array $contributions): array
    {
        if (count($contributions) < 3) {
            return $this->detectStats($contributions); // fallback si trop peu de données
        }

        // 1. Stats classiques uniquement car Isolation Forest n'est pas disponible
        $statAnomalies = $this->detectStats($contributions);

        // 2. Fusion et ranking
        return $this->mergeAndRank([], $statAnomalies);
    }

    /**
     * Statistiques classiques
     *
     * @param Contribution[] $contributions
     * @return Anomaly[]
     */
    private function detectStats(array $contributions): array
    {
        $all = [];
        $all = array_merge($all, $this->zScore($contributions));
        $all = array_merge($all, $this->iqr($contributions));
        $all = array_merge($all, $this->rapidPatterns($contributions));
        $all = array_merge($all, $this->businessRules($contributions));
       
        /** @var Anomaly[] $all */
        return $all;
    }

    /**
     * Détection par Z-Score
     *
     * @param Contribution[] $contributions
     * @return Anomaly[]
     */
    private function zScore(array $contributions): array
    {
        $montants = array_column($contributions, 'montant');
        $mean = array_sum($montants) / count($montants);
        $std  = $this->std($montants);
        if ($std == 0) return [];

        $anomalies = [];
        foreach ($contributions as $c) {
            $z = abs(($c['montant'] - $mean) / $std);
            if ($z > 2.5) {
                $anomalies[] = array_merge($c, [
                    'niveau_risque' => $z > 4 ? 'ÉLEVÉ' : 'MOYEN',
                    'methode'       => 'Z-Score',
                    'score'         => round($z, 4),
                    'raison'        => sprintf(
                        'Z-Score de %.2f — montant %.1f écarts-types %s la moyenne (%.2f)',
                        $z, $z,
                        $c['montant'] > $mean ? 'au-dessus de' : 'en-dessous de',
                        $mean
                    ),
                    'source'        => 'stats',
                ]);
            }
        }
       
        /** @var Anomaly[] $anomalies */
        return $anomalies;
    }

    /**
     * Détection par IQR (Interquartile Range)
     *
     * @param Contribution[] $contributions
     * @return Anomaly[]
     */
    private function iqr(array $contributions): array
    {
        $montants = array_column($contributions, 'montant');
        sort($montants);
        $n = count($montants);
        if ($n < 4) return [];

        $q1  = $montants[(int)($n * 0.25)];
        $q3  = $montants[(int)($n * 0.75)];
        $iqr = $q3 - $q1;
        if ($iqr == 0) return [];

        $upper = $q3 + 1.5 * $iqr;
        $lower = $q1 - 1.5 * $iqr;

        $anomalies = [];
        foreach ($contributions as $c) {
            if ($c['montant'] > $upper || ($c['montant'] < $lower && $c['montant'] > 0)) {
                $anomalies[] = array_merge($c, [
                    'niveau_risque' => $c['montant'] > $upper * 2 ? 'ÉLEVÉ' : 'MOYEN',
                    'methode'       => 'IQR',
                    'score'         => round(abs($c['montant'] - ($q1 + $q3) / 2) / $iqr, 4),
                    'raison'        => sprintf(
                        'Hors des bornes IQR [%.2f – %.2f] (Q1=%.2f, Q3=%.2f, IQR=%.2f)',
                        $lower, $upper, $q1, $q3, $iqr
                    ),
                    'source'        => 'stats',
                ]);
            }
        }
       
        /** @var Anomaly[] $anomalies */
        return $anomalies;
    }

    /**
     * Détection de patterns rapides (contributions trop rapprochées)
     *
     * @param Contribution[] $contributions
     * @return Anomaly[]
     */
    private function rapidPatterns(array $contributions): array
    {
        $byObjectif = [];
        foreach ($contributions as $c) {
            if ($c['date']) $byObjectif[$c['objectif_id']][] = $c;
        }

        $anomalies = [];
        foreach ($byObjectif as $contribs) {
            if (count($contribs) < 2) continue;
            usort($contribs, fn($a, $b) => strtotime($a['date']) - strtotime($b['date']));

            for ($i = 1; $i < count($contribs); $i++) {
                $diffH = (strtotime($contribs[$i]['date']) - strtotime($contribs[$i-1]['date'])) / 3600;
                if ($diffH >= 0 && $diffH < 24) {
                    $anomalies[] = array_merge($contribs[$i], [
                        'niveau_risque' => $diffH < 1 ? 'ÉLEVÉ' : 'MOYEN',
                        'methode'       => 'Rapid Pattern',
                        'score'         => round(24 / max($diffH, 0.01), 4),
                        'raison'        => sprintf(
                            'Contributions multiples en %.1fh sur le même objectif (contribution précédente: %.2f le %s)',
                            $diffH, $contribs[$i-1]['montant'], $contribs[$i-1]['date']
                        ),
                        'source'        => 'stats',
                    ]);
                }
            }
        }
       
        /** @var Anomaly[] $anomalies */
        return $anomalies;
    }

    /**
     * Règles métier
     *
     * @param Contribution[] $contributions
     * @return Anomaly[]
     */
    private function businessRules(array $contributions): array
    {
        $mediane   = $this->mediane(array_column($contributions, 'montant'));
        $anomalies = [];

        foreach ($contributions as $c) {
            if ($c['montant'] <= 0) {
                $anomalies[] = array_merge($c, [
                    'niveau_risque' => 'ÉLEVÉ',
                    'methode'       => 'Règle Métier',
                    'score'         => 10.0,
                    'raison'        => 'Montant nul ou négatif — contribution invalide',
                    'source'        => 'stats',
                ]);
            } elseif ($mediane > 0 && $c['montant'] > $mediane * 10) {
                $anomalies[] = array_merge($c, [
                    'niveau_risque' => 'ÉLEVÉ',
                    'methode'       => 'Règle Métier',
                    'score'         => round($c['montant'] / $mediane, 4),
                    'raison'        => sprintf(
                        'Montant %.1fx la médiane (médiane: %.2f)',
                        $c['montant'] / $mediane, $mediane
                    ),
                    'source'        => 'stats',
                ]);
            } elseif (fmod((float)$c['montant'], 1000.0) === 0.0 && $c['montant'] > $mediane * 5) {
                $anomalies[] = array_merge($c, [
                    'niveau_risque' => 'MOYEN',
                    'methode'       => 'Règle Métier',
                    'score'         => round($c['montant'] / max($mediane, 1), 4),
                    'raison'        => sprintf(
                        'Montant rond élevé suspect (%.2f = %.1fx la médiane)',
                        $c['montant'], $c['montant'] / max($mediane, 1)
                    ),
                    'source'        => 'stats',
                ]);
            }
        }
       
        /** @var Anomaly[] $anomalies */
        return $anomalies;
    }

    /**
     * Fusion Stats (ML non disponible)
     *
     * @param Anomaly[] $ml
     * @param Anomaly[] $stats
     * @return Anomaly[]
     */
    private function mergeAndRank(array $ml, array $stats): array
    {
        $result = $ml;

        foreach ($result as &$anomaly) {
            foreach ($stats as $stat) {
                if ($stat['objectif_id'] == $anomaly['objectif_id']
                    && abs($stat['montant'] - $anomaly['montant']) < 0.01) {
                    // Confirmé par les deux méthodes = ÉLEVÉ automatiquement
                    $anomaly['niveau_risque'] = 'ÉLEVÉ';
                    $anomaly['methode']       = 'Stats + ' . $stat['methode'];
                    $anomaly['raison']       .= ' | Confirmé par ' . $stat['methode'] . ': ' . $stat['raison'];
                    $anomaly['score']        += $stat['score'];
                }
            }
        }
        unset($anomaly);

        // Ajouter les anomalies stats non détectées par ML
        $mlKeys = array_map(
            fn($a) => $a['objectif_id'] . '|' . round($a['montant'], 2),
            $result
        );

        foreach ($stats as $stat) {
            $key = $stat['objectif_id'] . '|' . round($stat['montant'], 2);
            if (!in_array($key, $mlKeys)) {
                $result[] = $stat;
            }
        }

        // Dédoublonner
        $seen = [];
        $final = [];
        foreach ($result as $a) {
            $key = $a['objectif_id'] . '|' . round($a['montant'], 2) . '|' . $a['methode'];
            if (!isset($seen[$key])) {
                $seen[$key] = true;
                $final[] = $a;
            }
        }

        usort($final, fn($a, $b) => $b['score'] <=> $a['score']);
       
        /** @var Anomaly[] $final */
        return $final;
    }

    /**
     * Calcule l'écart-type d'un tableau de valeurs
     *
     * @param float[] $values
     * @return float
     */
    private function std(array $values): float
    {
        if (count($values) < 2) return 0.0;
        $mean = array_sum($values) / count($values);
        $variance = array_sum(array_map(fn($v) => pow($v - $mean, 2), $values)) / count($values);
        return sqrt($variance);
    }

    /**
     * Calcule la médiane d'un tableau de valeurs
     *
     * @param float[] $values
     * @return float
     */
    private function mediane(array $values): float
    {
        if (empty($values)) return 0.0;
        sort($values);
        $n   = count($values);
        $mid = (int)($n / 2);
        return $n % 2 === 0 ? ($values[$mid - 1] + $values[$mid]) / 2 : $values[$mid];
    }
}