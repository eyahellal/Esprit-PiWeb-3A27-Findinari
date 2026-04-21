<?php

namespace App\Controller;

use App\community\RatingBundle\Service\RatingStorage;
use App\Entity\community\Commentaire;
use App\Entity\community\Like;
use App\Entity\community\Post;
use App\Entity\user\Utilisateur;
use App\Form\CommentaireType;
use App\Form\PostType;
use App\Repository\LikeRepository;
use App\Repository\PostRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/community', name: 'community_')]
class CommunityController extends AbstractController
{
    private function getCurrentUtilisateur(UtilisateurRepository $utilisateurRepository): Utilisateur
    {
        $securityUser = $this->getUser();

        if ($securityUser instanceof Utilisateur) {
            return $securityUser;
        }

        if ($securityUser && method_exists($securityUser, 'getUserIdentifier')) {
            $identifier = $securityUser->getUserIdentifier();
            $user = $utilisateurRepository->findOneBy(['gmail' => $identifier]);
            if ($user instanceof Utilisateur) {
                return $user;
            }
        }

        throw $this->createAccessDeniedException('Utilisateur non connecté.');
    }


    private function ensureCanCreatePost(Utilisateur $user): void
    {
        if (!$user->canCreateCommunityPost()) {
            throw $this->createAccessDeniedException('Seuls les influenceurs peuvent publier des posts.');
        }
    }

    private function ensureCanComment(Utilisateur $user): void
    {
        if (!$user->canCommentInCommunity()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas commenter.');
        }
    }

    private function ensureCanLike(Utilisateur $user): void
    {
        if (!$user->canLikeInCommunity()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas aimer cette publication.');
        }
    }

    private function canEditPost(Post $post, Utilisateur $user): bool
    {
        return $post->getUtilisateur()?->getId() === $user->getId() && $user->canCreateCommunityPost();
    }

    private function canDeletePost(Post $post, Utilisateur $user): bool
    {
        if ($user->isCommunityAdmin()) {
            return true;
        }

        return $post->getUtilisateur()?->getId() === $user->getId() && $user->canCreateCommunityPost();
    }

    private function canEditComment(Commentaire $commentaire, Utilisateur $user): bool
    {
        return $commentaire->getUtilisateur()?->getId() === $user->getId();
    }

    private function canDeleteComment(Commentaire $commentaire, Utilisateur $user): bool
    {
        return $commentaire->getUtilisateur()?->getId() === $user->getId();
    }

    private function buildPostForm(Post $post): mixed
    {
        return $this->createForm(PostType::class, $post, [
            'action' => $this->generateUrl('community_post_create'),
            'method' => 'POST',
        ]);
    }

    private function buildCommentForm(Commentaire $commentaire, Post $post): mixed
    {
        return $this->createForm(CommentaireType::class, $commentaire, [
            'action' => $this->generateUrl('community_comment_create', ['id' => $post->getIdPost()]),
            'method' => 'POST',
        ]);
    }

    private function env(string $name, ?string $default = null): ?string
    {
        $value = $_ENV[$name] ?? $_SERVER[$name] ?? getenv($name);
        if ($value === false || $value === null || $value === '') {
            return $default;
        }

        return (string) $value;
    }

    private function normalizeDetoxifyUrl(): ?string
    {
        $url = trim((string) $this->env('DETOXIFY_API_URL', ''));
        if ($url === '') {
            return null;
        }

        $url = rtrim((string) preg_replace('#/docs/?$#', '', $url), '/');
        if (preg_match('#/(moderate|predict)$#', $url)) {
            return $url;
        }

        return $url . '/moderate';
    }

    private function normalizeRecommendationUrl(): ?string
    {
        $url = trim((string) $this->env('COMMUNITY_RECOMMENDER_URL', 'http://127.0.0.1:8002/recommend'));
        if ($url === '') {
            return null;
        }

        $url = str_replace('127.0.0.0', '127.0.0.1', $url);
        $url = rtrim((string) preg_replace('#/docs/?$#', '', $url), '/');
        if (preg_match('#/(recommend|predict|recommendations?)$#', $url)) {
            return $url;
        }

        return $url . '/recommend';
    }

    private function getHuggingFaceApiUrl(): string
    {
        $model = trim((string) $this->env('HUGGINGFACE_IMAGE_MODEL', 'black-forest-labs/FLUX.1-schnell'));
        if ($model === '') {
            $model = 'black-forest-labs/FLUX.1-schnell';
        }

        return 'https://router.huggingface.co/hf-inference/models/' . implode('/', array_map('rawurlencode', explode('/', $model)));
    }

    private function extractToxicityScore(array $data): float
    {
        $candidates = [
            $data['toxicity'] ?? null,
            $data['score'] ?? null,
            $data['scores']['toxicity'] ?? null,
            $data['prediction']['toxicity'] ?? null,
            $data['result']['toxicity'] ?? null,
            $data['results']['toxicity'] ?? null,
        ];

        foreach ($candidates as $candidate) {
            if (is_numeric($candidate)) {
                return (float) $candidate;
            }
        }

        $numbers = [];
        array_walk_recursive($data, static function ($value) use (&$numbers): void {
            if (is_numeric($value)) {
                $numbers[] = (float) $value;
            }
        });

        return $numbers !== [] ? max($numbers) : 0.0;
    }

