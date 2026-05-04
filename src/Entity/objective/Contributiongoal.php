<?php

namespace App\Entity\objective;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ContributiongoalRepository;

#[ORM\Entity(repositoryClass: ContributiongoalRepository::class)]
#[ORM\Table(name: 'contributiongoal')]
class Contributiongoal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Objectif::class, inversedBy: 'contributiongoals')]
    #[ORM\JoinColumn(name: 'objectif_id', referencedColumnName: 'id', nullable: false)]
    private ?Objectif $objectif = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: false)]
    private ?float $montant = null;

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date = null;

    // ───────────────────────────────────────────
    public function getId(): ?int { return $this->id; }

    // ── OBJECTIF ────────────────────────────────
    public function getObjectif(): ?Objectif { return $this->objectif; }

    /**
     * Setter permissif — la validation métier est déléguée à ContributionManager::validate()
     */
    public function setObjectif(?Objectif $objectif): self
    {
        $this->objectif = $objectif;
        return $this;
    }

    // ── MONTANT ─────────────────────────────────
    public function getMontant(): ?float { return $this->montant; }

    /**
     * Setter permissif — la validation métier est déléguée à ContributionManager::validate()
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    // ── DATE ────────────────────────────────────
    public function getDate(): ?\DateTimeInterface { return $this->date; }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }
}