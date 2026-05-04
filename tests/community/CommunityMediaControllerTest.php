<?php

namespace App\Tests\community;

use App\Controller\CommunityController;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CommunityMediaControllerTest extends TestCase
{
    public function testSearchGifsReturnsEmptyItemsWhenApiKeyIsMissing(): void
    {
        $_ENV['GIPHY_API_KEY'] = '';
        $_SERVER['GIPHY_API_KEY'] = '';
        putenv('GIPHY_API_KEY=');

        $controller = $this->createController();
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->never())->method('request');

        $response = $controller->searchGifs(new Request(['q' => 'finance']), $httpClient);
        $payload = json_decode((string) $response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(['items' => []], $payload);
    }

    public function testAiImageRejectsEmptyPrompt(): void
    {
        $controller = $this->createController();
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->expects($this->never())->method('request');

        $request = new Request([], [], [], [], [], [], json_encode([
            'prompt' => '   ',
        ], JSON_THROW_ON_ERROR));

        $response = $controller->aiImage($request, $httpClient);
        $payload = json_decode((string) $response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame(422, $response->getStatusCode());
        $this->assertSame('Prompt vide.', $payload['error']);
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
