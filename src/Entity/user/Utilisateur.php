<?php

namespace App\Entity\user;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\community\Commentaire;
use App\Entity\community\Like;
use App\Entity\community\Post;
use App\Entity\management\Wallet;
use App\Entity\reclamation\Message;
use App\Entity\reclamation\Ticket;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateur')]
#[ORM\HasLifecycleCallbacks]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'nom', type: 'string', length: 100)]
    private ?string $nom = null;

    #[ORM\Column(name: 'prenom', type: 'string', length: 100)]
    private ?string $prenom = null;

    #[ORM\Column(name: 'gmail', type: 'string', length: 150, unique: true)]
    private ?string $gmail = null;

    #[ORM\Column(name: 'mdp', type: 'string', length: 255)]
    private ?string $mdp = null;

    #[ORM\Column(name: 'role', type: 'string', length: 50, options: ['default' => 'USER'])]
    private ?string $role = 'USER';

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateModification', type: 'datetime')]
    private ?\DateTimeInterface $dateModification = null;

    #[ORM\Column(name: 'statut', type: 'string', length: 20, options: ['default' => 'ACTIF'])]
    private ?string $statut = 'ACTIF';

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Post::class)]
    #[ORM\OrderBy(['dateCreation' => 'DESC'])]
    private Collection $posts;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Commentaire::class)]
    #[ORM\OrderBy(['dateCreation' => 'DESC'])]
    private Collection $commentaires;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Like::class)]
    private Collection $likes;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Wallet::class)]
    private Collection $wallets;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Message::class)]
    private Collection $messages;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Ticket::class)]
    private Collection $tickets;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->wallets = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->tickets = new ArrayCollection();
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTime();
        $this->dateCreation ??= $now;
        $this->dateModification ??= $now;
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->dateModification = new \DateTime();
    }

    public function getId(): ?int { return $this->id; }
    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }
    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): self { $this->prenom = $prenom; return $this; }
    public function getGmail(): ?string { return $this->gmail; }
    public function setGmail(string $gmail): self { $this->gmail = $gmail; return $this; }
    public function getMdp(): ?string { return $this->mdp; }
    public function setMdp(string $mdp): self { $this->mdp = $mdp; return $this; }
    public function getRole(): ?string { return $this->role; }
    public function setRole(string $role): self { $this->role = $role; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getDateModification(): ?\DateTimeInterface { return $this->dateModification; }
    public function setDateModification(\DateTimeInterface $dateModification): self { $this->dateModification = $dateModification; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }
    public function getPosts(): Collection { return $this->posts; }
    public function getCommentaires(): Collection { return $this->commentaires; }
    public function getLikes(): Collection { return $this->likes; }
    public function getWallets(): Collection { return $this->wallets; }
    public function getMessages(): Collection { return $this->messages; }
    public function getTickets(): Collection { return $this->tickets; }
    public function getUserIdentifier(): string { return $this->gmail ?? ''; }
    public function getRoles(): array { return [str_starts_with((string) $this->role, 'ROLE_') ? (string) $this->role : 'ROLE_'.strtoupper((string) ($this->role ?: 'USER'))]; }
    public function getPassword(): string { return $this->mdp ?? ''; }
    public function eraseCredentials(): void {}

    public function getDisplayName(): string
    {
        return trim(($this->nom ?? '').' '.($this->prenom ?? '')) ?: 'Utilisateur';
    }

    public function getCommunityHandle(): string
    {
        $first = preg_replace('/\s+/', '', (string) $this->nom) ?: '';
        $last = preg_replace('/\s+/', '', (string) $this->prenom) ?: '';

        return '@'.trim($first.$last, '@');
    }
}
