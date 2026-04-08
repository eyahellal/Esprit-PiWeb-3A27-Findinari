<?php

namespace App\Entity\objective;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


use App\Entity\Loan\Wallet;
use App\Entity\Categorie;




#[ORM\Entity(repositoryClass: ObjectifRepository::class)]
#[ORM\Table(name: 'objectif')]
class Objectif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int { return $this->id; }

    // ── TITRE ──────────────────────────────────────────────
    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: 'Le titre doit contenir au moins {{ limit }} caractères.',
        maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[\p{L}0-9\s\-_\'.]+$/u',
        message: 'Le titre contient des caractères non autorisés.'
    )]
    private ?string $titre = null;

    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): self { $this->titre = $titre; return $this; }

    // ── MONTANT ────────────────────────────────────────────
    #[ORM\Column(type: 'decimal', nullable: false)]
    #[Assert\NotBlank(message: 'Le montant est obligatoire.')]
    #[Assert\Positive(message: 'Le montant doit être un nombre positif.')]
    #[Assert\LessThanOrEqual(
        value: 1_000_000,
        message: 'Le montant ne peut pas dépasser 1 000 000.'
    )]
    #[Assert\Type(
        type: 'numeric',
        message: 'Le montant doit être un nombre valide.'
    )]
    private ?float $montant = null;

    public function getMontant(): ?float { return $this->montant; }
    public function setMontant(float $montant): self { $this->montant = $montant; return $this; }

    // ── DATE DÉBUT ─────────────────────────────────────────
    #[ORM\Column(type: 'date', name: 'dateDebut', nullable: false)]
    #[Assert\NotBlank(message: 'La date de début est obligatoire.')]
    #[Assert\Type(
        type: \DateTimeInterface::class,
        message: 'La date de début doit être une date valide.'
    )]
    #[Assert\GreaterThanOrEqual(
        value: 'today',
        message: 'La date de début ne peut pas être dans le passé.'
    )]
    private ?\DateTimeInterface $dateDebut = null;

    public function getDateDebut(): ?\DateTimeInterface { return $this->dateDebut; }
    public function setDateDebut(\DateTimeInterface $dateDebut): self { $this->dateDebut = $dateDebut; return $this; }

    // ── DURÉE ──────────────────────────────────────────────
    #[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotBlank(message: 'La durée est obligatoire.')]
    #[Assert\Positive(message: 'La durée doit être un nombre de jours positif.')]
    #[Assert\LessThanOrEqual(
        value: 3650,
        message: 'La durée ne peut pas dépasser 3650 jours (10 ans).'
    )]
    #[Assert\Type(
        type: 'integer',
        message: 'La durée doit être un nombre entier de jours.'
    )]
    private ?int $duree = null;

    public function getDuree(): ?int { return $this->duree; }
    public function setDuree(int $duree): self { $this->duree = $duree; return $this; }

    // ── STATUT ─────────────────────────────────────────────
    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Le statut est obligatoire.')]
    #[Assert\Choice(
        choices: ['EN_COURS', 'TERMINE', 'PAUSE'],
        message: 'Le statut doit être EN_COURS, TERMINE ou PAUSE.'
    )]
    private ?string $statut = null;

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    // ── WALLET ID ──────────────────────────────────────────
    #[ORM\Column(type: 'integer', name: 'wallet_id', nullable: false)]
    #[Assert\NotNull(message: 'Un wallet doit être sélectionné.')]
    #[Assert\Positive(message: 'Le wallet ID doit être un entier positif.')]
    private ?int $walletId = null;

    public function getWalletId(): ?int { return $this->walletId; }
    public function setWalletId(int $walletId): self { $this->walletId = $walletId; return $this; }

    // ── CONTRIBUTIONS ──────────────────────────────────────
    #[ORM\OneToMany(targetEntity: Contributiongoal::class, mappedBy: 'objectif')]
    private Collection $contributiongoals;

    public function __construct()
    {
        $this->contributiongoals = new ArrayCollection();
        $this->statut = 'EN_COURS'; // valeur par défaut
    }

    public function getContributiongoals(): Collection
    {
        if (!$this->contributiongoals instanceof Collection) {
            $this->contributiongoals = new ArrayCollection();
        }
        return $this->contributiongoals;
    }

    public function addContributiongoal(Contributiongoal $contributiongoal): self
    {
        if (!$this->getContributiongoals()->contains($contributiongoal)) {
            $this->getContributiongoals()->add($contributiongoal);
        }
        return $this;
    }

    public function removeContributiongoal(Contributiongoal $contributiongoal): self
    {
        $this->getContributiongoals()->removeElement($contributiongoal);
        return $this;
    }
}