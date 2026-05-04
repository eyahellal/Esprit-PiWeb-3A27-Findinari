<?php

namespace App\Entity\management;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Loan\Wallet;
use App\Entity\management\Categorie;
use App\Repository\BudgetRepository;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[Assert\NotNull(message: 'Wallet is required')]
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
    #[Assert\NotNull(message: 'Category is required')]
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

   #[ORM\Column(type: 'decimal', nullable: false, name: 'montantMax')]
    #[Assert\NotNull(message: 'Maximum amount is required')]
    #[Assert\Positive(message: 'Amount must be greater than 0')]
    private ?float $montantMax = null;



    public function getMontantMax(): ?float
    {
        return $this->montantMax;
    }

    public function setMontantMax(?float $montantMax): self
{
    $this->montantMax = $montantMax;
    return $this;
}

    #[ORM\Column(type: 'integer', nullable: false, name: 'dureeBudget')]
    #[Assert\NotNull(message: 'Duration is required')]
    #[Assert\Positive(message: 'Duration must be greater than 0')]
    #[Assert\Range(
        min: 1,
        max: 365,
        notInRangeMessage: 'Duration must be between {{ min }} and {{ max }} days'
    )]
    private ?int $dureeBudget = null;


    public function getDureeBudget(): ?int
    {
        return $this->dureeBudget;
    }

    public function setDureeBudget(?int $dureeBudget): self
{
    $this->dureeBudget = $dureeBudget;
    return $this;
}


  #[ORM\Column(type: 'date', nullable: false, name: 'dateBudget')]
    #[Assert\NotNull(message: 'Date is required')]
    private ?\DateTimeInterface $dateBudget = null;

    public function getDateBudget(): ?\DateTimeInterface
    {
        return $this->dateBudget;
    }

    public function setDateBudget(?\DateTimeInterface $dateBudget): self
{
    $this->dateBudget = $dateBudget;
    return $this;
}

}
