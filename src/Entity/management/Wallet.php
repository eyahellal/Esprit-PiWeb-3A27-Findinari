<?php

namespace App\Entity\management;

use App\Repository\WalletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\error\Portefeuilleaction;
use App\Entity\loans\Investissementobligation;
use App\Entity\objective\Objectif;
use App\Entity\user\Utilisateur;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
#[ORM\Table(name: 'wallet')]
class Wallet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'wallets')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(name: 'pays', type: 'string', length: 100)]
    private ?string $pays = null;

    #[ORM\Column(name: 'solde', type: 'decimal', precision: 15, scale: 2, nullable: true)]
    private ?string $solde = null;

    #[ORM\Column(name: 'devise', type: 'string', length: 10)]
    private ?string $devise = null;

    #[ORM\OneToMany(targetEntity: Budget::class, mappedBy: 'wallet')]
    private Collection $budgets;

    #[ORM\OneToMany(targetEntity: Investissementobligation::class, mappedBy: 'wallet')]
    private Collection $investissementobligations;

    #[ORM\OneToMany(targetEntity: Objectif::class, mappedBy: 'wallet')]
    private Collection $objectifs;

    #[ORM\OneToOne(targetEntity: Portefeuilleaction::class, mappedBy: 'wallet')]
    private ?Portefeuilleaction $portefeuilleaction = null;

    #[ORM\OneToMany(targetEntity: Transaction::class, mappedBy: 'wallet')]
    private Collection $transactions;

    public function __construct()
    {
        $this->budgets = new ArrayCollection();
        $this->investissementobligations = new ArrayCollection();
        $this->objectifs = new ArrayCollection();
        $this->transactions = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getPays(): ?string { return $this->pays; }
    public function setPays(string $pays): self { $this->pays = $pays; return $this; }
    public function getSolde(): ?string { return $this->solde; }
    public function setSolde(?string $solde): self { $this->solde = $solde; return $this; }
    public function getDevise(): ?string { return $this->devise; }
    public function setDevise(string $devise): self { $this->devise = $devise; return $this; }
    public function getBudgets(): Collection { return $this->budgets; }
    public function getInvestissementobligations(): Collection { return $this->investissementobligations; }
    public function getObjectifs(): Collection { return $this->objectifs; }
    public function getPortefeuilleaction(): ?Portefeuilleaction { return $this->portefeuilleaction; }
    public function setPortefeuilleaction(?Portefeuilleaction $portefeuilleaction): self { $this->portefeuilleaction = $portefeuilleaction; return $this; }
    public function getTransactions(): Collection { return $this->transactions; }
}
