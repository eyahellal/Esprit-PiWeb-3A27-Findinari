<?php

namespace App\Entity\Loan;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use App\Repository\InvestissementobligationRepository;

#[ORM\Entity(repositoryClass: InvestissementobligationRepository::class)]
#[ORM\Table(name: 'investissementobligation')]
class Investissementobligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idInvestissement', type: 'integer')]
    private ?int $idInvestissement = null;

    #[ORM\Column(name: 'wallet_id', type: 'string', nullable: true)]
    private ?string $walletId = null;

    #[ORM\Column(name: 'obligation_id', type: 'integer', nullable: true)]
    private ?int $obligationId = null;

    // ✅ CORRECTION : DECIMAL doit être string, pas float
    #[ORM\Column(name: 'montantInvesti', type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montantInvesti = null;

    // ✅ CORRECTION : DATE type doit être DateTime (pas DateTimeImmutable)
    #[ORM\Column(name: 'dateAchat', type: 'date')]
    private ?\DateTime $dateAchat = null;

    // ✅ CORRECTION : DATE type doit être DateTime (pas DateTimeImmutable)
    #[ORM\Column(name: 'dateMaturite', type: 'date', nullable: true)]
    private ?\DateTime $dateMaturite = null;

    public function getIdInvestissement(): ?int
    {
        return $this->idInvestissement;
    }

    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    public function setWalletId(?string $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    public function getObligationId(): ?int
    {
        return $this->obligationId;
    }

    public function setObligationId(?int $obligationId): self
    {
        $this->obligationId = $obligationId;
        return $this;
    }

    /**
     * Retourne le montant investi (string pour compatibilité DECIMAL)
     */
    public function getMontantInvesti(): ?string
    {
        return $this->montantInvesti;
    }

    /**
     * Retourne le montant investi en float pour les calculs
     */
    public function getMontantInvestiFloat(): ?float
    {
        return $this->montantInvesti !== null ? (float)$this->montantInvesti : null;
    }

    /**
     * Set le montant investi (accepte string ou float)
     */
    public function setMontantInvesti(string|float $montantInvesti): self
    {
        $this->montantInvesti = is_float($montantInvesti) ? (string)$montantInvesti : $montantInvesti;
        return $this;
    }

    public function getDateAchat(): ?\DateTime
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTime $dateAchat): self
    {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    public function getDateMaturite(): ?\DateTime
    {
        return $this->dateMaturite;
    }

    public function setDateMaturite(?\DateTime $dateMaturite): self
    {
        $this->dateMaturite = $dateMaturite;
        return $this;
    }
}