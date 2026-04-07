<?php

namespace App\Entity\management;

use App\Repository\BudgetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BudgetRepository::class)]
#[ORM\Table(name: 'budget')]
class Budget
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'budgets')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id')]
    private ?Wallet $wallet = null;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'budgets')]
    #[ORM\JoinColumn(name: 'categorie_id', referencedColumnName: 'id')]
    private ?Categorie $categorie = null;

    #[ORM\Column(name: 'montantMax', type: 'decimal', precision: 15, scale: 2)]
    private ?string $montantMax = null;

    #[ORM\Column(name: 'dureeBudget', type: 'integer')]
    private ?int $dureeBudget = null;

    #[ORM\Column(name: 'dateBudget', type: 'date')]
    private ?\DateTimeInterface $dateBudget = null;

    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getWallet(): ?Wallet { return $this->wallet; }
    public function setWallet(?Wallet $wallet): self { $this->wallet = $wallet; return $this; }
    public function getCategorie(): ?Categorie { return $this->categorie; }
    public function setCategorie(?Categorie $categorie): self { $this->categorie = $categorie; return $this; }
    public function getMontantMax(): ?string { return $this->montantMax; }
    public function setMontantMax(string $montantMax): self { $this->montantMax = $montantMax; return $this; }
    public function getDureeBudget(): ?int { return $this->dureeBudget; }
    public function setDureeBudget(int $dureeBudget): self { $this->dureeBudget = $dureeBudget; return $this; }
    public function getDateBudget(): ?\DateTimeInterface { return $this->dateBudget; }
    public function setDateBudget(\DateTimeInterface $dateBudget): self { $this->dateBudget = $dateBudget; return $this; }
}
