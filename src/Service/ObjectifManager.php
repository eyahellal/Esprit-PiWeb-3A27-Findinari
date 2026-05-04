<?php
// src/Service/ObjectifManager.php

namespace App\Service;

use App\Entity\objective\Objectif;
use App\Entity\objective\Contributiongoal;
use App\Service\GoalStatisticsService;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;

class ObjectifManager
{
    public function __construct(
        private EntityManagerInterface $em,
        private Connection $connection
    ) {}

    /**
     * Ajoute une contribution à un objectif.
     * - Vérifie que le montant est positif
     * - Vérifie que le wallet a suffisamment de solde
     * - Vérifie que le montant ne dépasse pas le reste à atteindre
     * - Débite le wallet, crée la contribution, met à jour le statut
     *
     * @throws \InvalidArgumentException
     */
    public function contribute(Objectif $objectif, float $montant): void
    {
        // 1. Vérifier que le montant est positif
        if ($montant <= 0) {
            throw new \InvalidArgumentException('Le montant de la contribution doit être positif.');
        }

        $walletId = $objectif->getWalletId();

        // 2. Vérifier le solde du wallet
        $wallet = $this->connection->fetchAssociative(
            'SELECT * FROM wallet WHERE id = ?',
            [$walletId]
        );

        if (!$wallet || $wallet['solde'] < $montant) {
            throw new \InvalidArgumentException('Solde insuffisant dans ce wallet.');
        }

        // 3. Calculer le total déjà contribué et le reste à atteindre
        $totalDejaContribue = 0;
        foreach ($objectif->getContributiongoals() as $c) {
            $totalDejaContribue += $c->getMontant();
        }

        $restant = $objectif->getMontant() - $totalDejaContribue;
        if ($montant > $restant) {
            throw new \InvalidArgumentException(
                sprintf('Le montant dépasse la cible. Montant restant : %.2f', $restant)
            );
        }

        // 4. Créer la contribution
        $contribution = new Contributiongoal();
        $contribution->setMontant($montant);
        $contribution->setDate(new \DateTime());
        $contribution->setObjectif($objectif);
        $this->em->persist($contribution);

        // 5. Débiter le wallet
        $this->connection->executeStatement(
            'UPDATE wallet SET solde = solde - ? WHERE id = ?',
            [$montant, $walletId]
        );

        // 6. Mettre à jour le statut de l'objectif
        $total = $totalDejaContribue + $montant;
        $objectif->setStatut($total >= $objectif->getMontant() ? 'TERMINE' : 'EN_COURS');
        $this->em->flush();
    }

    /**
     * Supprime une contribution et rembourse le wallet.
     * Recalcule automatiquement le statut de l'objectif.
     *
     * @throws \InvalidArgumentException
     */
    public function deleteContribution(Contributiongoal $contribution): void
    {
        $montant = $contribution->getMontant();
        if ($montant <= 0) {
            throw new \InvalidArgumentException('Montant invalide pour cette contribution.');
        }

        $objectif = $contribution->getObjectif();
        $walletId = $objectif->getWalletId();

        // Rembourser le wallet
        $this->connection->executeStatement(
            'UPDATE wallet SET solde = solde + ? WHERE id = ?',
            [$montant, $walletId]
        );

        // Supprimer la contribution
        $this->em->remove($contribution);
        $this->em->flush();

        // Recalculer le statut de l'objectif
        $total = 0;
        foreach ($objectif->getContributiongoals() as $c) {
            $total += $c->getMontant();
        }
        $objectif->setStatut($total >= $objectif->getMontant() ? 'TERMINE' : 'EN_COURS');
        $this->em->flush();
    }

    /**
     * Supprime un objectif et rembourse toutes ses contributions.
     */
    public function deleteObjectifWithRefund(Objectif $objectif): void
    {
        $walletId = $objectif->getWalletId();
        $total = 0;
        foreach ($objectif->getContributiongoals() as $c) {
            $total += $c->getMontant();
        }

        if ($total > 0) {
            $this->connection->executeStatement(
                'UPDATE wallet SET solde = solde + ? WHERE id = ?',
                [$total, $walletId]
            );
        }

        $this->em->remove($objectif);
        $this->em->flush();
    }

    /**
     * Retourne le top 3 des contributeurs (ceux qui ont atteint au moins un objectif).
     *
     * @param Objectif[] $objectifs
     * @param array<int, int> $walletToUser  association [walletId => userId]
     * @param array<int, array{nom: string, pays: string}> $usersMap
     * @return array
     */
    public function getTopContributeurs(
        array $objectifs,
        array $walletToUser,
        array $usersMap,
        GoalStatisticsService $goalStats
    ): array {
        $byUser = [];

        foreach ($objectifs as $objectif) {
            $wid = $objectif->getWalletId();
            $uid = $walletToUser[$wid] ?? null;
            if (!$uid || !isset($usersMap[$uid])) {
                continue;
            }

            $stats = $goalStats->compute($objectif);
            if (!isset($byUser[$uid])) {
                $byUser[$uid] = [
                    'userId'            => $uid,
                    'userName'          => $usersMap[$uid]['nom'],
                    'pays'              => $usersMap[$uid]['pays'],
                    'objectifsAtteints' => [],
                    'totalCollected'    => 0,
                ];
            }

            if ($stats['progressPct'] >= 100) {
                $byUser[$uid]['objectifsAtteints'][] = true;
                $byUser[$uid]['totalCollected'] += $stats['totalCollected'];
            }
        }

        // Ne garder que ceux qui ont au moins un objectif atteint
        $byUser = array_values(array_filter(
            $byUser,
            fn($u) => count($u['objectifsAtteints']) > 0
        ));

        // Trier : d'abord par nombre d'objectifs atteints, puis par montant total collecté
        usort($byUser, function ($a, $b) {
            $diff = count($b['objectifsAtteints']) - count($a['objectifsAtteints']);
            return $diff !== 0 ? $diff : $b['totalCollected'] <=> $a['totalCollected'];
        });

        // Retourner les 3 premiers
        return array_slice($byUser, 0, 3);
    }
}