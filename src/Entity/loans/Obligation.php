<?php

namespace App\Entity\loans;

use App\Repository\ObligationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObligationRepository::class)]
#[ORM\Table(name: 'obligation')]
class Obligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idObligation', type: 'integer')]
    private ?int $idObligation = null;

    #[ORM\Column(name: 'nom', type: 'string', length: 200)]
    private ?string $nom = null;

    #[ORM\Column(name: 'tauxInteret', type: 'decimal', precision: 5, scale: 2)]
    private ?string $tauxInteret = null;

    #[ORM\Column(name: 'duree', type: 'integer')]
    private ?int $duree = null;

    #[ORM\OneToMany(targetEntity: Investissementobligation::class, mappedBy: 'obligation')]
    private Collection $investissementobligations;

    public function __construct() { $this->investissementobligations = new ArrayCollection(); }
    public function getIdObligation(): ?int { return $this->idObligation; }
    public function setIdObligation(int $idObligation): self { $this->idObligation = $idObligation; return $this; }
    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }
    public function getTauxInteret(): ?string { return $this->tauxInteret; }
    public function setTauxInteret(string $tauxInteret): self { $this->tauxInteret = $tauxInteret; return $this; }
    public function getDuree(): ?int { return $this->duree; }
    public function setDuree(int $duree): self { $this->duree = $duree; return $this; }
    public function getInvestissementobligations(): Collection { return $this->investissementobligations; }
}
