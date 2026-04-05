<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\BudgetRepository;

#[ORM\Entity(repositoryClass: BudgetRepository::class)]
#[ORM\Table(name: 'budget')]
class Budget
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'budgets')]
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

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'budgets')]
    #[ORM\JoinColumn(name: 'categorie_id', referencedColumnName: 'id')]
    private ?Categorie $categorie = null;

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $montantMax = null;

    public function getMontantMax(): ?float
    {
        return $this->montantMax;
    }

    public function setMontantMax(float $montantMax): self
    {
        $this->montantMax = $montantMax;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $dureeBudget = null;

    public function getDureeBudget(): ?int
    {
        return $this->dureeBudget;
    }

    public function setDureeBudget(int $dureeBudget): self
    {
        $this->dureeBudget = $dureeBudget;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $dateBudget = null;

    public function getDateBudget(): ?\DateTimeInterface
    {
        return $this->dateBudget;
    }

    public function setDateBudget(\DateTimeInterface $dateBudget): self
    {
        $this->dateBudget = $dateBudget;
        return $this;
    }

}
