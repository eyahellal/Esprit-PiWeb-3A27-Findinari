<?php

namespace App\Entity\management;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\CategorieRepository;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
#[ORM\Table(name: 'categorie')]
class Categorie
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: true)]
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $color = null;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $icon = null;

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Budget::class, mappedBy: 'categorie')]
    private Collection $budgets;

    /**
     * @return Collection<int, Budget>
     */
    public function getBudgets(): Collection
    {
        if (!$this->budgets instanceof Collection) {
            $this->budgets = new ArrayCollection();
        }
        return $this->budgets;
    }

    public function addBudget(Budget $budget): self
    {
        if (!$this->getBudgets()->contains($budget)) {
            $this->getBudgets()->add($budget);
        }
        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        $this->getBudgets()->removeElement($budget);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Transaction::class, mappedBy: 'categorie')]
    private Collection $transactions;

    public function __construct()
    {
        $this->budgets = new ArrayCollection();
        $this->transactions = new ArrayCollection();
    }

    /**
     * @return Collection<int, Transaction>
     */
    public function getTransactions(): Collection
    {
        if (!$this->transactions instanceof Collection) {
            $this->transactions = new ArrayCollection();
        }
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->getTransactions()->contains($transaction)) {
            $this->getTransactions()->add($transaction);
        }
        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        $this->getTransactions()->removeElement($transaction);
        return $this;
    }

}
