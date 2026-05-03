<?php
// src/Service/Loan/ObligationValidatorService.php
namespace App\Service\Loan;

use App\Entity\Loan\Obligation;
use InvalidArgumentException;

class ObligationValidatorService
{
    /**
     * Valide toutes les règles métier pour une obligation
     * @throws InvalidArgumentException
     */
    public function validate(Obligation $obligation): bool
    {
        // Règle 1: Le nom est obligatoire (champ non vide)
        if (empty($obligation->getNom()) || trim($obligation->getNom()) === '') {
            throw new InvalidArgumentException('Le nom de l\'obligation est obligatoire');
        }
        
        // Règle 2: Le taux d'intérêt doit être positif et raisonnable (0% à 100%)
        if ($obligation->getTauxInteret() <= 0) {
            throw new InvalidArgumentException('Le taux d\'intérêt doit être supérieur à 0%');
        }
        
        if ($obligation->getTauxInteret() > 100) {
            throw new InvalidArgumentException('Le taux d\'intérêt ne peut pas dépasser 100%');
        }
        
        // Règle 3: La durée doit être positive
        if ($obligation->getDuree() <= 0) {
            throw new InvalidArgumentException('La durée doit être supérieure à 0 mois');
        }
        
        // Règle supplémentaire: Durée maximale raisonnable (10 ans = 120 mois)
        if ($obligation->getDuree() > 120) {
            throw new InvalidArgumentException('La durée ne peut pas dépasser 120 mois (10 ans)');
        }
        
        return true;
    }
    
    /**
     * Calcule le profit total basé sur le montant investi
     */
    public function calculateProfit(float $amount, float $interestRate, int $durationInMonths): float
    {
        $durationInYears = $durationInMonths / 12;
        $profit = $amount * ($interestRate / 100) * $durationInYears;
        return round($profit, 2);
    }
    
    /**
     * Calcule le montant total à rembourser (capital + intérêts)
     */
    public function calculateTotalRepayment(float $amount, float $interestRate, int $durationInMonths): float
    {
        $profit = $this->calculateProfit($amount, $interestRate, $durationInMonths);
        return round($amount + $profit, 2);
    }
}