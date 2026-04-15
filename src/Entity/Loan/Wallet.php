<?php

namespace App\Entity\Loan;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\WalletRepository;
use App\Entity\user\Utilisateur;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
#[ORM\Table(name: 'wallet')]
class Wallet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?string $id = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false)]
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

   #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Country is required')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Country must be at least {{ limit }} characters',
        maxMessage: 'Country cannot exceed {{ limit }} characters'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s\-]+$/',
        message: 'Country must contain only letters'
    )]
    private ?string $pays = null;

    public function getPays(): ?string
    {
        return $this->pays;
    }

  public function setPays(?string $pays): self
{
    $this->pays = $pays;
    return $this;
}

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    #[Assert\NotNull(message: 'Balance is required')]
    #[Assert\PositiveOrZero(message: 'Balance cannot be negative')]
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
    #[Assert\NotBlank(message: 'Currency is required')]
    #[Assert\Choice(
        choices: ['DT', 'EUR', 'USD', 'GBP'],
        message: 'Choose a valid currency (DT, EUR, USD, GBP)'
    )]
    private ?string $devise = null;

    public function getDevise(): ?string
    {
        return $this->devise;
    }

   
    public function setDevise(?string $devise): self
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
}