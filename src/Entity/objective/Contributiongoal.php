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

    public function setObjectif(?Objectif $objectif): self
    {
        if ($objectif === null) {
            throw new \InvalidArgumentException("L'objectif est obligatoire.");
        }
        $this->objectif = $objectif;
        return $this;
    }

    // ── MONTANT ─────────────────────────────────
    public function getMontant(): ?float { return $this->montant; }

    public function setMontant(float $montant): self
    {
        if ($montant <= 0) {
            throw new \InvalidArgumentException("Le montant doit être positif ");
        }
        if ($montant > 99_999_999.99) {
            throw new \InvalidArgumentException("Le montant ne peut pas dépasser 99 999 999,99.");
        }
        if (round($montant, 2) !== $montant) {
            throw new \InvalidArgumentException("Le montant ne peut avoir que 2 décimales maximum.");
        }
        $this->montant = $montant;
        return $this;
    }

    // ── DATE ────────────────────────────────────
    public function getDate(): ?\DateTimeInterface { return $this->date; }

    public function setDate(\DateTimeInterface $date): self
    {
        
       
        $this->date = $date;
        return $this;
    }
}