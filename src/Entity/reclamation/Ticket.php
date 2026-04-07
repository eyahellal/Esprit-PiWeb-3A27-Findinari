<?php

namespace App\Entity\reclamation;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\user\Utilisateur;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
#[ORM\Table(name: 'ticket')]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'tickets')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(name: 'titre', type: 'string', length: 200)]
    private ?string $titre = null;

    #[ORM\Column(name: 'type', type: 'string', length: 50)]
    private ?string $type = null;

    #[ORM\Column(name: 'statut', type: 'string', length: 20)]
    private ?string $statut = null;

    #[ORM\Column(name: 'priorite', type: 'string', length: 20)]
    private ?string $priorite = null;

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateFermeture', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateFermeture = null;

    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'ticket')]
    private Collection $messages;

    public function __construct() { $this->messages = new ArrayCollection(); }
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): self { $this->titre = $titre; return $this; }
    public function getType(): ?string { return $this->type; }
    public function setType(string $type): self { $this->type = $type; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }
    public function getPriorite(): ?string { return $this->priorite; }
    public function setPriorite(string $priorite): self { $this->priorite = $priorite; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getDateFermeture(): ?\DateTimeInterface { return $this->dateFermeture; }
    public function setDateFermeture(?\DateTimeInterface $dateFermeture): self { $this->dateFermeture = $dateFermeture; return $this; }
    public function getMessages(): Collection { return $this->messages; }
}
