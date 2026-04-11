<?php

namespace App\Entity\error;

use App\Repository\TransactionactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionactionRepository::class)]
#[ORM\Table(name: 'transactionaction')]
class Transactionaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Portefeuilleaction::class, inversedBy: 'transactionactions')]
    #[ORM\JoinColumn(name: 'portefeuille_action_id', referencedColumnName: 'id')]
    private ?Portefeuilleaction $portefeuilleaction = null;

    #[ORM\ManyToOne(targetEntity: Action::class, inversedBy: 'transactionactions')]
    #[ORM\JoinColumn(name: 'action_id', referencedColumnName: 'id')]
    private ?Action $action = null;

    #[ORM\Column(name: 'type', type: 'string', length: 20)]
    private ?string $type = null;

    #[ORM\Column(name: 'quantite', type: 'integer')]
    private ?int $quantite = null;

    #[ORM\Column(name: 'prixUnitaire', type: 'decimal', precision: 15, scale: 2)]
    private ?string $prixUnitaire = null;

    #[ORM\Column(name: 'date', type: 'datetime')]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getPortefeuilleaction(): ?Portefeuilleaction { return $this->portefeuilleaction; }
    public function setPortefeuilleaction(?Portefeuilleaction $portefeuilleaction): self { $this->portefeuilleaction = $portefeuilleaction; return $this; }
    public function getAction(): ?Action { return $this->action; }
    public function setAction(?Action $action): self { $this->action = $action; return $this; }
    public function getType(): ?string { return $this->type; }
    public function setType(string $type): self { $this->type = $type; return $this; }
    public function getQuantite(): ?int { return $this->quantite; }
    public function setQuantite(int $quantite): self { $this->quantite = $quantite; return $this; }
    public function getPrixUnitaire(): ?string { return $this->prixUnitaire; }
    public function setPrixUnitaire(string $prixUnitaire): self { $this->prixUnitaire = $prixUnitaire; return $this; }
    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(\DateTimeInterface $date): self { $this->date = $date; return $this; }
}
