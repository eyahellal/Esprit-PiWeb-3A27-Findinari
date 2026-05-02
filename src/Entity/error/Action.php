<?php

namespace App\Entity\error;

use App\Repository\ActionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
#[ORM\Table(name: 'action')]
class Action
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'symbol', type: 'string', length: 10)]
    private ?string $symbol = null;

    #[ORM\Column(name: 'nomSociete', type: 'string', length: 200)]
    private ?string $nomSociete = null;

    #[ORM\OneToMany(targetEntity: Transactionaction::class, mappedBy: 'action')]
    private Collection $transactionactions;

    public function __construct() { $this->transactionactions = new ArrayCollection(); }
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getSymbol(): ?string { return $this->symbol; }
    public function setSymbol(string $symbol): self { $this->symbol = $symbol; return $this; }
    public function getNomSociete(): ?string { return $this->nomSociete; }
    public function setNomSociete(string $nomSociete): self { $this->nomSociete = $nomSociete; return $this; }
    public function getTransactionactions(): Collection { return $this->transactionactions; }
}
