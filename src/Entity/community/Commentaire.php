<?php

namespace App\Entity\community;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\user\Utilisateur;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
#[ORM\Table(name: 'commentaire')]
#[ORM\HasLifecycleCallbacks]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idCommentaire', type: 'integer')]
    private ?int $idCommentaire = null;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: 'commentaires')]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'idPost', nullable: false, onDelete: 'CASCADE')]
    private ?Post $post = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'commentaires')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?Utilisateur $utilisateur = null;

    #[Assert\NotBlank(message: 'Le commentaire est obligatoire.')]
    #[Assert\Length(min: 1, minMessage: 'Le commentaire ne peut pas être vide.', max: 1000, maxMessage: 'Le commentaire ne doit pas dépasser {{ limit }} caractères.')]
    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateModification', type: 'datetime')]
    private ?\DateTimeInterface $dateModification = null;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'ACTIF'])]
    private ?string $statut = 'ACTIF';

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTime();
        $this->dateCreation ??= $now;
        $this->dateModification ??= $now;
        $this->statut ??= 'ACTIF';
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->dateModification = new \DateTime();
    }

    public function getIdCommentaire(): ?int { return $this->idCommentaire; }
    public function getId(): ?int { return $this->idCommentaire; }
    public function getPost(): ?Post { return $this->post; }
    public function setPost(?Post $post): self { $this->post = $post; return $this; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): self { $this->contenu = trim($contenu); return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getDateModification(): ?\DateTimeInterface { return $this->dateModification; }
    public function setDateModification(\DateTimeInterface $dateModification): self { $this->dateModification = $dateModification; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function isOwnedBy(?Utilisateur $utilisateur): bool
    {
        return $utilisateur !== null && $this->utilisateur !== null && $utilisateur->getId() === $this->utilisateur->getId();
    }

    public function canBeManagedBy(?Utilisateur $utilisateur): bool
    {
        if ($utilisateur === null) {
            return false;
        }

        if ($this->isOwnedBy($utilisateur)) {
            return true;
        }

        return $this->post?->isOwnedBy($utilisateur) ?? false;
    }

    public function getRelativeTime(): string
    {
        $date = $this->dateCreation;
        if (!$date) {
            return 'just now';
        }

        $seconds = max(0, time() - $date->getTimestamp());
        if ($seconds < 60) {
            return 'just now';
        }
        $minutes = (int) floor($seconds / 60);
        if ($minutes < 60) {
            return $minutes.' min ago';
        }
        $hours = (int) floor($minutes / 60);
        if ($hours < 24) {
            return $hours.' h ago';
        }
        $days = (int) floor($hours / 24);

        return $days.' d ago';
    }
}
