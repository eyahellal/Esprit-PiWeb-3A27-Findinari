<?php

namespace App\Entity\reclamation;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\user\Utilisateur;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
#[ORM\Table(name: 'message')]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Ticket::class, inversedBy: 'messages')]
    #[ORM\JoinColumn(name: 'ticket_id', referencedColumnName: 'id')]
    private ?Ticket $ticket = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'messages')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(name: 'contenu', type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(name: 'date', type: 'datetime')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(name: 'typeSender', type: 'string', length: 20)]
    private ?string $typeSender = null;

    #[ORM\Column(name: 'urlPieceJointe', type: 'string', length: 255, nullable: true)]
    private ?string $urlPieceJointe = null;

    public function getId(): ?int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }
    public function getTicket(): ?Ticket { return $this->ticket; }
    public function setTicket(?Ticket $ticket): self { $this->ticket = $ticket; return $this; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): self { $this->contenu = $contenu; return $this; }
    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(\DateTimeInterface $date): self { $this->date = $date; return $this; }
    public function getTypeSender(): ?string { return $this->typeSender; }
    public function setTypeSender(string $typeSender): self { $this->typeSender = $typeSender; return $this; }
    public function getUrlPieceJointe(): ?string { return $this->urlPieceJointe; }
    public function setUrlPieceJointe(?string $urlPieceJointe): self { $this->urlPieceJointe = $urlPieceJointe; return $this; }
}
