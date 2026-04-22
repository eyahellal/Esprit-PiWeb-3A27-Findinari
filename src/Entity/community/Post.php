<?php

namespace App\Entity\community;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Entity\user\Utilisateur;

#[\AllowDynamicProperties]
#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ORM\Table(name: 'post')]
#[ORM\HasLifecycleCallbacks]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idPost', type: 'integer')]
    private ?int $idPost = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: 'string', length: 200)]
    private ?string $titre = null;

    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(name: 'typePost', type: 'string', length: 50, options: ['default' => 'STATUT'])]
    private ?string $typePost = 'STATUT';

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateModification', type: 'datetime')]
    private ?\DateTimeInterface $dateModification = null;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'ACTIF'])]
    private ?string $statut = 'ACTIF';

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'PUBLIC'])]
    private ?string $visibilite = 'PUBLIC';

    #[ORM\Column(name: 'nombreLikes', type: 'integer', options: ['default' => 0])]
    private int $nombreLikes = 0;

    #[ORM\Column(name: 'nombreCommentaires', type: 'integer', options: ['default' => 0])]
    private int $nombreCommentaires = 0;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: Commentaire::class, orphanRemoval: true)]
    #[ORM\OrderBy(['dateCreation' => 'DESC'])]
    private Collection $commentaires;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: Like::class, orphanRemoval: true)]
    private Collection $likes;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTime();
        $this->dateCreation ??= $now;
        $this->dateModification ??= $now;
        $this->titre ??= $this->buildAutoTitle();
        $this->typePost ??= 'STATUT';
        $this->statut ??= 'ACTIF';
        $this->visibilite ??= 'PUBLIC';
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->dateModification = new \DateTime();
        $this->titre ??= $this->buildAutoTitle();
    }

    private function buildAutoTitle(): string
    {
        $text = trim((string) $this->contenu);
        if ($text === '') {
            return 'Post';
        }

        $clean = preg_replace('/\s+/', ' ', strip_tags($text)) ?? 'Post';
        $short = mb_substr($clean, 0, 60);

        return $short === $clean ? $short : $short.'...';
    }

    private function extractMediaCandidates(): array
    {
        $content = (string) ($this->contenu ?? '');
        $candidates = [];

        if (preg_match_all('/<img[^>]+src=["\']([^"\']+)["\']/i', $content, $matches)) {
            $candidates = array_merge($candidates, $matches[1]);
        }

        if (preg_match_all('/\[(?:img|image|gif):([^\]]+)\]/i', $content, $matches)) {
            $candidates = array_merge($candidates, $matches[1]);
        }

        if (preg_match_all('/https?:\/\/[^\s<>"\'\]]+/i', $content, $matches)) {
            $candidates = array_merge($candidates, $matches[0]);
        }

        $cleaned = array_map(static function (string $candidate): string {
            return rtrim(trim($candidate), "])},.;");
        }, $candidates);

        return array_values(array_unique(array_filter($cleaned)));
    }

    private function normalizeMediaUrl(string $url): ?array
    {
        $url = trim($url);
        if ($url === '' || !preg_match('#^https?://#i', $url)) {
            return null;
        }

        $host = (string) parse_url($url, PHP_URL_HOST);
        $path = (string) parse_url($url, PHP_URL_PATH);
        $lowerUrl = mb_strtolower($url);
        $lowerHost = mb_strtolower($host);
        $lowerPath = mb_strtolower($path);

        if (str_contains($lowerHost, 'giphy.com')) {
            if (preg_match('#/media/([A-Za-z0-9]+)/#', $path, $matches)) {
                return ['type' => 'gif', 'url' => 'https://media.giphy.com/media/' . $matches[1] . '/giphy.gif'];
            }

            $lastSegment = basename($path);
            if (str_contains($lastSegment, '-')) {
                $gifId = substr($lastSegment, strrpos($lastSegment, '-') + 1);
                if ($gifId !== '') {
                    return ['type' => 'gif', 'url' => 'https://media.giphy.com/media/' . $gifId . '/giphy.gif'];
                }
            }
        }

        $isImage = (bool) preg_match('/\.(jpg|jpeg|png|gif|webp|bmp|svg)(\?.*)?$/i', $url);
        $isCloudinary = str_contains($lowerHost, 'res.cloudinary.com');
        $isLocalCommunityUpload = str_starts_with($lowerPath, '/uploads/community/');
        $isHuggingFaceCdn = str_contains($lowerHost, 'huggingface.co') || str_contains($lowerHost, 'hf.space');

        if (!$isImage && !$isCloudinary && !$isLocalCommunityUpload && !$isHuggingFaceCdn) {
            return null;
        }

        return [
            'type' => str_contains($lowerPath, '.gif') || str_contains($lowerUrl, '/gif') || str_contains($lowerHost, 'giphy.com') ? 'gif' : 'image',
            'url' => $url,
        ];
    }

    public function getMediaItems(): array
    {
        $items = [];

        foreach ($this->extractMediaCandidates() as $candidate) {
            $normalized = $this->normalizeMediaUrl($candidate);
            if ($normalized !== null) {
                $items[$normalized['url']] = $normalized;
            }
        }

        return array_values($items);
    }

    public function hasMedia(): bool
    {
        return $this->getMediaItems() !== [];
    }

    #[Assert\Callback]
    public function validateContentOrMedia(ExecutionContextInterface $context): void
    {
        $displayText = trim($this->getDisplayText());

        if ($displayText === '' && !$this->hasMedia()) {
            $context->buildViolation('Ajoutez du texte ou un media avant de publier.')
                ->atPath('contenu')
                ->addViolation();
            return;
        }

        if ($displayText !== '' && mb_strlen($displayText) < 2) {
            $context->buildViolation('Le contenu doit contenir au moins 2 caracteres.')
                ->atPath('contenu')
                ->addViolation();
        }

        if (mb_strlen((string) ($this->contenu ?? '')) > 2000) {
            $context->buildViolation('Le contenu ne doit pas depasser 2000 caracteres.')
                ->atPath('contenu')
                ->addViolation();
        }
    }

    public function getDisplayText(): string
    {
        $content = (string) ($this->contenu ?? '');
        $content = preg_replace('/<img[^>]*>/i', '', $content) ?? $content;
        $content = preg_replace('/\[(?:img|image|gif):[^\]]+\]/i', '', $content) ?? $content;

        foreach ($this->getMediaItems() as $item) {
            $content = str_replace($item['url'], '', $content);
        }

        $content = trim((string) preg_replace('/\n{3,}/', "\n\n", $content));

        return $content;
    }

    public function getIdPost(): ?int { return $this->idPost; }
    public function getId(): ?int { return $this->idPost; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(?string $titre): self { $this->titre = $titre; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): self { $this->contenu = trim($contenu); return $this; }
    public function getTypePost(): ?string { return $this->typePost; }
    public function setTypePost(?string $typePost): self { $this->typePost = $typePost; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getDateModification(): ?\DateTimeInterface { return $this->dateModification; }
    public function setDateModification(\DateTimeInterface $dateModification): self { $this->dateModification = $dateModification; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }
    public function getVisibilite(): ?string { return $this->visibilite; }
    public function setVisibilite(string $visibilite): self { $this->visibilite = $visibilite; return $this; }
    public function getNombreLikes(): int { return $this->nombreLikes; }
    public function setNombreLikes(int $nombreLikes): self { $this->nombreLikes = max(0, $nombreLikes); return $this; }
    public function getNombreCommentaires(): int { return $this->nombreCommentaires; }
    public function setNombreCommentaires(int $nombreCommentaires): self { $this->nombreCommentaires = max(0, $nombreCommentaires); return $this; }
    public function getCommentaires(): Collection { return $this->commentaires; }
    public function getLikes(): Collection { return $this->likes; }

    public function getRecentCommentaires(int $limit = 3): array
    {
        return array_slice($this->commentaires->toArray(), 0, $limit);
    }

    public function isOwnedBy(?Utilisateur $utilisateur): bool
    {
        return $utilisateur !== null && $this->utilisateur !== null && $utilisateur->getId() === $this->utilisateur->getId();
    }

    public function isLikedBy(?Utilisateur $utilisateur): bool
    {
        if ($utilisateur === null) {
            return false;
        }

        foreach ($this->likes as $like) {
            if ($like->getUtilisateur()?->getId() === $utilisateur->getId()) {
                return true;
            }
        }

        return false;
    }

    public function getRelativeTime(): string
    {
        $date = $this->dateCreation;
        if (!$date) {
            return 'just now';
        }

        $seconds = max(0, time() - $date->getTimestamp());
        if ($seconds < 60) {
            return 'just now';
        }
        $minutes = (int) floor($seconds / 60);
        if ($minutes < 60) {
            return $minutes.' min ago';
        }
        $hours = (int) floor($minutes / 60);
        if ($hours < 24) {
            return $hours.' h ago';
        }
        $days = (int) floor($hours / 24);
        if ($days < 7) {
            return $days.' d ago';
        }
        $weeks = (int) floor($days / 7);
        if ($weeks < 5) {
            return $weeks.' w ago';
        }
        $months = (int) floor($days / 30);
        if ($months < 12) {
            return $months.' mo ago';
        }
        $years = (int) floor($days / 365);

        return $years.' y ago';
    }

    public function getHashtags(): array
    {
        $text = $this->getDisplayText();
        if ($text === '') {
            return [];
        }

        preg_match_all('/(^|[^\w])#([A-Za-z0-9_]+)/u', $text, $matches);
        $tags = array_map(static fn ($tag) => '#' . mb_strtolower($tag), $matches[2] ?? []);

        return array_values(array_unique($tags));
    }

}