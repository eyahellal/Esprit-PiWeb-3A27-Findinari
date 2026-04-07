<?php

namespace App\Entity\error;

use App\Repository\PortefeuilleactionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\management\Wallet;

#[ORM\Entity(repositoryClass: PortefeuilleactionRepository::class)]
#[ORM\Table(name: 'portefeuilleaction')]
class Portefeuilleaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\OneToOne(targetEntity: Wallet::class, inversedBy: 'portefeuilleaction')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id', unique: true)]
    private ?Wallet $wallet = null;

    #[ORM\Column(name: 'rendement', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?string $rendement = null;

    #[ORM\Column(name: 'dateCreation', type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\OneToMany(targetEntity: Transactionaction::class, mappedBy: 'portefeuilleaction')]
    private Collection $transactionactions;

    public function __construct() { $this->transactionactions = new ArrayCollection(); }
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getWallet(): ?Wallet { return $this->wallet; }
    public function setWallet(?Wallet $wallet): self { $this->wallet = $wallet; return $this; }
    public function getRendement(): ?string { return $this->rendement; }
    public function setRendement(?string $rendement): self { $this->rendement = $rendement; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getTransactionactions(): Collection { return $this->transactionactions; }
}
