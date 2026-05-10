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

    /**
     * @return array<string, array<string, int>>
     */
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

        $decoded = json_decode($raw, true);

        if (!is_array($decoded)) {
            return [];
        }

        $data = [];

        foreach ($decoded as $postId => $ratings) {
            if (!is_array($ratings)) {
                continue;
            }

            $postRatings = [];

            foreach ($ratings as $viewerKey => $rating) {
                if (is_numeric($rating)) {
                    $postRatings[(string) $viewerKey] = (int) $rating;
                }
            }

            $data[(string) $postId] = $postRatings;
        }

        return $data;
    }

    /**
     * @param array<int|string, array<string, int>> $data
     */
    private function write(array $data): void
    {
        $path = $this->getFilePath();
        $dir = dirname($path);

        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }

        @file_put_contents(
            $path,
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    }

    private function getViewerKey(?string $fallback = null): string
    {
        $request = $this->requestStack->getCurrentRequest();
        $session = $request?->getSession();

        if ($fallback !== null && $fallback !== '') {
            $safeFallback = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $fallback) ?? 'guest';

            return 'user_' . $safeFallback;
        }

        if ($session !== null && !$session->has('community_rating_viewer')) {
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

    /**
     * @param array<string, int> $items
     * @return array<string, int|float>
     */
    private function summarize(
        array $items,
        ?string $viewerId = null,
        int $likes = 0,
        int $comments = 0
    ): array {
        $ratings = array_values($items);

        $manualTotal = count($ratings);
        $manualSum = array_sum($ratings);

        $engagementVotes = max(0, $likes);
        $engagementRating = $this->computeEngagementRating($likes, $comments);

        $total = $manualTotal + $engagementVotes;
        $average = $total > 0
            ? round(($manualSum + ($engagementVotes * $engagementRating)) / $total, 1)
            : 0.0;

        $viewerKey = $this->getViewerKey($viewerId);
        $userRating = $items[$viewerKey] ?? 0;

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

    /**
     * @return array<string, int|float>
     */
    public function rate(
        int $postId,
        int $value,
        ?string $viewerId = null,
        int $likes = 0,
        int $comments = 0
    ): array {
        $value = max(1, min(5, $value));

        $data = $this->read();
        $key = (string) $postId;
        $viewerKey = $this->getViewerKey($viewerId);

        if (!array_key_exists($key, $data)) {
            $data[$key] = [];
        }

        $postRatings = $data[$key];
        $postRatings[$viewerKey] = $value;
        $data[$key] = $postRatings;

        $this->write($data);

        return $this->getSummary($postId, $viewerId, $likes, $comments);
    }

    /**
     * @return array<string, int|float>
     */
    public function getSummary(
        int $postId,
        ?string $viewerId = null,
        int $likes = 0,
        int $comments = 0
    ): array {
        $data = $this->read();
        $items = $data[(string) $postId] ?? [];

        return $this->summarize($items, $viewerId, $likes, $comments);
    }

    /**
     * @return array<string, int|float>
     */
    public function getSummaryForPost(Post $post, ?string $viewerId = null): array
    {
        return $this->getSummary(
            (int) $post->getIdPost(),
            $viewerId,
            (int) $post->getNombreLikes(),
            (int) $post->getNombreCommentaires()
        );
    }

    /**
     * @param iterable<Post> $posts
     * @return array<int, array<string, int|float>>
     */
    public function getBulkSummary(iterable $posts, ?string $viewerId = null): array
    {
        $data = $this->read();
        $result = [];

        foreach ($posts as $post) {
            $postIdValue = $post->getIdPost();

            if ($postIdValue === null) {
                continue;
            }

            $postId = (string) $postIdValue;
            $items = $data[$postId] ?? [];

            $result[(int) $postIdValue] = $this->summarize(
                $items,
                $viewerId,
                (int) $post->getNombreLikes(),
                (int) $post->getNombreCommentaires()
            );
        }

        return $result;
    }
}
