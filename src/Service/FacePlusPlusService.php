<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class FacePlusPlusService
{
    public function __construct(
        private HttpClientInterface $httpClient
    ) {
    }

    public function detectFaceToken(string $imagePath): ?string
    {
        if (!is_file($imagePath)) {
            throw new \RuntimeException('Image file not found.');
        }

        $response = $this->httpClient->request('POST', $_ENV['FACEPP_DETECT_URL'], [
            'body' => [
                'api_key' => $_ENV['FACEPP_API_KEY'],
                'api_secret' => $_ENV['FACEPP_API_SECRET'],
                'image_file' => fopen($imagePath, 'r'),
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $data = $response->toArray(false);

        if ($statusCode !== 200) {
            throw new \RuntimeException('Detect failed: ' . json_encode($data));
        }

        $faces = $data['faces'] ?? [];

        if (count($faces) === 0) {
            return null;
        }

        if (count($faces) > 1) {
            throw new \RuntimeException('Multiple faces detected. Please use one face only.');
        }

        return $faces[0]['face_token'] ?? null;
    }

    public function compare(string $faceToken1, string $faceToken2): float
    {
        $response = $this->httpClient->request('POST', $_ENV['FACEPP_COMPARE_URL'], [
            'body' => [
                'api_key' => $_ENV['FACEPP_API_KEY'],
                'api_secret' => $_ENV['FACEPP_API_SECRET'],
                'face_token1' => $faceToken1,
                'face_token2' => $faceToken2,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $data = $response->toArray(false);

        if ($statusCode !== 200) {
            throw new \RuntimeException('Compare failed: ' . json_encode($data));
        }

        return isset($data['confidence']) ? (float) $data['confidence'] : 0.0;
    }
}