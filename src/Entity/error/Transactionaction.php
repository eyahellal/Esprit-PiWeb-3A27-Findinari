<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\TransactionactionRepository;

#[ORM\Entity(repositoryClass: TransactionactionRepository::class)]
#[ORM\Table(name: 'transactionaction')]
class Transactionaction
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

    #[ORM\ManyToOne(targetEntity: Portefeuilleaction::class, inversedBy: 'transactionactions')]
    #[ORM\JoinColumn(name: 'portefeuille_action_id', referencedColumnName: 'id')]
    private ?Portefeuilleaction $portefeuilleaction = null;

    public function getPortefeuilleaction(): ?Portefeuilleaction
    {
        return $this->portefeuilleaction;
    }

    public function setPortefeuilleaction(?Portefeuilleaction $portefeuilleaction): self
    {
        $this->portefeuilleaction = $portefeuilleaction;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Action::class, inversedBy: 'transactionactions')]
    #[ORM\JoinColumn(name: 'action_id', referencedColumnName: 'id')]
    private ?Action $action = null;

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $quantite = null;

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $prixUnitaire = null;

    public function getPrixUnitaire(): ?float
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(float $prixUnitaire): self
    {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

}
