<?php
// src/Service/Loan/InvestmentValidatorService.php
namespace App\Service\Loan;


use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
use InvalidArgumentException;


class InvestmentValidatorService
{
    /**
     * Valide toutes les règles métier pour un investissement
     * @throws InvalidArgumentException
     */
    public function validate(Investissementobligation $investment, ?Wallet $wallet, ?Obligation $obligation): bool
    {
        // Règle 1: Le wallet doit exister (Le TypeHint ?Wallet gère déjà le type)
        if ($wallet === null) {
            throw new InvalidArgumentException('Le wallet est obligatoire pour effectuer un investissement');
        }
       
        // Règle 2: L'obligation doit exister
        if ($obligation === null) {
            throw new InvalidArgumentException('L\'obligation est obligatoire pour effectuer un investissement');
        }
       
        // Règle 3: Le montant investi doit être positif
        if ($investment->getMontantInvesti() <= 0) {
            throw new InvalidArgumentException('Le montant investi doit être supérieur à 0');
        }
       
        // Règle 4: Le montant investi ne doit pas dépasser le solde du wallet
        if ($investment->getMontantInvesti() > $wallet->getSolde()) {
            throw new InvalidArgumentException(
                sprintf(
                    'Le montant investi (%s DT) ne peut pas dépasser le solde de votre wallet (%s DT)',
                    number_format((float) $investment->getMontantInvesti(), 2),
                    number_format((float) $wallet->getSolde(), 2)
                )
            );
        }
       
        // Règle 5: La date de maturité doit être après la date d'achat
        // Note: Assurez-vous que getDateMaturite() et getDateAchat() ne retournent pas null
        if ($investment->getDateMaturite() <= $investment->getDateAchat()) {
            throw new InvalidArgumentException('La date de maturité doit être postérieure à la date d\'achat');
        }
       
        return true;
    }
   
    /**
     * Vérifie si le montant est disponible dans le wallet
     */
    public function isAmountAvailable(float $amount, Wallet $wallet): bool
    {
        return $amount > 0 && $amount <= $wallet->getSolde();
    }
   
    /**
     * Calcule la date de maturité automatiquement
     */
    public function calculateMaturityDate(\DateTime $startDate, int $durationInMonths): \DateTime
    {
        return (clone $startDate)->modify("+{$durationInMonths} months");
    }
}



