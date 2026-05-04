<?php
// src/Service/ContributionManager.php

namespace App\Service;

use App\Entity\objective\Contributiongoal;
use InvalidArgumentException;

class ContributionManager
{
    private const MAX_AMOUNT = 99_999_999.99;

    /**
     * Valide une contribution selon les règles métier.
     * Toute la logique de validation est centralisée ici,
     * les setters de l'entité restent permissifs.
     *
     * @throws InvalidArgumentException
     */
    public function validate(Contributiongoal $contribution): bool
    {
        // ── 1. Objectif obligatoire ──────────────────────────────────
        if ($contribution->getObjectif() === null) {
            throw new InvalidArgumentException(
                'La contribution doit être liée à un objectif.'
            );
        }

        // ── 2. Date obligatoire ──────────────────────────────────────
        if ($contribution->getDate() === null) {
            throw new InvalidArgumentException(
                'La date de contribution est obligatoire.'
            );
        }

        // ── 3. Date pas dans le futur ────────────────────────────────
        $now      = new \DateTime();
        $dateDiff = $contribution->getDate()->getTimestamp() - $now->getTimestamp();
        // On tolère 60 secondes de décalage horloge
        if ($dateDiff > 60) {
            throw new InvalidArgumentException(
                'La date de contribution ne peut pas être dans le futur.'
            );
        }

        $montant = $contribution->getMontant();

        // ── 4. Montant obligatoire ───────────────────────────────────
        if ($montant === null) {
            throw new InvalidArgumentException(
                'Le montant est obligatoire.'
            );
        }

        // ── 5. Montant strictement positif ───────────────────────────
        if ($montant <= 0) {
            throw new InvalidArgumentException(
                'Le montant de la contribution doit être strictement positif.'
            );
        }

        // ── 6. Montant max ───────────────────────────────────────────
        if ($montant > self::MAX_AMOUNT) {
            throw new InvalidArgumentException(
                'Le montant ne peut pas dépasser 99999999.99.'
            );
        }

        // ── 7. Maximum 2 décimales ───────────────────────────────────
        // Multiplier par 100 et vérifier qu'il n'y a pas de reste fractionnaire
        if (abs(round($montant * 100) - ($montant * 100)) > 0.0001) {
            throw new InvalidArgumentException(
                'Le montant accepte 2 décimales maximum.'
            );
        }

        return true;
    }
}