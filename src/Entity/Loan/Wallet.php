<?php

namespace App\Entity\Loan;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\WalletRepository;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
#[ORM\Table(name: 'wallet')]
class Wallet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    // COMMENT OUT the Utilisateur relationship
    /*
    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'wallets')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }
    */

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $pays = null;

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: true)]
    private ?float $solde = null;

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(?float $solde): self
    {
        $this->solde = $solde;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $devise = null;

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): self
    {
        $this->devise = $devise;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Investissementobligation::class, mappedBy: 'wallet')]
    private Collection $investissementobligations;

    public function __construct()
    {
        $this->investissementobligations = new ArrayCollection();
    }

    public function getInvestissementobligations(): Collection
    {
        return $this->investissementobligations;
    }

    public function addInvestissementobligation(Investissementobligation $investissementobligation): self
    {
        if (!$this->investissementobligations->contains($investissementobligation)) {
            $this->investissementobligations->add($investissementobligation);
        }
        return $this;
    }

    public function removeInvestissementobligation(Investissementobligation $investissementobligation): self
    {
        $this->investissementobligations->removeElement($investissementobligation);
        return $this;
    }
}