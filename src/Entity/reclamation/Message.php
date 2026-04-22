<?php

namespace App\Entity\reclamation;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\user\Utilisateur;
use App\Entity\reclamation\Ticket;
use App\Repository\MessageRepository;


#[ORM\Entity(repositoryClass: MessageRepository::class)]
#[ORM\Table(name: 'message')]
class Message
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

    #[ORM\ManyToOne(targetEntity: Ticket::class, inversedBy: 'messages')]
    #[ORM\JoinColumn(name: 'ticket_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private ?Ticket $ticket = null;

    public function getTicket(): ?Ticket
    {
        return $this->ticket;
    }

    public function setTicket(?Ticket $ticket): self
    {
        $this->ticket = $ticket;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'messages')]
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

    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotBlank(message: 'Le message ne peut pas être vide.')]
    private ?string $contenu = null;

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;
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

    #[ORM\Column(name: 'typeSender', type: 'string', nullable: false)]
    private ?string $typeSender = null;

    public function getTypeSender(): ?string
    {
        return $this->typeSender;
    }

    public function setTypeSender(string $typeSender): self
    {
        $this->typeSender = $typeSender;
        return $this;
    }

    #[ORM\Column(name: 'urlPieceJointe', type: 'string', nullable: true)]
    private ?string $urlPieceJointe = null;

    public function getUrlPieceJointe(): ?string
    {
        return $this->urlPieceJointe;
    }

    public function setUrlPieceJointe(?string $urlPieceJointe): self
    {
        $this->urlPieceJointe = $urlPieceJointe;
        return $this;
    }

}
