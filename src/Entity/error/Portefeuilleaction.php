<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\PortefeuilleactionRepository;

#[ORM\Entity(repositoryClass: PortefeuilleactionRepository::class)]
#[ORM\Table(name: 'portefeuilleaction')]
class Portefeuilleaction
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

    #[ORM\OneToOne(targetEntity: Wallet::class, inversedBy: 'portefeuilleaction')]
    #[ORM\JoinColumn(name: 'wallet_id', referencedColumnName: 'id', unique: true)]
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

    #[ORM\Column(type: 'decimal', nullable: true)]
    private ?float $rendement = null;

    public function getRendement(): ?float
    {
        return $this->rendement;
    }

    public function setRendement(?float $rendement): self
    {
        $this->rendement = $rendement;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $dateCreation = null;

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Transactionaction::class, mappedBy: 'portefeuilleaction')]
    private Collection $transactionactions;

    public function __construct()
    {
        $this->transactionactions = new ArrayCollection();
    }

    /**
     * @return Collection<int, Transactionaction>
     */
    public function getTransactionactions(): Collection
    {
        if (!$this->transactionactions instanceof Collection) {
            $this->transactionactions = new ArrayCollection();
        }
        return $this->transactionactions;
    }

    public function addTransactionaction(Transactionaction $transactionaction): self
    {
        if (!$this->getTransactionactions()->contains($transactionaction)) {
            $this->getTransactionactions()->add($transactionaction);
        }
        return $this;
    }

    public function removeTransactionaction(Transactionaction $transactionaction): self
    {
        $this->getTransactionactions()->removeElement($transactionaction);
        return $this;
    }

}
