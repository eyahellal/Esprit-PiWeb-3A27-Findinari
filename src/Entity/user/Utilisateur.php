<?php

namespace App\Entity\user;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateur')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?string $id = null;

    #[ORM\Column(name: 'nom', type: 'string', length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s'-]+$/",
        message: "Le nom ne doit contenir que des lettres."
    )]
    private ?string $nom = null;

    #[ORM\Column(name: 'prenom', type: 'string', length: 100)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le prénom ne doit pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s'-]+$/",
        message: "Le prénom ne doit contenir que des lettres."
    )]
    private ?string $prenom = null;

    #[ORM\Column(name: 'gmail', type: 'string', length: 150, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "Veuillez saisir une adresse email valide.")]
    #[Assert\Length(
        max: 150,
        maxMessage: "L'email ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $gmail = null;

   #[ORM\Column(name: 'mdp', type: 'string', length: 255)]
private ?string $mdp = null;

    #[ORM\Column(name: 'role', type: 'string', length: 50, options: ['default' => 'USER'])]
    #[Assert\NotBlank(message: "Le rôle est obligatoire.")]
    #[Assert\Choice(
        choices: ['USER', 'ADMIN', 'INFLUENCER'],
        message: "Le rôle doit être USER, ADMIN ou INFLUENCER."
    )]
    private ?string $role = 'USER';

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateModification', type: 'datetime')]
    private ?\DateTimeInterface $dateModification = null;

    #[ORM\Column(name: 'statut', type: 'string', length: 20, options: ['default' => 'ACTIF'])]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(
        choices: ['ACTIF', 'BLOQUE', 'INACTIF'],
        message: "Le statut doit être ACTIF, BLOQUE ou INACTIF."
    )]
    private ?string $statut = 'ACTIF';

    #[ORM\Column(name: 'face_token', type: 'string', length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le face token ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $faceToken = null;

    #[ORM\Column(name: 'face_enabled', type: 'boolean', options: ['default' => false])]
    private bool $faceEnabled = false;

    #[ORM\Column(name: 'face_enrolled_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $faceEnrolledAt = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getGmail(): ?string
    {
        return $this->gmail;
    }

    public function setGmail(string $gmail): static
    {
        $this->gmail = $gmail;
        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = strtoupper($role);
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->dateModification;
    }

    public function setDateModification(\DateTimeInterface $dateModification): static
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = strtoupper($statut);
        return $this;
    }

    public function getFaceToken(): ?string
    {
        return $this->faceToken;
    }

    public function setFaceToken(?string $faceToken): static
    {
        $this->faceToken = $faceToken;
        return $this;
    }

    public function getFaceEnabled(): bool
    {
        return $this->faceEnabled;
    }

    public function isFaceEnabled(): bool
    {
        return $this->faceEnabled;
    }

    public function setFaceEnabled(bool $faceEnabled): static
    {
        $this->faceEnabled = $faceEnabled;
        return $this;
    }

    public function getFaceEnrolledAt(): ?\DateTimeInterface
    {
        return $this->faceEnrolledAt;
    }

    public function setFaceEnrolledAt(?\DateTimeInterface $faceEnrolledAt): static
    {
        $this->faceEnrolledAt = $faceEnrolledAt;
        return $this;
    }

    public function getRoles(): array
    {
        $role = strtoupper($this->role ?? 'USER');

        $roles = match ($role) {
            'ADMIN' => ['ROLE_ADMIN'],
            'INFLUENCER' => ['ROLE_INFLUENCER'],
            default => ['ROLE_USER'],
        };

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function getUserIdentifier(): string
    {
        return $this->gmail ?? '';
    }

    public function getPassword(): string
    {
        return $this->mdp ?? '';
    }

    public function eraseCredentials(): void
    {
    }
}