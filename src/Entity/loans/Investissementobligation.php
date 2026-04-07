<?php

namespace App\Entity\loans;

use App\Repository\InvestissementobligationRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\management\Wallet;

#[ORM\Entity(repositoryClass: InvestissementobligationRepository::class)]
#[ORM\Table(name: 'investissementobligation')]
class Investissementobligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idInvestissement', type: 'integer')]
    private ?int $idInvestissement = null;

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'investissementobligations')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id')]
    private ?Wallet $wallet = null;

    #[ORM\ManyToOne(targetEntity: Obligation::class, inversedBy: 'investissementobligations')]
    #[ORM\JoinColumn(name: 'obligation_id', referencedColumnName: 'idObligation')]
    private ?Obligation $obligation = null;

    #[ORM\Column(name: 'montantInvesti', type: 'decimal', precision: 15, scale: 2)]
    private ?string $montantInvesti = null;

    #[ORM\Column(name: 'dateAchat', type: 'date')]
    private ?\DateTimeInterface $dateAchat = null;

    #[ORM\Column(name: 'dateMaturite', type: 'date')]
    private ?\DateTimeInterface $dateMaturite = null;

    public function getIdInvestissement(): ?int { return $this->idInvestissement; }
    public function setIdInvestissement(int $idInvestissement): self { $this->idInvestissement = $idInvestissement; return $this; }
    public function getWallet(): ?Wallet { return $this->wallet; }
    public function setWallet(?Wallet $wallet): self { $this->wallet = $wallet; return $this; }
    public function getObligation(): ?Obligation { return $this->obligation; }
    public function setObligation(?Obligation $obligation): self { $this->obligation = $obligation; return $this; }
    public function getMontantInvesti(): ?string { return $this->montantInvesti; }
    public function setMontantInvesti(string $montantInvesti): self { $this->montantInvesti = $montantInvesti; return $this; }
    public function getDateAchat(): ?\DateTimeInterface { return $this->dateAchat; }
    public function setDateAchat(\DateTimeInterface $dateAchat): self { $this->dateAchat = $dateAchat; return $this; }
    public function getDateMaturite(): ?\DateTimeInterface { return $this->dateMaturite; }
    public function setDateMaturite(\DateTimeInterface $dateMaturite): self { $this->dateMaturite = $dateMaturite; return $this; }
}
