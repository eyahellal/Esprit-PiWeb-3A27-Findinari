<?php

namespace App\Entity\community;

use App\Repository\LikeRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\user\Utilisateur;

#[ORM\Entity(repositoryClass: LikeRepository::class)]
#[ORM\Table(name: '`like`')]
#[ORM\UniqueConstraint(name: 'unique_like', columns: ['utilisateur_id', 'post_id'])]
#[ORM\HasLifecycleCallbacks]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'likes')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: 'likes')]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'idPost', nullable: false, onDelete: 'CASCADE')]
    private ?Post $post = null;

    #[ORM\Column(name: 'dateLike', type: 'datetime')]
    private ?\DateTimeInterface $dateLike = null;

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->dateLike ??= new \DateTime();
    }

    public function getId(): ?int { return $this->id; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getPost(): ?Post { return $this->post; }
    public function setPost(?Post $post): self { $this->post = $post; return $this; }
    public function getDateLike(): ?\DateTimeInterface { return $this->dateLike; }
    public function setDateLike(\DateTimeInterface $dateLike): self { $this->dateLike = $dateLike; return $this; }
}
