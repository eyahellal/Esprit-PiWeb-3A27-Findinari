<?php

namespace App\Entity\management;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Loan\Wallet;
use App\Entity\management\Categorie;
use App\Repository\TransactionRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ORM\Table(name: 'transaction')]
class Transaction
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

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'transactions')]
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

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'transactions')]
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

 #[ORM\Column(type: 'string', nullable: false)]
#[Assert\NotBlank(message: 'Type is required')]
#[Assert\Choice(
    choices: ['income', 'depense'],
    message: 'Type must be either income or depense'
)]
private ?string $type = null;
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
{
    $this->type = $type;
    return $this;
}

    #[ORM\Column(type: 'decimal', nullable: false)]
#[Assert\NotNull(message: 'Amount is required')]
#[Assert\Positive(message: 'Amount must be greater than 0')]
private ?float $montant = null;

    public function getMontant(): ?float
    {
        return $this->montant;
    }
public function setMontant(?float $montant): self
{
    $this->montant = $montant;
    return $this;
}
    #[ORM\Column(type: 'string', nullable: false)]
#[Assert\NotBlank(message: 'Currency is required')]
private ?string $devise = null;

    public function getDevise(): ?string
    {
        return $this->devise;
    }

  public function setDevise(?string $devise): self
{
    $this->devise = $devise;
    return $this;
}

    #[ORM\Column(type: 'datetime', nullable: false)]
#[Assert\NotNull(message: 'Date is required')]
private ?\DateTimeInterface $date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
{
    $this->date = $date;
    return $this;
}

#[ORM\Column(type: 'text', nullable: true)]
#[Assert\Length(
    max: 255,
    maxMessage: 'Description cannot exceed {{ limit }} characters'
)]
private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
// Add these properties to your existing Transaction entity

#[ORM\Column(type: 'boolean')]
private bool $isRecurring = false;

#[ORM\Column(type: 'string', nullable: true)]
#[Assert\Choice(
    choices: ['daily', 'weekly', 'monthly', 'yearly'],
    message: 'Frequency must be daily, weekly, monthly, or yearly'
)]
private ?string $frequency = null;

#[ORM\Column(type: 'date', nullable: true)]
private ?\DateTimeInterface $nextExecutionDate = null;

#[ORM\Column(type: 'date', nullable: true)]
private ?\DateTimeInterface $endDate = null;

// Getters & Setters

public function isRecurring(): bool { return $this->isRecurring; }
public function setIsRecurring(bool $isRecurring): self { $this->isRecurring = $isRecurring; return $this; }

public function getFrequency(): ?string { return $this->frequency; }
public function setFrequency(?string $frequency): self { $this->frequency = $frequency; return $this; }

public function getNextExecutionDate(): ?\DateTimeInterface { return $this->nextExecutionDate; }
public function setNextExecutionDate(?\DateTimeInterface $nextExecutionDate): self { $this->nextExecutionDate = $nextExecutionDate; return $this; }

public function getEndDate(): ?\DateTimeInterface { return $this->endDate; }
public function setEndDate(?\DateTimeInterface $endDate): self { $this->endDate = $endDate; return $this; }
}