    private function buildRecommendationPayload(array $allPosts, Utilisateur $currentUser, RatingStorage $ratingStorage): array
    {
        $posts = [];

        foreach ($allPosts as $post) {
            if (!$post instanceof Post || !$post->getIdPost()) {
                continue;
            }

            $summary = $ratingStorage->getSummaryForPost($post, (string) $currentUser->getId());
            $posts[] = [
                'id' => (int) $post->getIdPost(),
                'post_id' => (int) $post->getIdPost(),
                'text' => $post->getDisplayText(),
                'hashtags' => $post->getHashtags(),
                'likes' => (int) $post->getNombreLikes(),
                'comments' => (int) $post->getNombreCommentaires(),
                'has_media' => $post->hasMedia(),
                'author_id' => $post->getUtilisateur()?->getId(),
                'user_rating' => (int) ($summary['userRating'] ?? 0),
                'rating_average' => (float) ($summary['average'] ?? 0.0),
                'is_liked' => $post->isLikedBy($currentUser),
                'is_owned' => $post->isOwnedBy($currentUser),
                'user_commented' => count(array_filter(
                    $post->getCommentaires()->toArray(),
                    static fn (Commentaire $commentaire): bool => $commentaire->getUtilisateur()?->getId() === $currentUser->getId()
                )) > 0,
            ];
        }

        return [
            'user_id' => $currentUser->getId(),
            'userId' => (int) $currentUser->getId(),
            'limit' => 4,
            'top_k' => 4,
            'posts' => $posts,
            'items' => $posts,
        ];
    }

    private function extractRecommendationIds(array $data): array
    {
        if (array_is_list($data)) {
            $ids = $this->extractRecommendationIdsFromList($data);
            if ($ids !== []) {
                return $ids;
            }
        }

        $candidates = [
            $data['recommendations'] ?? null,
            $data['recommended_posts'] ?? null,
            $data['recommended_ids'] ?? null,
            $data['post_ids'] ?? null,
            $data['ids'] ?? null,
            $data['predictions'] ?? null,
            $data['prediction'] ?? null,
            $data['results'] ?? null,
            $data['outputs'] ?? null,
            $data['data'] ?? null,
        ];

        foreach ($candidates as $candidate) {
            if (!is_array($candidate)) {
                continue;
            }

            $ids = $this->extractRecommendationIdsFromList($candidate);
            if ($ids !== []) {
                return $ids;
            }
        }

        return [];
    }

    private function extractRecommendationIdsFromList(array $items): array
    {
        $rows = [];

        foreach ($items as $index => $item) {
            if (is_numeric($item)) {
                $rows[] = [
                    'id' => (int) $item,
                    'score' => (float) (-1 * $index),
                ];
                continue;
            }

            if (!is_array($item)) {
                continue;
            }

            if (isset($item['ids']) && is_array($item['ids'])) {
                foreach ($item['ids'] as $nestedIndex => $nestedId) {
                    if (is_numeric($nestedId)) {
                        $rows[] = [
                            'id' => (int) $nestedId,
                            'score' => (float) (-1 * ($index + $nestedIndex)),
                        ];
                    }
                }
                continue;
            }

            $id = null;
            foreach (['post_id', 'id', 'postId', 'recommended_id'] as $key) {
                if (isset($item[$key]) && is_numeric($item[$key])) {
                    $id = (int) $item[$key];
                    break;
                }
            }

            if ($id === null) {
                continue;
            }

            $score = null;
            foreach (['score', 'confidence', 'probability', 'similarity'] as $key) {
                if (isset($item[$key]) && is_numeric($item[$key])) {
                    $score = (float) $item[$key];
                    break;
                }
            }

            if ($score === null && isset($item['rank']) && is_numeric($item['rank'])) {
                $score = 1000000.0 - (float) $item['rank'];
            }

            $rows[] = [
                'id' => $id,
                'score' => $score ?? (float) (-1 * $index),
            ];
        }

        usort($rows, static fn (array $a, array $b): int => $b['score'] <=> $a['score']);

        $ids = [];
        foreach ($rows as $row) {
            $id = (int) ($row['id'] ?? 0);
            if ($id > 0) {
                $ids[$id] = $id;
            }
        }

        return array_values($ids);
    }

