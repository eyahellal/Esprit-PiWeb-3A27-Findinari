<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\UtilisateurRepository;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateur')]
class Utilisateur
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
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $prenom = null;

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $gmail = null;

    public function getGmail(): ?string
    {
        return $this->gmail;
    }

    public function setGmail(string $gmail): self
    {
        $this->gmail = $gmail;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $mdp = null;

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $role = null;

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
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

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $face_token = null;

    public function getFace_token(): ?string
    {
        return $this->face_token;
    }

    public function setFace_token(?string $face_token): self
    {
        $this->face_token = $face_token;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $face_enabled = null;

    public function isFace_enabled(): ?bool
    {
        return $this->face_enabled;
    }

    public function setFace_enabled(bool $face_enabled): self
    {
        $this->face_enabled = $face_enabled;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $face_enrolled_at = null;

    public function getFace_enrolled_at(): ?\DateTimeInterface
    {
        return $this->face_enrolled_at;
    }

    public function setFace_enrolled_at(?\DateTimeInterface $face_enrolled_at): self
    {
        $this->face_enrolled_at = $face_enrolled_at;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'utilisateur')]
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

    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'utilisateur')]
    private Collection $messages;

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        if (!$this->messages instanceof Collection) {
            $this->messages = new ArrayCollection();
        }
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->getMessages()->contains($message)) {
            $this->getMessages()->add($message);
        }
        return $this;
    }

    public function removeMessage(Message $message): self
    {
        $this->getMessages()->removeElement($message);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Post::class, mappedBy: 'utilisateur')]
    private Collection $posts;

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        if (!$this->posts instanceof Collection) {
            $this->posts = new ArrayCollection();
        }
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->getPosts()->contains($post)) {
            $this->getPosts()->add($post);
        }
        return $this;
    }

    public function removePost(Post $post): self
    {
        $this->getPosts()->removeElement($post);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Ticket::class, mappedBy: 'utilisateur')]
    private Collection $tickets;

    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        if (!$this->tickets instanceof Collection) {
            $this->tickets = new ArrayCollection();
        }
        return $this->tickets;
    }

    public function addTicket(Ticket $ticket): self
    {
        if (!$this->getTickets()->contains($ticket)) {
            $this->getTickets()->add($ticket);
        }
        return $this;
    }

    public function removeTicket(Ticket $ticket): self
    {
        $this->getTickets()->removeElement($ticket);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Wallet::class, mappedBy: 'utilisateur')]
    private Collection $wallets;

    /**
     * @return Collection<int, Wallet>
     */
    public function getWallets(): Collection
    {
        if (!$this->wallets instanceof Collection) {
            $this->wallets = new ArrayCollection();
        }
        return $this->wallets;
    }

    public function addWallet(Wallet $wallet): self
    {
        if (!$this->getWallets()->contains($wallet)) {
            $this->getWallets()->add($wallet);
        }
        return $this;
    }

    public function removeWallet(Wallet $wallet): self
    {
        $this->getWallets()->removeElement($wallet);
        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Post::class, inversedBy: 'utilisateurs')]
    #[ORM\JoinTable(
        name: 'like',
        joinColumns: [
            new ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')
        ],                  
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'post_id', referencedColumnName: 'id')
        ]
    )]
    private Collection $likedPosts;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->tickets = new ArrayCollection();
        $this->wallets = new ArrayCollection();
        $this->likedPosts = new ArrayCollection();
    }

    /**
     * @return Collection<int, Post>
     */
    public function getLikedPosts(): Collection
    {
        if (!$this->likedPosts instanceof Collection) {
            $this->likedPosts = new ArrayCollection();
        }
        return $this->likedPosts;
    }

    public function addLikedPost(Post $likedPost): self
    {
        if (!$this->getLikedPosts()->contains($likedPost)) {
            $this->getLikedPosts()->add($likedPost);
        }
        return $this;
    }

    public function removeLikedPost(Post $likedPost): self
    {
        $this->getLikedPosts()->removeElement($likedPost);
        return $this;
    }

    public function getFaceToken(): ?string
    {
        return $this->face_token;
    }

    public function setFaceToken(?string $face_token): static
    {
        $this->face_token = $face_token;

        return $this;
    }

    public function isFaceEnabled(): ?bool
    {
        return $this->face_enabled;
    }

    public function setFaceEnabled(bool $face_enabled): static
    {
        $this->face_enabled = $face_enabled;

        return $this;
    }

    public function getFaceEnrolledAt(): ?\DateTime
    {
        return $this->face_enrolled_at;
    }

    public function setFaceEnrolledAt(?\DateTime $face_enrolled_at): static
    {
        $this->face_enrolled_at = $face_enrolled_at;

        return $this;
    }
}
