<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ObligationRepository;

#[ORM\Entity(repositoryClass: ObligationRepository::class)]
#[ORM\Table(name: 'obligation')]
class Obligation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idObligation = null;

    public function getIdObligation(): ?int
    {
        return $this->idObligation;
    }

    public function setIdObligation(int $idObligation): self
    {
        $this->idObligation = $idObligation;
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

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $tauxInteret = null;

    public function getTauxInteret(): ?float
    {
        return $this->tauxInteret;
    }

    public function setTauxInteret(float $tauxInteret): self
    {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $duree = null;

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Investissementobligation::class, mappedBy: 'obligation')]
    private Collection $investissementobligations;

    public function __construct()
    {
        $this->investissementobligations = new ArrayCollection();
    }

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

}
