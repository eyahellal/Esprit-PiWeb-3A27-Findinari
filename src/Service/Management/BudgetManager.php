<?php

namespace App\Service\Management;

use App\Entity\management\Budget;

class BudgetManager
{
    // Rule 1 — Amount must be positive
    public function validateMontant(Budget $budget): bool
    {
        if ($budget->getMontantMax() === null || $budget->getMontantMax() <= 0) {
            throw new \InvalidArgumentException(
                'Le montant maximum doit être supérieur à zéro.'
            );
        }
        return true;
    }

    // Rule 2 — Duration must be between 1 and 365 days
    public function validateDuree(Budget $budget): bool
    {
        if ($budget->getDureeBudget() === null || $budget->getDureeBudget() < 1) {
            throw new \InvalidArgumentException(
                'La durée du budget doit être au moins 1 jour.'
            );
        }
        if ($budget->getDureeBudget() > 365) {
            throw new \InvalidArgumentException(
                'La durée du budget ne peut pas dépasser 365 jours.'
            );
        }
        return true;
    }

    // Rule 3 — Date is required
    public function validateDate(Budget $budget): bool
    {
        if ($budget->getDateBudget() === null) {
            throw new \InvalidArgumentException(
                'La date de début est obligatoire.'
            );
        }
        return true;
    }

    // Rule 4 — Wallet is required
    public function validateWallet(Budget $budget): bool
    {
        if ($budget->getWallet() === null) {
            throw new \InvalidArgumentException(
                'Le portefeuille est obligatoire.'
            );
        }
        return true;
    }

    // Rule 5 — Category is required
    public function validateCategorie(Budget $budget): bool
    {
        if ($budget->getCategorie() === null) {
            throw new \InvalidArgumentException(
                'La catégorie est obligatoire.'
            );
        }
        return true;
    }

    // Rule 6 — Budget amount must not exceed wallet balance
    public function validateBudgetVsWallet(Budget $budget): bool
    {
        if ($budget->getWallet() !== null &&
            $budget->getMontantMax() > $budget->getWallet()->getSolde()) {
            throw new \InvalidArgumentException(
                'Le montant du budget dépasse le solde du portefeuille.'
            );
        }
        return true;
    }

    // Rule 7 — Check if budget is expired
    public function isExpired(Budget $budget): bool
    {
        if ($budget->getDateBudget() === null || $budget->getDureeBudget() === null) {
            return false;
        }
        $endDate = (clone $budget->getDateBudget())
            ->modify('+' . $budget->getDureeBudget() . ' days');
        return new \DateTime() > $endDate;
    }

    // Full validation
    public function validate(Budget $budget): bool
    {
        $this->validateWallet($budget);
        $this->validateCategorie($budget);
        $this->validateMontant($budget);
        $this->validateDuree($budget);
        $this->validateDate($budget);
        $this->validateBudgetVsWallet($budget);
        return true;
    }
}