    private function checkToxicity(?string $text, HttpClientInterface $httpClient): array
    {
        $content = trim((string) $text);
        if ($content === '') {
            return ['flagged' => false, 'score' => 0.0, 'message' => null];
        }

        $fallbackWords = ['fuck', 'shit', 'bitch', 'asshole', 'bastard', 'nigga', 'nigger', 'pute', 'merde', 'salope', 'connard', 'zebi'];
        foreach ($fallbackWords as $word) {
            if (preg_match('/(^|[^[:alnum:]])' . preg_quote($word, '/') . '([^[:alnum:]]|$)/iu', mb_strtolower($content))) {
                return ['flagged' => true, 'score' => 1.0, 'message' => 'Ce contenu contient un mot bloqué. Merci de reformuler.'];
            }
        }

        $url = $this->normalizeDetoxifyUrl();
        if ($url === null) {
            return ['flagged' => false, 'score' => 0.0, 'message' => null];
        }

        try {
            $response = $httpClient->request('POST', $url, [
                'headers' => ['Accept' => 'application/json'],
                'timeout' => 10,
                'json' => [
                    'text' => $content,
                    'content' => $content,
                    'message' => $content,
                ],
            ]);

            $raw = $response->getContent(false);
            $data = json_decode($raw, true);
            $data = is_array($data) ? $data : [];

            $score = $this->extractToxicityScore($data);
            $flagged = (bool) ($data['flagged'] ?? $data['toxic'] ?? $data['is_toxic'] ?? $data['blocked'] ?? false);
            foreach (['label', 'result', 'prediction', 'status'] as $key) {
                if (!$flagged && isset($data[$key]) && is_string($data[$key])) {
                    $flagged = preg_match('/toxic|blocked|reject/i', $data[$key]) === 1;
                }
            }
            $threshold = (float) $this->env('DETOXIFY_THRESHOLD', '0.50');
            if (!$flagged) {
                $flagged = $score >= $threshold;
            }

            return [
                'flagged' => $flagged,
                'score' => $score,
                'message' => $flagged ? sprintf('Ce contenu semble inapproprié (score %.2f). Merci de reformuler.', $score) : null,
            ];
        } catch (TransportExceptionInterface|\Throwable) {
            return ['flagged' => false, 'score' => 0.0, 'message' => null];
        }
    }

    private function generateAiImageBinary(string $prompt, HttpClientInterface $httpClient): array
    {
        $apiKey = $this->env('HUGGINGFACE_API_KEY');
        if (!$apiKey) {
            throw new \RuntimeException("Hugging Face n'est pas configuré. Ajoutez HUGGINGFACE_API_KEY dans .env.local.");
        }

        $subjectPrompt = trim(preg_replace('/\s+/', ' ', $prompt) ?? $prompt);
        $styleHints = [
            'photorealistic',
            'realistic photography',
            'sharp focus',
            'natural lighting',
            'detailed texture',
            'high quality',
        ];
        shuffle($styleHints);
        $styledPrompt = trim(preg_replace(
            '/\s+/',
            ' ',
            'Primary subject and scene: ' . $subjectPrompt . '. '
            . 'Generate an image that closely follows this exact description. '
            . 'Do not replace the main subject, setting, or action with something unrelated. '
            . 'Style hints: ' . implode(', ', array_slice($styleHints, 0, 4)) . '.'
        ) ?? $subjectPrompt);
        $negativePrompt = trim((string) $this->env('HUGGINGFACE_NEGATIVE_PROMPT', 'blurry, low quality, distorted, deformed, extra fingers, extra limbs, watermark, text, logo'));
        $steps = max(1, min(12, (int) $this->env('HUGGINGFACE_NUM_INFERENCE_STEPS', '4')));
        $guidanceScale = (float) $this->env('HUGGINGFACE_GUIDANCE_SCALE', '3.5');
        $seed = random_int(1, 2147483647);

        $response = $httpClient->request('POST', $this->getHuggingFaceApiUrl(), [
            'timeout' => 90,
            'max_duration' => 120,
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Accept' => 'image/png',
                'Content-Type' => 'application/json',
                'Cache-Control' => 'no-store, no-cache, max-age=0',
                'Pragma' => 'no-cache',
            ],
            'json' => [
                'inputs' => $styledPrompt,
                'parameters' => [
                    'negative_prompt' => $negativePrompt,
                    'num_inference_steps' => $steps,
                    'guidance_scale' => $guidanceScale,
                    'seed' => $seed,
                ],
                'options' => [
                    'wait_for_model' => true,
                    'use_cache' => false,
                ],
            ],
        ]);

        $status = $response->getStatusCode();
        $headers = $response->getHeaders(false);
        $contentType = strtolower((string) ($headers['content-type'][0] ?? ''));
        $body = $response->getContent(false);

        if ($status >= 200 && $status < 300 && str_starts_with($contentType, 'image/')) {
            return [
                'bytes' => $body,
                'content_type' => $contentType,
            ];
        }

        $data = json_decode($body, true);
        $message = is_array($data) ? (string) ($data['error'] ?? $data['message'] ?? '') : '';
        if ($message === '') {
            $message = "Generation d'image indisponible pour le moment.";
        }

