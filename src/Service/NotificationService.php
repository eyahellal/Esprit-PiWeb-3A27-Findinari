<?php
// src/Service/NotificationService.php
namespace App\Service;

use App\Entity\objective\Objectif;
use Symfony\Component\HttpFoundation\RequestStack;

class NotificationService
{
    private const SEUIL_PCT       = 70;
    private const JOURS_RAPPEL    = 7;
    private const SESSION_KEY     = 'notifications';

    public function __construct(private RequestStack $requestStack) {}

    private function session(): \Symfony\Component\HttpFoundation\Session\SessionInterface
    {
        return $this->requestStack->getSession();
    }

    /** Génère les notifications pour une liste d'objectifs et les stocke en session */
    public function generateForObjectifs(array $objectifs): void
    {
        $existing = $this->session()->get(self::SESSION_KEY, []);
        // Index par clé unique pour éviter les doublons
        $indexed  = [];
        foreach ($existing as $n) {
            $indexed[$n['key']] = $n;
        }

        foreach ($objectifs as $objectif) {
            if (!$objectif instanceof Objectif) continue;
            if ($objectif->getStatut() === 'TERMINE') continue;

            $contributions = $objectif->getContributiongoals()->toArray();
            $total   = array_sum(array_map(fn($c) => (float)$c->getMontant(), $contributions));
            $montant = (float)$objectif->getMontant();
            if ($montant <= 0) continue;

            $pct = ($total / $montant) * 100;
            $id  = $objectif->getId();

            // ── Objectif bientôt atteint (≥ 70%) ──────────────────
            if ($pct >= self::SEUIL_PCT && $pct < 100) {
                $key = "bientot_{$id}";
                $indexed[$key] = [
                    'key'     => $key,
                    'type'    => 'BIENTOT_ATTEINT',
                    'titre'   => $objectif->getTitre(),
                    'message' => sprintf(
                        '"%s" est à %d%% — plus que %s à collecter !',
                        $objectif->getTitre(),
                        round($pct),
                        number_format($montant - $total, 0, ',', ' ')
                    ),
                    'isRead'  => $indexed["bientot_{$id}"]['isRead'] ?? false,
                    'time'    => $indexed["bientot_{$id}"]['time']   ?? time(),
                ];
            } else {
                // Supprimer si l'objectif n'est plus dans cette plage
                unset($indexed["bientot_{$id}"]);
            }

            // ── Rappel contribution (aucune contrib depuis X jours) ─
            if (!empty($contributions)) {
                usort($contributions, fn($a, $b) => $b->getDate() <=> $a->getDate());
                $derniere   = $contributions[0]->getDate();
                $joursEcart = (int)(new \DateTime())->diff($derniere)->days;

                $key = "rappel_{$id}";
                if ($joursEcart >= self::JOURS_RAPPEL) {
                    $indexed[$key] = [
                        'key'     => $key,
                        'type'    => 'RAPPEL',
                        'titre'   => $objectif->getTitre(),
                        'message' => sprintf(
                            'Aucune contribution depuis %d jours sur "%s".',
                            $joursEcart,
                            $objectif->getTitre()
                        ),
                        'isRead'  => $indexed[$key]['isRead'] ?? false,
                        'time'    => $indexed[$key]['time']   ?? time(),
                    ];
                } else {
                    unset($indexed[$key]);
                }
            }
        }

        $this->session()->set(self::SESSION_KEY, array_values($indexed));
    }

    /** Toutes les notifications */
    public function getAll(): array
    {
        return $this->session()->get(self::SESSION_KEY, []);
    }

    /** Notifications non lues seulement */
    public function getUnread(): array
    {
        return array_values(array_filter(
            $this->getAll(),
            fn($n) => !$n['isRead']
        ));
    }

    /** Nombre de non lues */
    public function countUnread(): int
    {
        return count($this->getUnread());
    }

    /** Marquer une notification lue par sa clé */
    public function markRead(string $key): void
    {
        $all = $this->getAll();
        foreach ($all as &$n) {
            if ($n['key'] === $key) { $n['isRead'] = true; break; }
        }
        $this->session()->set(self::SESSION_KEY, $all);
    }

    /** Tout marquer lu */
    public function markAllRead(): void
    {
        $all = array_map(fn($n) => array_merge($n, ['isRead' => true]), $this->getAll());
        $this->session()->set(self::SESSION_KEY, $all);
    }
}