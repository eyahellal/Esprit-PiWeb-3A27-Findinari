<?php

namespace App\Entity;

use App\Entity\community\Post;
use App\Repository\HashtagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HashtagRepository::class)]
#[ORM\Table(name: 'hashtag')]
class Hashtag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
   // ✅ After — Doctrine assigns the int, so keep ?int but add @phpstan-ignore
/** @phpstan-ignore property.unusedType */
private ?int $id = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private string $name = '';

    #[ORM\ManyToMany(targetEntity: Post::class, inversedBy: 'hashtags')]
    #[ORM\JoinTable(
        name: 'post_hashtag',
        joinColumns: [
            new ORM\JoinColumn(name: 'hashtag_id', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'post_id', referencedColumnName: 'idPost')
        ]
    )]
    private Collection $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id ?? null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = trim($name);
        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        $this->posts->removeElement($post);

        return $this;
    }
}
