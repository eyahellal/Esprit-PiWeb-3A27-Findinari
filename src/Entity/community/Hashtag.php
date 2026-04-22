<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\HashtagRepository;

#[ORM\Entity(repositoryClass: HashtagRepository::class)]
#[ORM\Table(name: 'hashtag')]
class Hashtag
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
    private ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

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

}