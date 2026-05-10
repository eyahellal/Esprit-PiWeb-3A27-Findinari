<?php

namespace App\Entity\management;

use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\MoneyTransferRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: MoneyTransferRepository::class)]
#[ORM\Table(name: 'money_transfer')]
class MoneyTransfer
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

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false, name: 'sender_wallet_id')]
    private ?Wallet $senderWallet = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true, name: 'receiver_wallet_id')]
    private ?Wallet $receiverWallet = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2)]
    private ?string $amount = null;

    #[ORM\Column(length: 10)]
    private ?string $devise = null;

    #[ORM\Column(length: 20, options: ['default' => 'pending'])]
    private ?string $status = 'pending';

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $completedAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->status    = 'pending';
    }

    public function getId(): ?int { return $this->id; }

    public function getSender(): ?Utilisateur { return $this->sender; }
    public function setSender(?Utilisateur $sender): self { $this->sender = $sender; return $this; }

    public function getReceiver(): ?Utilisateur { return $this->receiver; }
    public function setReceiver(?Utilisateur $receiver): self { $this->receiver = $receiver; return $this; }

    public function getSenderWallet(): ?Wallet { return $this->senderWallet; }
    public function setSenderWallet(?Wallet $senderWallet): self { $this->senderWallet = $senderWallet; return $this; }

    public function getReceiverWallet(): ?Wallet { return $this->receiverWallet; }
    public function setReceiverWallet(?Wallet $receiverWallet): self { $this->receiverWallet = $receiverWallet; return $this; }

    public function getAmount(): ?string { return $this->amount; }
    public function getAmountFloat(): float { return (float) $this->amount; }
    public function setAmount(string|float $amount): self { $this->amount = (string) $amount; return $this; }

    public function getDevise(): ?string { return $this->devise; }
    public function setDevise(?string $devise): self { $this->devise = $devise; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): self { $this->status = $status; return $this; }

    public function getMessage(): ?string { return $this->message; }
    public function setMessage(?string $message): self { $this->message = $message; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): self { $this->createdAt = $createdAt; return $this; }

    public function getCompletedAt(): ?\DateTimeImmutable { return $this->completedAt; }
    public function setCompletedAt(?\DateTimeImmutable $completedAt): self { $this->completedAt = $completedAt; return $this; }
}