<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\PostRepository;

#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ORM\Table(name: 'post')]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idPost = null;

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function setIdPost(int $idPost): self
    {
        $this->idPost = $idPost;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'posts')]
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $titre = null;

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: false)]
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $typePost = null;

    public function getTypePost(): ?string
    {
        return $this->typePost;
    }

    public function setTypePost(string $typePost): self
    {
        $this->typePost = $typePost;
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

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $dateModification = null;

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->dateModification;
    }

    public function setDateModification(\DateTimeInterface $dateModification): self
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $visibilite = null;

    public function getVisibilite(): ?string
    {
        return $this->visibilite;
    }

    public function setVisibilite(string $visibilite): self
    {
        $this->visibilite = $visibilite;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $nombreLikes = null;

    public function getNombreLikes(): ?int
    {
        return $this->nombreLikes;
    }

    public function setNombreLikes(?int $nombreLikes): self
    {
        $this->nombreLikes = $nombreLikes;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $nombreCommentaires = null;

    public function getNombreCommentaires(): ?int
    {
        return $this->nombreCommentaires;
    }

    public function setNombreCommentaires(?int $nombreCommentaires): self
    {
        $this->nombreCommentaires = $nombreCommentaires;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $image_url = null;

    public function getImage_url(): ?string
    {
        return $this->image_url;
    }

    public function setImage_url(?string $image_url): self
    {
        $this->image_url = $image_url;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'post')]
    private Collection $commentaires;

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        if (!$this->commentaires instanceof Collection) {
            $this->commentaires = new ArrayCollection();
        }
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->getCommentaires()->contains($commentaire)) {
            $this->getCommentaires()->add($commentaire);
        }
        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        $this->getCommentaires()->removeElement($commentaire);
        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Utilisateur::class, inversedBy: 'posts')]
    #[ORM\JoinTable(
        name: 'like',
        joinColumns: [
            new ORM\JoinColumn(name: 'post_id', referencedColumnName: 'idPost')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')
        ]
    )]
    private Collection $utilisateurs;

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateurs(): Collection
    {
        if (!$this->utilisateurs instanceof Collection) {
            $this->utilisateurs = new ArrayCollection();
        }
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->getUtilisateurs()->contains($utilisateur)) {
            $this->getUtilisateurs()->add($utilisateur);
        }
        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        $this->getUtilisateurs()->removeElement($utilisateur);
        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Hashtag::class, inversedBy: 'posts')]
    #[ORM\JoinTable(
        name: 'post_hashtag',
        joinColumns: [
            new ORM\JoinColumn(name: 'post_id', referencedColumnName: 'idPost')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'hashtag_id', referencedColumnName: 'id')
        ]
    )]
    private Collection $hashtags;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->utilisateurs = new ArrayCollection();
        $this->hashtags = new ArrayCollection();
    }

    /**
     * @return Collection<int, Hashtag>
     */
    public function getHashtags(): Collection
    {
        if (!$this->hashtags instanceof Collection) {
            $this->hashtags = new ArrayCollection();
        }
        return $this->hashtags;
    }

    public function addHashtag(Hashtag $hashtag): self
    {
        if (!$this->getHashtags()->contains($hashtag)) {
            $this->getHashtags()->add($hashtag);
        }
        return $this;
    }

    public function removeHashtag(Hashtag $hashtag): self
    {
        $this->getHashtags()->removeElement($hashtag);
        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }

}
