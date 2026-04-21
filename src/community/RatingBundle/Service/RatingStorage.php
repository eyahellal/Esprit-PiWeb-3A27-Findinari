<?php

namespace App\community\RatingBundle\Service;

use App\Entity\community\Post;
use Symfony\Component\HttpFoundation\RequestStack;

class RatingStorage
{
    public function __construct(
        private readonly string $projectDir,
        private readonly RequestStack $requestStack,
    ) {
    }

    private function getFilePath(): string
    {
        return $this->projectDir . '/var/community_ratings.json';
    }

    private function read(): array
    {
        $path = $this->getFilePath();
        if (!is_file($path)) {
            return [];
        }

        $raw = @file_get_contents($path);
        if (!is_string($raw) || trim($raw) === '') {
            return [];
        }

        $data = json_decode($raw, true);

        return is_array($data) ? $data : [];
    }

    private function write(array $data): void
    {
        $path = $this->getFilePath();
        $dir = dirname($path);
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }

        @file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }

    private function getViewerKey(?string $fallback = null): string
    {
        $request = $this->requestStack->getCurrentRequest();
        $session = $request?->getSession();

        if ($fallback) {
            return 'user_' . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $fallback);
        }

        if ($session && !$session->has('community_rating_viewer')) {
            $session->set('community_rating_viewer', 'anon_' . bin2hex(random_bytes(8)));
        }

        return (string) ($session?->get('community_rating_viewer', 'anon_guest') ?? 'anon_guest');
    }

    private function computeEngagementRating(int $likes, int $comments): float
    {
        if ($likes <= 0 && $comments <= 0) {
            return 0.0;
        }

        $score = 1.0 + min(4.0, ($likes * 0.65) + ($comments * 0.20));

        return round(min(5.0, $score), 1);
    }

    private function summarize(array $items, ?string $viewerId = null, int $likes = 0, int $comments = 0): array
    {
        $ratings = array_values(array_filter($items, static fn ($rating) => is_numeric($rating)));
        $manualTotal = count($ratings);
        $manualSum = array_sum($ratings);

        $engagementVotes = max(0, $likes);
        $engagementRating = $this->computeEngagementRating($likes, $comments);

        $total = $manualTotal + $engagementVotes;
        $average = $total > 0 ? round(($manualSum + ($engagementVotes * $engagementRating)) / $total, 1) : 0.0;

        $viewerKey = $this->getViewerKey($viewerId);
        $userRating = isset($items[$viewerKey]) && is_numeric($items[$viewerKey]) ? (int) $items[$viewerKey] : 0;

        return [
            'average' => $average,
            'total' => $total,
            'userRating' => $userRating,
            'percent' => $average > 0 ? round(($average / 5) * 100, 2) : 0.0,
            'likes' => $likes,
            'comments' => $comments,
            'engagementRating' => $engagementRating,
        ];
    }

    public function rate(int $postId, int $value, ?string $viewerId = null, int $likes = 0, int $comments = 0): array
    {
        $value = max(1, min(5, $value));
        $data = $this->read();
        $key = (string) $postId;
        $viewerKey = $this->getViewerKey($viewerId);

        if (!isset($data[$key]) || !is_array($data[$key])) {
            $data[$key] = [];
        }

        $data[$key][$viewerKey] = $value;
        $this->write($data);

        return $this->getSummary($postId, $viewerId, $likes, $comments);
    }

    public function getSummary(int $postId, ?string $viewerId = null, int $likes = 0, int $comments = 0): array
    {
        $data = $this->read();
        $items = $data[(string) $postId] ?? [];
        if (!is_array($items)) {
            $items = [];
        }

        return $this->summarize($items, $viewerId, $likes, $comments);
    }

    public function getSummaryForPost(Post $post, ?string $viewerId = null): array
    {
        return $this->getSummary((int) $post->getIdPost(), $viewerId, (int) $post->getNombreLikes(), (int) $post->getNombreCommentaires());
    }

    public function getBulkSummary(iterable $posts, ?string $viewerId = null): array
    {
        $data = $this->read();
        $result = [];

        foreach ($posts as $post) {
            if (!$post instanceof Post || !$post->getIdPost()) {
                continue;
            }

            $postId = (string) $post->getIdPost();
            $items = $data[$postId] ?? [];
            $result[(int) $post->getIdPost()] = $this->summarize(
                is_array($items) ? $items : [],
                $viewerId,
                (int) $post->getNombreLikes(),
                (int) $post->getNombreCommentaires(),
            );
        }

        return $result;
    }
}
