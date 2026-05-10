<?php
// src/Entity/Loan/FriendLoanRequest.php
namespace App\Entity\Loan;

use App\Entity\user\Utilisateur;
use App\Repository\FriendLoanRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FriendLoanRequestRepository::class)]
#[ORM\Table(name: 'friend_loan_request')]
class FriendLoanRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false, name: 'sender_id')]
    private ?Utilisateur $sender = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false, name: 'receiver_id')]
    private ?Utilisateur $receiver = null;

    // ✅ CORRECTION : DECIMAL doit être string, pas float
    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2)]
    private ?string $amount = null;

    // ✅ CORRECTION : DECIMAL doit être string, pas float
    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $interestRate = null;

    #[ORM\Column]
    private ?int $durationMonths = null;

    #[ORM\Column(length: 20, options: ['default' => 'pending'])]
    private ?string $status = 'pending';

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $expiresAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $respondedAt = null;

    #[ORM\Column(nullable: true)]
    private ?int $senderInvestmentId = null;

    #[ORM\Column(nullable: true)]
    private ?int $receiverInvestmentId = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->expiresAt = (new \DateTimeImmutable())->modify('+48 hours');
        $this->status = 'pending';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?Utilisateur
    {
        return $this->sender;
    }

    public function setSender(?Utilisateur $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function getReceiver(): ?Utilisateur
    {
        return $this->receiver;
    }

    public function setReceiver(?Utilisateur $receiver): self
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Retourne le montant (string pour compatibilité DECIMAL)
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Retourne le montant en float pour les calculs
     */
    public function getAmountFloat(): ?float
    {
        return $this->amount !== null ? (float)$this->amount : null;
    }

    /**
     * Set le montant (accepte string ou float)
     */
    public function setAmount(string|float $amount): self
    {
        $this->amount = is_float($amount) ? (string)$amount : $amount;
        return $this;
    }

    /**
     * Retourne le taux d'intérêt (string pour compatibilité DECIMAL)
     */
    public function getInterestRate(): ?string
    {
        return $this->interestRate;
    }

    /**
     * Retourne le taux d'intérêt en float pour les calculs
     */
    public function getInterestRateFloat(): ?float
    {
        return $this->interestRate !== null ? (float)$this->interestRate : null;
    }

    /**
     * Set le taux d'intérêt (accepte string ou float)
     */
    public function setInterestRate(string|float $interestRate): self
    {
        $this->interestRate = is_float($interestRate) ? (string)$interestRate : $interestRate;
        return $this;
    }

    public function getDurationMonths(): ?int
    {
        return $this->durationMonths;
    }

    public function setDurationMonths(int $durationMonths): self
    {
        $this->durationMonths = $durationMonths;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getExpiresAt(): ?\DateTimeImmutable
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(\DateTimeImmutable $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    public function getRespondedAt(): ?\DateTimeImmutable
    {
        return $this->respondedAt;
    }

    public function setRespondedAt(?\DateTimeImmutable $respondedAt): self
    {
        $this->respondedAt = $respondedAt;
        return $this;
    }

    public function getSenderInvestmentId(): ?int
    {
        return $this->senderInvestmentId;
    }

    public function setSenderInvestmentId(?int $senderInvestmentId): self
    {
        $this->senderInvestmentId = $senderInvestmentId;
        return $this;
    }

    public function getReceiverInvestmentId(): ?int
    {
        return $this->receiverInvestmentId;
    }

    public function setReceiverInvestmentId(?int $receiverInvestmentId): self
    {
        $this->receiverInvestmentId = $receiverInvestmentId;
        return $this;
    }
}