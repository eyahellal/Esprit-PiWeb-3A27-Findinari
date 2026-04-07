<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Loan\Wallet;
use App\Entity\Categorie;
use App\Repository\ObjectifRepository;

#[ORM\Entity(repositoryClass: ObjectifRepository::class)]
#[ORM\Table(name: 'objectif')]
class Objectif
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

    #[ORM\ManyToOne(targetEntity: Wallet::class, inversedBy: 'objectifs')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id')]
    private ?Wallet $wallet = null;

    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    public function setWallet(?Wallet $wallet): self
    {
        $this->wallet = $wallet;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $titre = null;

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $montant = null;

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $dateDebut = null;

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Contributiongoal::class, mappedBy: 'objectif')]
    private Collection $contributiongoals;

    public function __construct()
    {
        $this->contributiongoals = new ArrayCollection();
    }

    /**
     * @return Collection<int, Contributiongoal>
     */
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
