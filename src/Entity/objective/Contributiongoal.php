<?php

namespace App\Entity\objective;

use App\Repository\ContributiongoalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContributiongoalRepository::class)]
#[ORM\Table(name: 'contributiongoal')]
class Contributiongoal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Objectif::class, inversedBy: 'contributiongoals')]
    #[ORM\JoinColumn(name: 'objectif_id', referencedColumnName: 'id')]
    private ?Objectif $objectif = null;

    #[ORM\Column(name: 'montant', type: 'decimal', precision: 15, scale: 2)]
    private ?string $montant = null;

    #[ORM\Column(name: 'date', type: 'datetime')]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getObjectif(): ?Objectif { return $this->objectif; }
    public function setObjectif(?Objectif $objectif): self { $this->objectif = $objectif; return $this; }
    public function getMontant(): ?string { return $this->montant; }
    public function setMontant(string $montant): self { $this->montant = $montant; return $this; }
    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(\DateTimeInterface $date): self { $this->date = $date; return $this; }
}
