<?php

namespace App\tests\Services;

use App\Service\FacePlusPlusService;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class FacePlusPlusServiceTest extends TestCase
{
    public function testDetectFaceTokenReturnsToken(): void
    {
        $_ENV['FACEPP_DETECT_URL'] = 'https://fake-detect-url.test';
        $_ENV['FACEPP_API_KEY'] = 'fake_key';
        $_ENV['FACEPP_API_SECRET'] = 'fake_secret';

        $imagePath = tempnam(sys_get_temp_dir(), 'face_');
        file_put_contents($imagePath, 'fake image content');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('toArray')->willReturn([
            'faces' => [
                ['face_token' => 'abc123'],
            ],
        ]);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')->willReturn($response);

        $service = new FacePlusPlusService($httpClient);

        $this->assertSame('abc123', $service->detectFaceToken($imagePath));

        unlink($imagePath);
    }

    public function testCompareReturnsConfidence(): void
    {
        $_ENV['FACEPP_COMPARE_URL'] = 'https://fake-compare-url.test';
        $_ENV['FACEPP_API_KEY'] = 'fake_key';
        $_ENV['FACEPP_API_SECRET'] = 'fake_secret';

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('toArray')->willReturn([
            'confidence' => 92.5,
        ]);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')->willReturn($response);

        $service = new FacePlusPlusService($httpClient);

        $this->assertSame(92.5, $service->compare('token1', 'token2'));
    }
}