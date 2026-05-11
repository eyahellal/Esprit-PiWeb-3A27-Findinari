<?php

namespace App\Entity\reclamation;

use App\Repository\TicketRepository;
use App\Entity\user\Utilisateur;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
#[ORM\Table(name: 'ticket')]
#[ORM\HasLifecycleCallbacks]
class Ticket
{
    // Status Constants
    public const STATUS_OPEN = 'OPEN';
    public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    public const STATUS_CLOSED = 'CLOSED';

    // Priority Constants
    public const PRIORITY_LOW = 'Low';
    public const PRIORITY_MEDIUM = 'Medium';
    public const PRIORITY_HIGH = 'High';

    // Type Constants (Synchronized with Java Enum)
    public const TYPE_BUG = 'BUG';
    public const TYPE_TECHNICAL = 'TECHNICAL_ISSUE';
    public const TYPE_FEATURE = 'FEATURE_REQUEST';
    public const TYPE_ACCOUNT = 'ACCOUNT';
    public const TYPE_OTHER = 'OTHER';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'tickets')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotBlank(message: 'La description est obligatoire')]
    #[Assert\Length(min: 10, minMessage: 'La description doit comporter au moins {{ limit }} caractères')]
    private ?string $description = null;

    #[ORM\Column(name: 'imageUrl', type: 'string', nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $deadline = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(min: 5, minMessage: 'Le titre doit comporter au moins {{ limit }} caractères')]
    private ?string $titre = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Le type est obligatoire')]
    private ?string $type = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statut = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'La priorité est obligatoire')]
    private ?string $priorite = null;

    #[ORM\Column(name: 'dateCreation', type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateFermeture', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateFermeture = null;

    /**
     * Correction PHPStan : Définition des types génériques (Ligne 286)
     * @var Collection<int, Message>
     */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'ticket', cascade: ['remove'])]
    private Collection $messages;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
    }

    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updateDeadline(): void
    {
        if ($this->dateCreation) {
            $deadline = \DateTime::createFromInterface($this->dateCreation);
            
            switch ($this->priorite) {
                case self::PRIORITY_HIGH:
                    $deadline->modify('+2 hours');
                    break;
                case self::PRIORITY_MEDIUM:
                    $deadline->modify('+24 hours');
                    break;
                case self::PRIORITY_LOW:
                default:
                    $deadline->modify('+48 hours');
                    break;
            }
            $this->deadline = $deadline;
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function getDeadline(): ?\DateTimeInterface
    {
        if (!$this->dateCreation) {
            return null;
        }

        $deadline = \DateTime::createFromInterface($this->dateCreation);
        
        switch ($this->priorite) {
            case self::PRIORITY_HIGH:
                $deadline->modify('+2 hours');
                break;
            case self::PRIORITY_MEDIUM:
                $deadline->modify('+24 hours');
                break;
            case self::PRIORITY_LOW:
            default:
                $deadline->modify('+48 hours');
                break;
        }

        return $deadline;
    }

    public function setDeadline(?\DateTimeInterface $deadline): self
    {
        $this->deadline = $deadline;
        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): self
    {
        $this->priorite = $priorite;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getDateFermeture(): ?\DateTimeInterface
    {
        return $this->dateFermeture;
    }

    public function setDateFermeture(?\DateTimeInterface $dateFermeture): self
    {
        $this->dateFermeture = $dateFermeture;
        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        // Correction PHPStan : Suppression de l'instanceof redondant (Ligne 300)
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
        }
        return $this;
    }

    public function removeMessage(Message $message): self
    {
        $this->messages->removeElement($message);
        return $this;
    }

    public function isBreached(): bool
    {
        $deadline = $this->getDeadline();
        if (!$deadline || in_array($this->statut, [self::STATUS_CLOSED, 'Fermé', 'CLOSED', 'Resolved', 'RESOLVED'], true)) {
            return false;
        }

        return new \DateTime() > $deadline;
    }
}


