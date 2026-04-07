<?php

namespace App\Entity\Loan;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ObligationRepository;

#[ORM\Entity(repositoryClass: ObligationRepository::class)]
#[ORM\Table(name: 'obligation')]
class Obligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idObligation', type: 'integer')]  // ← Match your DB column name
    private ?int $idObligation = null;

    #[ORM\Column(name: 'nom', type: 'string', length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name: 'tauxInteret', type: 'decimal', precision: 10, scale: 2)]
    private ?float $tauxInteret = null;

    #[ORM\Column(name: 'duree', type: 'integer')]
    private ?int $duree = null;

    // Getters and setters...
    public function getIdObligation(): ?int
    {
        return $this->idObligation;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getTauxInteret(): ?float
    {
        return $this->tauxInteret;
    }

    public function setTauxInteret(float $tauxInteret): self
    {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;
        return $this;
    }
}