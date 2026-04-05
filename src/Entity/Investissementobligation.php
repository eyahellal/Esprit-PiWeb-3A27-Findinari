<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\InvestissementobligationRepository;

#[ORM\Entity(repositoryClass: InvestissementobligationRepository::class)]
#[ORM\Table(name: 'investissementobligation')]
class Investissementobligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idInvestissement = null;

    public function getIdInvestissement(): ?int
    {
        return $this->idInvestissement;
    }

    public function setIdInvestissement(int $idInvestissement): self
    {
        $this->idInvestissement = $idInvestissement;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'investissementobligations')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id')]
    private ?Wallet $wallet = null;

    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    public function setWallet(?Wallet $wallet): self
    {
        $this->wallet = $wallet;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Obligation::class, inversedBy: 'investissementobligations')]
    #[ORM\JoinColumn(name: 'obligation_id', referencedColumnName: 'idObligation')]
    private ?Obligation $obligation = null;

    public function getObligation(): ?Obligation
    {
        return $this->obligation;
    }

    public function setObligation(?Obligation $obligation): self
    {
        $this->obligation = $obligation;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $montantInvesti = null;

    public function getMontantInvesti(): ?float
    {
        return $this->montantInvesti;
    }

    public function setMontantInvesti(float $montantInvesti): self
    {
        $this->montantInvesti = $montantInvesti;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $dateAchat = null;

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $dateMaturite = null;

    public function getDateMaturite(): ?\DateTimeInterface
    {
        return $this->dateMaturite;
    }

    public function setDateMaturite(\DateTimeInterface $dateMaturite): self
    {
        $this->dateMaturite = $dateMaturite;
        return $this;
    }

}
