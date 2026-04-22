<?php

namespace App\Entity\community;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\user\Utilisateur;

#[\AllowDynamicProperties]
#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
#[ORM\Table(name: 'commentaire')]
#[ORM\HasLifecycleCallbacks]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idCommentaire', type: 'integer')]
    private ?int $idCommentaire = null;

    #[ORM\ManyToOne(targetEntity: Post::class)]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'idPost', nullable: false, onDelete: 'CASCADE')]
    private ?Post $post = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?Utilisateur $utilisateur = null;

    #[Assert\NotBlank(message: 'Le commentaire est obligatoire.')]
    #[Assert\Length(min: 1, minMessage: 'Le commentaire ne peut pas être vide.', max: 1000, maxMessage: 'Le commentaire ne doit pas dépasser {{ limit }} caractères.')]
    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(name: 'dateCreation', type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'dateModification', type: 'datetime')]
    private ?\DateTimeInterface $dateModification = null;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'ACTIF'])]
    private ?string $statut = 'ACTIF';

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTime();
        $this->dateCreation ??= $now;
        $this->dateModification ??= $now;
        $this->statut ??= 'ACTIF';
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->dateModification = new \DateTime();
    }

    public function getIdCommentaire(): ?int { return $this->idCommentaire; }
    public function getId(): ?int { return $this->idCommentaire; }
    public function getPost(): ?Post { return $this->post; }
    public function setPost(?Post $post): self { $this->post = $post; return $this; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): self { $this->utilisateur = $utilisateur; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): self { $this->contenu = trim($contenu); return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): self { $this->dateCreation = $dateCreation; return $this; }
    public function getDateModification(): ?\DateTimeInterface { return $this->dateModification; }
    public function setDateModification(\DateTimeInterface $dateModification): self { $this->dateModification = $dateModification; return $this; }
    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function isOwnedBy(?Utilisateur $utilisateur): bool
    {
        return $utilisateur !== null && $this->utilisateur !== null && $utilisateur->getId() === $this->utilisateur->getId();
    }

    public function canBeManagedBy(?Utilisateur $utilisateur): bool
    {
        if ($utilisateur === null) {
            return false;
        }

        if ($this->isOwnedBy($utilisateur)) {
            return true;
        }

        return $this->post?->isOwnedBy($utilisateur) ?? false;
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

        return $days.' d ago';
    }

    public function getHashtags(): array
    {
        $text = trim((string) $this->contenu);
        if ($text === '') {
            return [];
        }

        preg_match_all('/(^|[^\w])#([A-Za-z0-9_]+)/u', $text, $matches);
        $tags = array_map(static fn ($tag) => '#' . mb_strtolower($tag), $matches[2] ?? []);

        return array_values(array_unique($tags));
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

    public function getDisplayText(): string
    {
        $content = (string) ($this->contenu ?? '');
        $content = preg_replace('/<img[^>]*>/i', '', $content) ?? $content;
        $content = preg_replace('/\[(?:img|image|gif):[^\]]+\]/i', '', $content) ?? $content;

        foreach ($this->getMediaItems() as $item) {
            $content = str_replace($item['url'], '', $content);
        }

        return trim((string) preg_replace('/\n{3,}/', "\n\n", $content));
    }

}