        throw new \RuntimeException($message);
    }

    private function persistImageBytesLocally(string $imageBytes, string $contentType, Request $request, string $prefix = 'community_ai'): array
    {
        $targetDir = $this->getParameter('kernel.project_dir') . '/public/uploads/community';
        if (!is_dir($targetDir) && !@mkdir($targetDir, 0777, true) && !is_dir($targetDir)) {
            throw new \RuntimeException('Impossible de creer le dossier local de televersement.');
        }

        $contentType = strtolower($contentType);
        $extension = match (true) {
            str_contains($contentType, 'png') => 'png',
            str_contains($contentType, 'webp') => 'webp',
            str_contains($contentType, 'jpeg'), str_contains($contentType, 'jpg') => 'jpg',
            str_contains($contentType, 'gif') => 'gif',
            default => 'png',
        };

        $filename = sprintf('%s_%s.%s', $prefix, bin2hex(random_bytes(12)), $extension);
        file_put_contents($targetDir . '/' . $filename, $imageBytes);

        return [
            'secure_url' => $request->getSchemeAndHttpHost() . '/uploads/community/' . $filename,
            'format' => $extension,
            'resource_type' => 'image',
            'storage' => 'local',
        ];
    }

    private function uploadGeneratedImageToCloudinary(string $imageBytes, string $contentType, HttpClientInterface $httpClient): array
    {
        $extension = match (true) {
            str_contains(strtolower($contentType), 'webp') => 'webp',
            str_contains(strtolower($contentType), 'jpeg'), str_contains(strtolower($contentType), 'jpg') => 'jpg',
            str_contains(strtolower($contentType), 'gif') => 'gif',
            default => 'png',
        };

        $tmpPath = tempnam(sys_get_temp_dir(), 'community_ai_');
        if ($tmpPath === false) {
            throw new \RuntimeException('Impossible de preparer le fichier temporaire.');
        }

        $finalPath = $tmpPath . '.' . $extension;
        rename($tmpPath, $finalPath);
        file_put_contents($finalPath, $imageBytes);

        try {
            $uploadedFile = new UploadedFile($finalPath, 'community_ai.' . $extension, $contentType, null, true);
            return $this->uploadToCloudinary($uploadedFile, $httpClient);
        } finally {
            @unlink($finalPath);
        }
    }

    private function storeUploadedFileLocally(UploadedFile $file, Request $request): array
    {
        $targetDir = $this->getParameter('kernel.project_dir') . '/public/uploads/community';
        if (!is_dir($targetDir) && !@mkdir($targetDir, 0777, true) && !is_dir($targetDir)) {
            throw new \RuntimeException('Impossible de creer le dossier local de televersement.');
        }

        $extension = $file->guessExtension() ?: $file->getClientOriginalExtension() ?: 'bin';
        $extension = preg_replace('/[^a-zA-Z0-9]/', '', (string) $extension) ?: 'bin';
        $filename = sprintf('community_%s.%s', bin2hex(random_bytes(12)), strtolower($extension));
        $file->move($targetDir, $filename);

        return [
            'secure_url' => $request->getSchemeAndHttpHost() . '/uploads/community/' . $filename,
            'format' => strtolower($extension),
            'resource_type' => 'image',
            'storage' => 'local',
        ];
    }

    private function uploadToCloudinary(UploadedFile $file, HttpClientInterface $httpClient): array
    {
        $handle = fopen($file->getPathname(), 'r');
        if ($handle === false) {
            throw new \RuntimeException('Impossible de lire le fichier a televerser.');
        }

        try {
            return $this->uploadPayloadToCloudinary([
                'file' => $handle,
            ], $httpClient);
        } finally {
            fclose($handle);
        }
    }

    private function uploadRemoteImageToCloudinary(string $remoteUrl, HttpClientInterface $httpClient): array
    {
        return $this->uploadPayloadToCloudinary([
            'file' => $remoteUrl,
        ], $httpClient);
    }

    private function uploadPayloadToCloudinary(array $payload, HttpClientInterface $httpClient): array
    {
        $cloudName = $this->env('CLOUDINARY_CLOUD_NAME');
        $apiKey = $this->env('CLOUDINARY_API_KEY');
        $apiSecret = $this->env('CLOUDINARY_API_SECRET');

        if (!$cloudName || !$apiKey || !$apiSecret) {
            throw new \RuntimeException('Cloudinary n\'est pas configuré.');
        }

        $timestamp = time();
        $signature = sha1('timestamp=' . $timestamp . $apiSecret);

        $response = $httpClient->request('POST', sprintf('https://api.cloudinary.com/v1_1/%s/image/upload', $cloudName), [
            'timeout' => 25,
            'max_duration' => 30,
            'body' => array_merge($payload, [
                'api_key' => $apiKey,
                'timestamp' => (string) $timestamp,
                'signature' => $signature,
            ]),
        ]);

        $data = $response->toArray(false);
        if (!is_array($data) || empty($data['secure_url'])) {
            throw new \RuntimeException('Réponse Cloudinary invalide.');
        }

        return $data;
    }

    private function extractTagsFromText(string $text): array
    {
        preg_match_all('/(^|[^\w])#([A-Za-z0-9_]+)/u', $text, $matches);
        return array_values(array_unique(array_map(static fn ($tag) => '#' . mb_strtolower($tag), $matches[2] ?? [])));
    }

    private function wordBag(string $text): array
    {
        $text = mb_strtolower(strip_tags($text));
        $text = preg_replace('/https?:\/\/\S+/i', ' ', $text) ?? $text;
        $text = preg_replace('/[^\p{L}\p{N}\s#]+/u', ' ', $text) ?? $text;
        $parts = preg_split('/\s+/u', trim($text)) ?: [];
        $words = [];
        foreach ($parts as $part) {
            if (mb_strlen($part) >= 3) {
                $words[] = $part;
            }
        }
        return array_values(array_unique($words));
    }

    private function decorateHashtags(string $text): string
    {
        $escaped = nl2br($this->escapeHtml($text));
        return preg_replace_callback('/(^|[^\w>])#([A-Za-z0-9_]+)/u', function (array $matches): string {
            $prefix = $matches[1];
            $tag = '#' . $matches[2];
            $url = $this->generateUrl('community_index', ['q' => $tag, 'filter' => 'all']);
            return $prefix . '<a href="' . $url . '" class="community-hashtag">' . $tag . '</a>';
        }, $escaped) ?? $escaped;
    }

    private function escapeHtml(string $text): string
    {
        return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    private function enhancePosts(iterable $posts, RatingStorage $ratingStorage, Utilisateur $currentUser): array
    {
        $summaryMap = $ratingStorage->getBulkSummary($posts, (string) $currentUser->getId());
        $result = [];
        foreach ($posts as $post) {
            $displayText = $post->getDisplayText();
            $post->communityDisplayHtml = $this->decorateHashtags($displayText);
            $post->communityHashtags = $post->getHashtags();
            $post->communityRating = $summaryMap[$post->getIdPost()] ?? ['average' => 0.0, 'total' => 0, 'userRating' => 0, 'percent' => 0.0];
            foreach ($post->getCommentaires() as $commentaire) {
                $commentaire->communityDisplayHtml = $this->decorateHashtags($commentaire->getDisplayText());
            }
            $result[] = $post;
        }
        return $result;
    }

    private function buildFallbackRecommendations(array $allPosts, Utilisateur $currentUser, RatingStorage $ratingStorage): array
    {
        $profileWords = [];
        $profileTags = [];

        foreach ($allPosts as $post) {
            $ownInteraction = false;
            if ($post->isOwnedBy($currentUser) || $post->isLikedBy($currentUser)) {
                $ownInteraction = true;
            }
            $summary = $ratingStorage->getSummaryForPost($post, (string) $currentUser->getId());
            if (($summary['userRating'] ?? 0) >= 4) {
                $ownInteraction = true;
            }
            foreach ($post->getCommentaires() as $commentaire) {
                if ($commentaire->getUtilisateur()?->getId() === $currentUser->getId()) {
                    $ownInteraction = true;
                    break;
                }
            }
            if ($ownInteraction) {
                $profileWords = array_merge($profileWords, $this->wordBag($post->getDisplayText()));
                $profileTags = array_merge($profileTags, $post->getHashtags());
            }
        }

        $profileWords = array_values(array_unique($profileWords));
        $profileTags = array_values(array_unique($profileTags));

        $scored = [];
        foreach ($allPosts as $post) {
            if ($post->isOwnedBy($currentUser)) {
                continue;
            }
            $postWords = $this->wordBag($post->getDisplayText());
            $postTags = $post->getHashtags();
            $score = 0;
            if ($profileWords !== [] && $postWords !== []) {
                $score += count(array_intersect($profileWords, $postWords)) * 2;
            }
            if ($profileTags !== [] && $postTags !== []) {
                $score += count(array_intersect($profileTags, $postTags)) * 4;
            }
            if ($post->hasMedia()) {
                $score += 1;
            }
            if ($post->getNombreLikes() > 0) {
                $score += 1;
            }
            if ($score > 0) {
                $scored[] = ['post' => $post, 'score' => $score];
            }
        }

        usort($scored, static fn (array $a, array $b) => $b['score'] <=> $a['score']);
        return array_map(static fn (array $row) => $row['post'], array_slice($scored, 0, 4));
    }

    private function buildRecommendations(array $allPosts, Utilisateur $currentUser, RatingStorage $ratingStorage, HttpClientInterface $httpClient): array
    {
        $url = $this->normalizeRecommendationUrl();
        if ($url !== null) {
            try {
                $payload = $this->buildRecommendationPayload($allPosts, $currentUser, $ratingStorage);
                $response = $httpClient->request('POST', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    'timeout' => 10,
                    'json' => $payload,
                ]);

                $raw = $response->getContent(false);
                $data = json_decode($raw, true);
                $data = is_array($data) ? $data : [];
                $ids = $this->extractRecommendationIds(is_array($data) ? $data : []);
                if ($ids !== []) {
                    $byId = [];
                    foreach ($allPosts as $post) {
                        if ($post instanceof Post && $post->getIdPost()) {
                            $byId[(int) $post->getIdPost()] = $post;
                        }
                    }

                    $recommendations = [];
                    foreach ($ids as $id) {
                        if (!isset($byId[$id])) {
                            continue;
                        }

                        $post = $byId[$id];
                        if ($post->isOwnedBy($currentUser)) {
                            continue;
                        }

                        $recommendations[] = $post;
                        if (count($recommendations) >= 4) {
                            break;
                        }
                    }

                    if ($recommendations !== []) {
                        return $recommendations;
                    }
                }
            } catch (\Throwable) {
            }
        }

        return $this->buildFallbackRecommendations($allPosts, $currentUser, $ratingStorage);
    }

    private function appendMediaToPost(Post $post, Request $request): void
    {
        $content = trim((string) $post->getContenu());
        $mediaBits = [];
        foreach ([
            'uploaded_image_url' => 'img',
            'selected_gif_url' => 'gif',
            'ai_image_url' => 'img',
        ] as $field => $type) {
            $value = trim((string) $request->request->get($field, ''));
            if ($value !== '') {
                $mediaBits[] = sprintf('[%s:%s]', $type, $value);
            }
        }

        if ($mediaBits !== []) {
            $content = trim($content . "\n\n" . implode("\n", array_unique($mediaBits)));
            $post->setContenu($content);
        }
    }

    private function appendMediaToComment(Commentaire $commentaire, Request $request): void
    {
        $content = trim((string) $commentaire->getContenu());
        $mediaBits = [];
        $gifUrl = trim((string) $request->request->get('comment_selected_gif_url', ''));
        if ($gifUrl !== '') {
            $mediaBits[] = sprintf('[gif:%s]', $gifUrl);
        }

        if ($mediaBits !== []) {
            $content = trim($content . "\n\n" . implode("\n", array_unique($mediaBits)));
            $commentaire->setContenu($content);
        }
    }

    private function renderIndexPage(
        Request $request,
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository,
        PaginatorInterface $paginator,
        HttpClientInterface $httpClient,
        RatingStorage $ratingStorage,
        ?Post $post = null,
        mixed $form = null
    ): Response {
        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        $post ??= new Post();
        $form ??= $this->buildPostForm($post);
        $query = trim((string) $request->query->get('q', ''));
        $filter = trim((string) $request->query->get('filter', 'all')) ?: 'all';

        $pagination = $paginator->paginate(
            $postRepository->createCommunityFeedQuery($query, $filter),
            max(1, (int) $request->query->get('page', 1)),
            10
        );

        $pagination->setCustomParameters(['align' => 'center']);
        $posts = $this->enhancePosts((array) $pagination->getItems(), $ratingStorage, $currentUser);
        $pagination->setItems($posts);

        $allPosts = $postRepository->findBy([], ['dateCreation' => 'DESC', 'idPost' => 'DESC']);
        $recommendations = $this->enhancePosts($this->buildRecommendations($allPosts, $currentUser, $ratingStorage, $httpClient), $ratingStorage, $currentUser);

        return $this->render('Community/index.html.twig', [
            'posts' => $pagination,
            'currentUser' => $currentUser,
            'postForm' => $form->createView(),
            'communityQuery' => $query,
            'communityFilter' => $filter,
            'feedCount' => $pagination->getTotalItemCount(),
            'recommendations' => $recommendations,
        ]);
    }

    private function renderShowPage(
        Post $post,
        UtilisateurRepository $utilisateurRepository,
        RatingStorage $ratingStorage,
        ?Commentaire $commentaire = null,
        mixed $commentForm = null
    ): Response {
        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        $commentaire ??= new Commentaire();
        $commentForm ??= $this->buildCommentForm($commentaire, $post);
        $post = $this->enhancePosts([$post], $ratingStorage, $currentUser)[0];

        return $this->render('Community/show.html.twig', [
            'post' => $post,
            'commentForm' => $commentForm->createView(),
            'currentUser' => $currentUser,
        ]);
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, PaginatorInterface $paginator, HttpClientInterface $httpClient, RatingStorage $ratingStorage): Response
    {
        return $this->renderIndexPage($request, $postRepository, $utilisateurRepository, $paginator, $httpClient, $ratingStorage);
    }

    #[Route('/moderate', name: 'moderate', methods: ['POST'])]
    public function moderate(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $payload = json_decode((string) $request->getContent(), true);
        $text = is_array($payload) ? (string) ($payload['text'] ?? '') : '';
        $result = $this->checkToxicity($text, $httpClient);

        return $this->json([
            'flagged' => (bool) ($result['flagged'] ?? false),
            'score' => (float) ($result['score'] ?? 0.0),
            'message' => $result['message'] ?? null,
        ]);
    }

    #[Route('/gifs/search', name: 'gif_search', methods: ['GET'])]
    public function searchGifs(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $query = trim((string) $request->query->get('q', ''));
        $apiKey = $this->env('GIPHY_API_KEY');
        if (!$apiKey) {
            return $this->json(['items' => []]);
        }

        try {
            $endpoint = $query === '' ? 'https://api.giphy.com/v1/gifs/trending' : 'https://api.giphy.com/v1/gifs/search';
            $params = [
                'api_key' => $apiKey,
                'limit' => 12,
                'rating' => 'g',
            ];
            if ($query !== '') {
                $params['q'] = $query;
                $params['lang'] = 'en';
            }

            $response = $httpClient->request('GET', $endpoint, [
                'query' => $params,
            ]);

            $data = $response->toArray(false);
            $items = [];
            foreach (($data['data'] ?? []) as $gif) {
                $preview = $gif['images']['fixed_width']['url'] ?? $gif['images']['downsized_medium']['url'] ?? $gif['images']['preview_gif']['url'] ?? null;
                $url = $gif['images']['downsized_large']['url'] ?? $gif['images']['original']['url'] ?? $preview;
                if ($url) {
                    $items[] = [
                        'url' => $url,
                        'preview' => $preview ?? $url,
                        'title' => $gif['title'] ?? 'GIF',
                    ];
                }
            }
            return $this->json(['items' => $items]);
        } catch (\Throwable) {
            return $this->json(['items' => []]);
        }
    }

    #[Route('/media/upload', name: 'media_upload', methods: ['POST'])]
    public function uploadMedia(Request $request, UtilisateurRepository $utilisateurRepository, HttpClientInterface $httpClient): JsonResponse
    {
        $this->getCurrentUtilisateur($utilisateurRepository);
        $file = $request->files->get('file');
        if (!$file instanceof UploadedFile) {
            return $this->json(['error' => 'Aucun fichier reçu.'], 422);
        }

        try {
            $upload = $this->uploadToCloudinary($file, $httpClient);
            return $this->json([
                'url' => $upload['secure_url'],
                'format' => $upload['format'] ?? null,
                'resource_type' => $upload['resource_type'] ?? 'image',
                'storage' => 'cloudinary',
            ]);
        } catch (\Throwable $e) {
            try {
                $upload = $this->storeUploadedFileLocally($file, $request);

                return $this->json([
                    'url' => $upload['secure_url'],
                    'format' => $upload['format'] ?? null,
                    'resource_type' => $upload['resource_type'] ?? 'image',
                    'storage' => $upload['storage'] ?? 'local',
                    'warning' => 'Cloudinary indisponible, image enregistree localement.',
                ]);
            } catch (\Throwable $localError) {
                return $this->json(['error' => $localError->getMessage()], 500);
            }
        }
    }

    #[Route('/ai-image', name: 'ai_image', methods: ['POST'])]
    public function aiImage(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $payload = json_decode((string) $request->getContent(), true);
        $prompt = trim((string) ($payload['prompt'] ?? ''));
        if ($prompt === '') {
            return $this->json(['error' => 'Prompt vide.'], 422);
        }

        try {
            $generated = $this->generateAiImageBinary($prompt, $httpClient);
        } catch (\Throwable $e) {
            return $this->json(['error' => $e->getMessage() ?: "Generation d'image indisponible."], 502);
        }

        try {
            $upload = $this->uploadGeneratedImageToCloudinary($generated['bytes'], $generated['content_type'], $httpClient);

            return $this->json([
                'url' => $upload['secure_url'],
                'format' => $upload['format'] ?? null,
                'resource_type' => $upload['resource_type'] ?? 'image',
                'storage' => 'cloudinary',
            ]);
        } catch (\Throwable) {
            try {
                $upload = $this->persistImageBytesLocally($generated['bytes'], $generated['content_type'], $request, 'community_ai');

                return $this->json([
                    'url' => $upload['secure_url'],
                    'format' => $upload['format'] ?? null,
                    'resource_type' => $upload['resource_type'] ?? 'image',
                    'storage' => $upload['storage'] ?? 'local',
                    'warning' => 'Generation terminee, image enregistree localement.',
                ]);
            } catch (\Throwable $e) {
                return $this->json(['error' => $e->getMessage() ?: "Generation d'image indisponible."], 502);
            }
        }
    }

    #[Route('/post/create', name: 'post_create', methods: ['GET', 'POST'])]
    public function createPost(Request $request, EntityManagerInterface $em, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, HttpClientInterface $httpClient, PaginatorInterface $paginator, RatingStorage $ratingStorage): Response
    {
        if ($request->isMethod('GET')) {
            return $this->redirectToRoute('community_index');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        $this->ensureCanCreatePost($currentUser);

        $post = new Post();
        $form = $this->buildPostForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->appendMediaToPost($post, $request);
            $toxicity = $this->checkToxicity($post->getDisplayText(), $httpClient);
            if (($toxicity['flagged'] ?? false) === true) {
                $form->get('contenu')->addError(new FormError($toxicity['message'] ?? 'Ce contenu a été bloqué par la modération.'));
            }
        }

        $hasPostedMedia = trim((string) $request->request->get('uploaded_image_url', '')) !== ''
            || trim((string) $request->request->get('selected_gif_url', '')) !== ''
            || trim((string) $request->request->get('ai_image_url', '')) !== '';
        $allowMediaOnlyPost = $form->isSubmitted() && $hasPostedMedia && trim($post->getDisplayText()) === '';

        if ($form->isSubmitted() && ($form->isValid() || $allowMediaOnlyPost)) {
            $post->setUtilisateur($currentUser);
            $post->setTypePost('STATUT');
            $post->setVisibilite('PUBLIC');
            $post->setStatut('ACTIF');
            $post->setTitre($post->getTitre() ?: 'Publication');
            $post->setDateCreation($post->getDateCreation() ?? new \DateTime());
            $post->setDateModification(new \DateTime());
            $em->persist($post);
            $em->flush();
            $this->addFlash('success', 'Votre post a été publié.');
            return $this->redirectToRoute('community_index');
        }

        if ($form->isSubmitted()) {
            $this->addFlash('error', 'Le post n\'a pas été publié. Vérifiez le contenu saisi.');
        }

        return $this->renderIndexPage($request, $postRepository, $utilisateurRepository, $paginator, $httpClient, $ratingStorage, $post, $form);
    }

    #[Route('/post/{id}', name: 'show', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function show(int $id, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, RatingStorage $ratingStorage): Response
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }
        return $this->renderShowPage($post, $utilisateurRepository, $ratingStorage);
    }

    #[Route('/post/{id}/rate', name: 'rate', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function rate(int $id, Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, RatingStorage $ratingStorage): JsonResponse
    {
        $post = $postRepository->find($id);
        if (!$post) {
            return $this->json(['error' => 'Post introuvable'], 404);
        }

        $user = $this->getCurrentUtilisateur($utilisateurRepository);
        $this->ensureCanLike($user);
        $value = (int) ($request->request->get('rating') ?? $request->query->get('rating', 0));
        $summary = $ratingStorage->rate($post->getIdPost(), $value, (string) $user->getId(), (int) $post->getNombreLikes(), (int) $post->getNombreCommentaires());

        return $this->json($summary);
    }

    #[Route('/post/{id}/edit', name: 'edit', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em, HttpClientInterface $httpClient): Response
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        if (!$this->canEditPost($post, $currentUser)) {
            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres posts si vous êtes influenceur.');
        }

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $toxicity = $this->checkToxicity($post->getContenu(), $httpClient);
            if (($toxicity['flagged'] ?? false) === true) {
                $form->get('contenu')->addError(new FormError($toxicity['message'] ?? 'Ce contenu a été bloqué par la modération.'));
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setDateModification(new \DateTime());
            $em->flush();
            $this->addFlash('success', 'Post modifié avec succès.');
            return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
        }

        return $this->render('Community/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'currentUser' => $currentUser,
        ]);
    }

    #[Route('/post/{id}/delete', name: 'delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(int $id, Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em): RedirectResponse
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        if (!$this->canDeletePost($post, $currentUser)) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas supprimer ce post.');
        }

        if (!$this->isCsrfTokenValid('delete_post_' . $post->getIdPost(), (string) $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $em->remove($post);
        $em->flush();
        $this->addFlash('success', 'Post supprimé.');
        return $this->redirectToRoute('community_index');
    }

    #[Route('/post/{id}/comment', name: 'comment_create', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function createComment(int $id, Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em, HttpClientInterface $httpClient, RatingStorage $ratingStorage): Response
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        $this->ensureCanComment($currentUser);

        $commentaire = new Commentaire();
        $form = $this->buildCommentForm($commentaire, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->appendMediaToComment($commentaire, $request);
            $toxicity = $this->checkToxicity($commentaire->getDisplayText(), $httpClient);
            if (($toxicity['flagged'] ?? false) === true) {
                $form->get('contenu')->addError(new FormError($toxicity['message'] ?? 'Ce commentaire a été bloqué par la modération.'));
            }
        }

        $hasCommentGif = trim((string) $request->request->get('comment_selected_gif_url', '')) !== '';
        $allowGifOnlyComment = $form->isSubmitted() && $hasCommentGif && trim($commentaire->getDisplayText()) === '';

        if ($form->isSubmitted() && ($form->isValid() || $allowGifOnlyComment)) {
            $commentaire->setPost($post);
            $commentaire->setUtilisateur($currentUser);
            $commentaire->setStatut('ACTIF');
            $commentaire->setDateCreation($commentaire->getDateCreation() ?? new \DateTime());
            $commentaire->setDateModification(new \DateTime());
            $post->setNombreCommentaires(($post->getNombreCommentaires() ?? 0) + 1);
            $em->persist($commentaire);
            $em->flush();
            $this->addFlash('success', 'Commentaire ajouté.');
            return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
        }

        if ($form->isSubmitted()) {
            $this->addFlash('error', 'Impossible d\'ajouter le commentaire.');
        }

        return $this->renderShowPage($post, $utilisateurRepository, $ratingStorage, $commentaire, $form);
    }

    #[Route('/post/{id}/like', name: 'like', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function like(int $id, Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, LikeRepository $likeRepository, EntityManagerInterface $em): RedirectResponse
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $user = $this->getCurrentUtilisateur($utilisateurRepository);
        $this->ensureCanLike($user);
        $existingLike = $likeRepository->findOneBy(['post' => $post, 'utilisateur' => $user]);
        if ($existingLike) {
            $em->remove($existingLike);
            $post->setNombreLikes(max(0, $post->getNombreLikes() - 1));
        } else {
            $like = new Like();
            $like->setPost($post);
            $like->setUtilisateur($user);
            $like->setDateLike(new \DateTime());
            $em->persist($like);
            $post->setNombreLikes($post->getNombreLikes() + 1);
        }

        $em->flush();
        $referer = (string) $request->headers->get('referer', '');
        return $referer !== '' ? new RedirectResponse($referer) : $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
    }

    #[Route('/test', name: 'test', methods: ['GET'])]
    public function test(): Response
    {
        return new Response('Community routes OK');
    }

    #[Route('/comment/{id}/edit', name: 'comment_edit', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function editComment(int $id, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository, HttpClientInterface $httpClient): Response
    {
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        if (!$this->canEditComment($commentaire, $currentUser)) {
            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres commentaires.');
        }

        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $toxicity = $this->checkToxicity($commentaire->getContenu(), $httpClient);
            if (($toxicity['flagged'] ?? false) === true) {
                $form->get('contenu')->addError(new FormError($toxicity['message'] ?? 'Ce commentaire a été bloqué par la modération.'));
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDateModification(new \DateTime());
            $em->flush();
            $this->addFlash('success', 'Commentaire modifié.');
            return $this->redirectToRoute('community_show', ['id' => $commentaire->getPost()?->getIdPost()]);
        }

        return $this->render('Community/edit_comment.html.twig', [
            'form' => $form->createView(),
            'commentaire' => $commentaire,
            'currentUser' => $currentUser,
        ]);
    }

    #[Route('/comment/{id}/delete', name: 'comment_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function deleteComment(int $id, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): RedirectResponse
    {
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
        if (!$this->canDeleteComment($commentaire, $currentUser)) {
            throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres commentaires.');
        }

        if (!$this->isCsrfTokenValid('delete_comment_' . $commentaire->getIdCommentaire(), (string) $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $post = $commentaire->getPost();
        if ($post) {
            $post->setNombreCommentaires(max(0, $post->getNombreCommentaires() - 1));
        }
        $em->remove($commentaire);
        $em->flush();
        $this->addFlash('success', 'Commentaire supprimé.');
        return $this->redirectToRoute('community_show', ['id' => $post?->getIdPost()]);
    }
}
