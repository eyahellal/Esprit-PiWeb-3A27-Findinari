<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ActionRepository;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
#[ORM\Table(name: 'action')]
class Action
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $symbol = null;

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nomSociete = null;

    public function getNomSociete(): ?string
    {
        return $this->nomSociete;
    }

    public function setNomSociete(string $nomSociete): self
    {
        $this->nomSociete = $nomSociete;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Transactionaction::class, mappedBy: 'action')]
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
