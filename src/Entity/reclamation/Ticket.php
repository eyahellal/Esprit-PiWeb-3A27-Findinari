<?php

namespace App\Entity\reclamation;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\user\Utilisateur;


use App\Repository\TicketRepository;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
#[ORM\Table(name: 'ticket')]
#[ORM\HasLifecycleCallbacks]
class Ticket
{
    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updateDeadline(): void
    {
        if ($this->dateCreation) {
            $deadline = \DateTime::createFromInterface($this->dateCreation);
            
            switch ($this->priorite) {
                case 'High':
                    $deadline->modify('+2 hours');
                    break;
                case 'Medium':
                    $deadline->modify('+24 hours');
                    break;
                case 'Low':
                default:
                    $deadline->modify('+48 hours');
                    break;
            }
            $this->deadline = $deadline;
        }
    }
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

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'tickets')]
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
    #[Assert\NotBlank(message: 'La description est obligatoire')]
    #[Assert\Length(min: 10, minMessage: 'La description doit comporter au moins {{ limit }} caractères')]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(name: 'imageUrl', type: 'string', nullable: true)]
    private ?string $imageUrl = null;

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $deadline = null;

    public function getDeadline(): ?\DateTimeInterface
    {
        if (!$this->dateCreation) {
            return null;
        }

        // We calculate it dynamically based on priority and created date
        $deadline = \DateTime::createFromInterface($this->dateCreation);
        
        switch ($this->priorite) {
            case 'High':
                $deadline->modify('+2 hours');
                break;
            case 'Medium':
                $deadline->modify('+24 hours');
                break;
            case 'Low':
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

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(min: 5, minMessage: 'Le titre doit comporter au moins {{ limit }} caractères')]
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

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: 'Le type est obligatoire')]
    private ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
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
    #[Assert\NotBlank(message: 'La priorité est obligatoire')]
    private ?string $priorite = null;

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): self
    {
        $this->priorite = $priorite;
        return $this;
    }

    #[ORM\Column(name: 'dateCreation', type: 'datetime', nullable: false)]
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

    #[ORM\Column(name: 'dateFermeture', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateFermeture = null;

    public function getDateFermeture(): ?\DateTimeInterface
    {
        return $this->dateFermeture;
    }

    public function setDateFermeture(?\DateTimeInterface $dateFermeture): self
    {
        $this->dateFermeture = $dateFermeture;
        return $this;
    }

#[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'ticket', cascade: ['remove'])]  
  private Collection $messages;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
    }

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

    public function isBreached(): bool
    {
        if (!$this->getDeadline() || in_array($this->statut, ['Fermé', 'Closed', 'CLOSED', 'Resolved', 'RESOLVED'])) {
            return false;
        }

        return new \DateTime() > $this->getDeadline();
    }
}
