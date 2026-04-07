<?php

namespace App\Entity\objective;

use App\Repository\ObjectifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\management\Wallet;

#[ORM\Entity(repositoryClass: ObjectifRepository::class)]
#[ORM\Table(name: 'objectif')]
class Objectif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'objectifs')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id')]
    private ?Wallet $wallet = null;

    #[ORM\Column(name: 'titre', type: 'string', length: 200)]
    private ?string $titre = null;

    #[ORM\Column(name: 'montant', type: 'decimal', precision: 15, scale: 2)]
    private ?string $montant = null;

    #[ORM\Column(name: 'dateDebut', type: 'date')]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(name: 'duree', type: 'integer')]
    private ?int $duree = null;

    #[ORM\Column(name: 'statut', type: 'string', length: 20)]
    private ?string $statut = null;

    #[ORM\OneToMany(targetEntity: Contributiongoal::class, mappedBy: 'objectif')]
    private Collection $contributiongoals;

    public function __construct() { $this->contributiongoals = new ArrayCollection(); }
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getWallet(): ?Wallet { return $this->wallet; }
    public function setWallet(?Wallet $wallet): self { $this->wallet = $wallet; return $this; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): self { $this->titre = $titre; return $this; }
    public function getMontant(): ?string { return $this->montant; }
    public function setMontant(string $montant): self { $this->montant = $montant; return $this; }
    public function getDateDebut(): ?\DateTimeInterface { return $this->dateDebut; }
    public function setDateDebut(\DateTimeInterface $dateDebut): self { $this->dateDebut = $dateDebut; return $this; }
    public function getDuree(): ?int { return $this->duree; }
    public function setDuree(int $duree): self { $this->duree = $duree; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }
    public function getContributiongoals(): Collection { return $this->contributiongoals; }
}
