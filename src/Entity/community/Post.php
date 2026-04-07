<?php

namespace App\Entity\community;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\user\Utilisateur;

#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ORM\Table(name: 'post')]
#[ORM\HasLifecycleCallbacks]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idPost', type: 'integer')]
    private ?int $idPost = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'posts')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: 'string', length: 200)]
    private ?string $titre = null;

    #[Assert\NotBlank(message: 'Le contenu du post est obligatoire.')]
    #[Assert\Length(min: 2, minMessage: 'Le contenu doit contenir au moins {{ limit }} caractères.', max: 2000, maxMessage: 'Le contenu ne doit pas dépasser {{ limit }} caractères.')]
    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(name: 'typePost', type: 'string', length: 50, options: ['default' => 'STATUT'])]
    private ?string $typePost = 'STATUT';

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateModification', type: 'datetime')]
    private ?\DateTimeInterface $dateModification = null;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'ACTIF'])]
    private ?string $statut = 'ACTIF';

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'PUBLIC'])]
    private ?string $visibilite = 'PUBLIC';

    #[ORM\Column(name: 'nombreLikes', type: 'integer', options: ['default' => 0])]
    private int $nombreLikes = 0;

    #[ORM\Column(name: 'nombreCommentaires', type: 'integer', options: ['default' => 0])]
    private int $nombreCommentaires = 0;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: Commentaire::class, orphanRemoval: true)]
    #[ORM\OrderBy(['dateCreation' => 'DESC'])]
    private Collection $commentaires;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: Like::class, orphanRemoval: true)]
    private Collection $likes;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTime();
        $this->dateCreation ??= $now;
        $this->dateModification ??= $now;
        $this->titre ??= $this->buildAutoTitle();
        $this->typePost ??= 'STATUT';
        $this->statut ??= 'ACTIF';
        $this->visibilite ??= 'PUBLIC';
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->dateModification = new \DateTime();
        $this->titre ??= $this->buildAutoTitle();
    }

    private function buildAutoTitle(): string
    {
        $text = trim((string) $this->contenu);
        if ($text === '') {
            return 'Post';
        }

        $clean = preg_replace('/\s+/', ' ', strip_tags($text)) ?? 'Post';
        $short = mb_substr($clean, 0, 60);

        return $short === $clean ? $short : $short.'...';
    }

    public function getIdPost(): ?int { return $this->idPost; }
    public function getId(): ?int { return $this->idPost; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(?string $titre): self { $this->titre = $titre; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): self { $this->contenu = trim($contenu); return $this; }
    public function getTypePost(): ?string { return $this->typePost; }
    public function setTypePost(?string $typePost): self { $this->typePost = $typePost; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getDateModification(): ?\DateTimeInterface { return $this->dateModification; }
    public function setDateModification(\DateTimeInterface $dateModification): self { $this->dateModification = $dateModification; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }
    public function getVisibilite(): ?string { return $this->visibilite; }
    public function setVisibilite(string $visibilite): self { $this->visibilite = $visibilite; return $this; }
    public function getNombreLikes(): int { return $this->nombreLikes; }
    public function setNombreLikes(int $nombreLikes): self { $this->nombreLikes = max(0, $nombreLikes); return $this; }
    public function getNombreCommentaires(): int { return $this->nombreCommentaires; }
    public function setNombreCommentaires(int $nombreCommentaires): self { $this->nombreCommentaires = max(0, $nombreCommentaires); return $this; }
    public function getCommentaires(): Collection { return $this->commentaires; }
    public function getLikes(): Collection { return $this->likes; }

    public function getRecentCommentaires(int $limit = 3): array
    {
        return array_slice($this->commentaires->toArray(), 0, $limit);
    }

    public function isOwnedBy(?Utilisateur $utilisateur): bool
    {
        return $utilisateur !== null && $this->utilisateur !== null && $utilisateur->getId() === $this->utilisateur->getId();
    }

    public function isLikedBy(?Utilisateur $utilisateur): bool
    {
        if ($utilisateur === null) {
            return false;
        }

        foreach ($this->likes as $like) {
            if ($like->getUtilisateur()?->getId() === $utilisateur->getId()) {
                return true;
            }
        }

        return false;
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
        if ($days < 7) {
            return $days.' d ago';
        }
        $weeks = (int) floor($days / 7);
        if ($weeks < 5) {
            return $weeks.' w ago';
        }
        $months = (int) floor($days / 30);
        if ($months < 12) {
            return $months.' mo ago';
        }
        $years = (int) floor($days / 365);

        return $years.' y ago';
    }
}
