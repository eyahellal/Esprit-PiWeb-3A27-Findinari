<?php

namespace App\Tests\community;

use App\Controller\CommunityController;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CommunityModerationControllerTest extends TestCase
{
    public function testModerateFlagsFallbackBlockedWordWithoutExternalApi(): void
    {
        $controller = $this->createController();
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->never())->method('request');

        $request = new Request([], [], [], [], [], [], json_encode([
            'text' => 'This post contains shit content.',
        ], JSON_THROW_ON_ERROR));

        $response = $controller->moderate($request, $httpClient);
        $payload = json_decode((string) $response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertTrue($payload['flagged']);
        $this->assertEquals(1.0, $payload['score']);
        $this->assertNotEmpty($payload['message']);
    }

    public function testModerateAllowsCleanTextWhenDetoxifyUrlIsNotConfigured(): void
    {
        $_ENV['DETOXIFY_API_URL'] = '';
        $_SERVER['DETOXIFY_API_URL'] = '';
        putenv('DETOXIFY_API_URL=');

        $controller = $this->createController();
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->never())->method('request');

        $request = new Request([], [], [], [], [], [], json_encode([
            'text' => 'Helpful community investing advice.',
        ], JSON_THROW_ON_ERROR));

        $response = $controller->moderate($request, $httpClient);
        $payload = json_decode((string) $response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertFalse($payload['flagged']);
        $this->assertEquals(0.0, $payload['score']);
        $this->assertNull($payload['message']);
    }

    private function createController(): CommunityController
    {
        $controller = new CommunityController();
        $controller->setContainer(new class implements ContainerInterface {
            public function get(string $id): mixed
            {
                throw new \RuntimeException(sprintf('Unexpected service request: %s', $id));
            }

            public function has(string $id): bool
            {
                return false;
            }
        });

        return $controller;
    }
}
