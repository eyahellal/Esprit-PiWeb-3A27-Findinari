<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\WalletRepository;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
#[ORM\Table(name: 'wallet')]
class Wallet
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

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'wallets')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $pays = null;

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: true)]
    private ?float $solde = null;

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(?float $solde): self
    {
        $this->solde = $solde;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $devise = null;

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): self
    {
        $this->devise = $devise;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Budget::class, mappedBy: 'wallet')]
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

    #[ORM\OneToMany(targetEntity: Investissementobligation::class, mappedBy: 'wallet')]
    private Collection $investissementobligations;

    /**
     * @return Collection<int, Investissementobligation>
     */
    public function getInvestissementobligations(): Collection
    {
        if (!$this->investissementobligations instanceof Collection) {
            $this->investissementobligations = new ArrayCollection();
        }
        return $this->investissementobligations;
    }

    public function addInvestissementobligation(Investissementobligation $investissementobligation): self
    {
        if (!$this->getInvestissementobligations()->contains($investissementobligation)) {
            $this->getInvestissementobligations()->add($investissementobligation);
        }
        return $this;
    }

    public function removeInvestissementobligation(Investissementobligation $investissementobligation): self
    {
        $this->getInvestissementobligations()->removeElement($investissementobligation);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Objectif::class, mappedBy: 'wallet')]
    private Collection $objectifs;

    /**
     * @return Collection<int, Objectif>
     */
    public function getObjectifs(): Collection
    {
        if (!$this->objectifs instanceof Collection) {
            $this->objectifs = new ArrayCollection();
        }
        return $this->objectifs;
    }

    public function addObjectif(Objectif $objectif): self
    {
        if (!$this->getObjectifs()->contains($objectif)) {
            $this->getObjectifs()->add($objectif);
        }
        return $this;
    }

    public function removeObjectif(Objectif $objectif): self
    {
        $this->getObjectifs()->removeElement($objectif);
        return $this;
    }

    #[ORM\OneToOne(targetEntity: Portefeuilleaction::class, mappedBy: 'wallet')]
    private ?Portefeuilleaction $portefeuilleaction = null;

    public function getPortefeuilleaction(): ?Portefeuilleaction
    {
        return $this->portefeuilleaction;
    }

    public function setPortefeuilleaction(?Portefeuilleaction $portefeuilleaction): self
    {
        $this->portefeuilleaction = $portefeuilleaction;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Transaction::class, mappedBy: 'wallet')]
    private Collection $transactions;

    public function __construct()
    {
        $this->budgets = new ArrayCollection();
        $this->investissementobligations = new ArrayCollection();
        $this->objectifs = new ArrayCollection();
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
