<?php

namespace App\Entity\Loan;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\InvestissementobligationRepository;

#[ORM\Entity(repositoryClass: InvestissementobligationRepository::class)]
#[ORM\Table(name: 'investissementobligation')]
class Investissementobligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idInvestissement', type: 'integer')]
    private ?int $idInvestissement = null;

    #[ORM\Column(name: 'wallet_id', type: 'integer', nullable: true)]
    private ?int $walletId = null;

    #[ORM\Column(name: 'obligation_id', type: 'integer', nullable: true)]
    private ?int $obligationId = null;

    #[ORM\Column(name: 'montantInvesti', type: 'decimal', precision: 10, scale: 2)]
    private ?float $montantInvesti = null;

    #[ORM\Column(name: 'dateAchat', type: 'date')]
    private ?\DateTimeInterface $dateAchat = null;

    #[ORM\Column(name: 'dateMaturite', type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateMaturite = null;

    // Getters and Setters
    public function getIdInvestissement(): ?int
    {
        return $this->idInvestissement;
    }

    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    public function setWalletId(?int $walletId): self
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

    public function getMontantInvesti(): ?float
    {
        return $this->montantInvesti;
    }

    public function setMontantInvesti(float $montantInvesti): self
    {
        $this->montantInvesti = $montantInvesti;
        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    public function getDateMaturite(): ?\DateTimeInterface
    {
        return $this->dateMaturite;
    }

    public function setDateMaturite(?\DateTimeInterface $dateMaturite): self
    {
        $this->dateMaturite = $dateMaturite;
        return $this;
    }
}