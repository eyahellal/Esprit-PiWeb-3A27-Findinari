<?php

namespace App\Tests\Service;

use App\Service\GroqService;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class GroqServiceTest extends TestCase
{
    private HttpClientInterface $httpClient;
    private GroqService $groqService;

    protected function setUp(): void
    {
        $this->httpClient = $this->createMock(HttpClientInterface::class);
        $this->groqService = new GroqService($this->httpClient, 'fake_api_key');
    }

    // ===================================
    // HELPER — Weather Data
    // ===================================

    private function getWeatherData(
        float $temp,
        string $description,
        bool $isRain = false
    ): array {
        return [
            'main' => [
                'temp' => $temp,
                'humidity' => 70,
                'feels_like' => $temp - 2,
            ],
            'weather' => [
                ['description' => $isRain ? 'heavy rain' : $description]
            ],
            'wind' => ['speed' => 5.0],
            'name' => 'Tunis',
            'sys' => ['country' => 'TN'],
            'visibility' => 10000,
        ];
    }

    private function mockApiFailure(): void
    {
        $this->httpClient
            ->method('request')
            ->willThrowException(new \Exception('API unavailable'));
    }

    private function mockApiSuccess(array $recommendations): void
    {
        $mockResponse = $this->createMock(ResponseInterface::class);
        $mockResponse->method('toArray')->willReturn([
            'choices' => [
                [
                    'message' => [
                        'content' => json_encode($recommendations)
                    ]
                ]
            ]
        ]);

        $this->httpClient
            ->method('request')
            ->willReturn($mockResponse);
    }

    // ===================================
    // TESTS — generateRecommendations()
    // ===================================

    // ✅ Test 1 — Returns valid JSON string
    public function testGenerateRecommendationsReturnsValidJson(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $this->assertIsString($result);
        $decoded = json_decode($result, true);
        $this->assertIsArray($decoded);
    }

    // ✅ Test 2 — Returns 4 recommendations on API failure
    public function testGenerateRecommendationsReturnsFourOnFailure(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $this->assertCount(4, $recommendations);
    }

    // ✅ Test 3 — Hot weather returns sun icon
    public function testHotWeatherReturnsSunIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(35.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $this->assertEquals('fa-sun', $recommendations[0]['icon']);
        $this->assertEquals('Hot Weather Alert', $recommendations[0]['title']);
    }

    // ✅ Test 4 — Pleasant weather returns leaf icon
    public function testPleasantWeatherReturnsLeafIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $this->assertEquals('fa-leaf', $recommendations[0]['icon']);
        $this->assertEquals('Pleasant Day', $recommendations[0]['title']);
    }

    // ✅ Test 5 — Cold weather returns snowflake icon
    public function testColdWeatherReturnsSnowflakeIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(5.0, 'cloudy')
        );

        $recommendations = json_decode($result, true);
        $this->assertEquals('fa-snowflake', $recommendations[0]['icon']);
        $this->assertEquals('Cold Weather', $recommendations[0]['title']);
    }

    // ✅ Test 6 — Rainy weather returns umbrella icon
    public function testRainyWeatherReturnsUmbrellaIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(15.0, 'heavy rain', true)
        );

        $recommendations = json_decode($result, true);
        $icons = array_column($recommendations, 'icon');
        $this->assertContains('fa-umbrella', $icons);
    }

    // ✅ Test 7 — Clear weather returns piggy bank icon
    public function testClearWeatherReturnsPiggyBankIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(15.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $icons = array_column($recommendations, 'icon');
        $this->assertContains('fa-piggy-bank', $icons);
    }

    // ✅ Test 8 — Always has wallet icon in fallback
    public function testFallbackAlwaysHasWalletIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $icons = array_column($recommendations, 'icon');
        $this->assertContains('fa-wallet', $icons);
    }

    // ✅ Test 9 — Always has chart-line icon in fallback
    public function testFallbackAlwaysHasChartLineIcon(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $icons = array_column($recommendations, 'icon');
        $this->assertContains('fa-chart-line', $icons);
    }

    // ✅ Test 10 — Each recommendation has required fields
    public function testEachRecommendationHasRequiredFields(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);

        foreach ($recommendations as $rec) {
            $this->assertArrayHasKey('icon', $rec);
            $this->assertArrayHasKey('color', $rec);
            $this->assertArrayHasKey('title', $rec);
            $this->assertArrayHasKey('text', $rec);
        }
    }

    // ✅ Test 11 — Colors are valid hex codes
    public function testRecommendationColorsAreValidHex(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);

        foreach ($recommendations as $rec) {
            $this->assertMatchesRegularExpression(
                '/^#[0-9A-Fa-f]{6}$/',
                $rec['color'],
                'Color ' . $rec['color'] . ' is not a valid hex code'
            );
        }
    }

    // ✅ Test 12 — Titles are not empty
    public function testRecommendationTitlesAreNotEmpty(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);

        foreach ($recommendations as $rec) {
            $this->assertNotEmpty($rec['title']);
        }
    }

    // ✅ Test 13 — Texts are not empty
    public function testRecommendationTextsAreNotEmpty(): void
    {
        $this->mockApiFailure();

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);

        foreach ($recommendations as $rec) {
            $this->assertNotEmpty($rec['text']);
        }
    }

    // ✅ Test 14 — API success returns recommendations
    public function testApiSuccessReturnsRecommendations(): void
    {
        $fakeRecommendations = [
            ['icon' => 'fa-sun', 'color' => '#F27438', 'title' => 'Stay Cool', 'text' => 'Budget for AC.'],
            ['icon' => 'fa-leaf', 'color' => '#2d6a4f', 'title' => 'Walk More', 'text' => 'Save transport.'],
            ['icon' => 'fa-piggy-bank', 'color' => '#26474E', 'title' => 'Save Today', 'text' => 'Free activities.'],
            ['icon' => 'fa-wallet', 'color' => '#2CCED2', 'title' => 'Check Budget', 'text' => 'Review spending.'],
        ];

        $this->mockApiSuccess($fakeRecommendations);

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $recommendations = json_decode($result, true);
        $this->assertCount(4, $recommendations);
        $this->assertEquals('fa-sun', $recommendations[0]['icon']);
    }

    // ✅ Test 15 — API success returns valid JSON
    public function testApiSuccessReturnsValidJson(): void
    {
        $fakeRecommendations = [
            ['icon' => 'fa-sun', 'color' => '#F27438', 'title' => 'Stay Cool', 'text' => 'Budget for AC.'],
            ['icon' => 'fa-leaf', 'color' => '#2d6a4f', 'title' => 'Walk More', 'text' => 'Save transport.'],
            ['icon' => 'fa-piggy-bank', 'color' => '#26474E', 'title' => 'Save Today', 'text' => 'Free activities.'],
            ['icon' => 'fa-wallet', 'color' => '#2CCED2', 'title' => 'Check Budget', 'text' => 'Review spending.'],
        ];

        $this->mockApiSuccess($fakeRecommendations);

        $result = $this->groqService->generateRecommendations(
            $this->getWeatherData(25.0, 'clear sky')
        );

        $this->assertJson($result);
    }

    // ===================================
    // TESTS — generateText()
    // ===================================

    // ✅ Test 16 — generateText returns string on API failure
    public function testGenerateTextReturnsStringOnFailure(): void
    {
        $this->httpClient
            ->method('request')
            ->willThrowException(new \Exception('API unavailable'));

        $result = $this->groqService->generateText('Test prompt');

        $this->assertIsString($result);
        $this->assertStringContainsString('AI service unavailable', $result);
    }

    // ✅ Test 17 — generateText returns content on success
    public function testGenerateTextReturnsContentOnSuccess(): void
    {
        $mockResponse = $this->createMock(ResponseInterface::class);
        $mockResponse->method('toArray')->willReturn([
            'choices' => [
                [
                    'message' => [
                        'content' => 'This is the AI response.'
                    ]
                ]
            ]
        ]);

        $this->httpClient
            ->method('request')
            ->willReturn($mockResponse);

        $result = $this->groqService->generateText('Test prompt');

        $this->assertEquals('This is the AI response.', $result);
    }

    // ✅ Test 18 — generateText with empty prompt
    public function testGenerateTextWithEmptyPrompt(): void
    {
        $this->httpClient
            ->method('request')
            ->willThrowException(new \Exception('Empty prompt'));

        $result = $this->groqService->generateText('');

        $this->assertIsString($result);
        $this->assertStringContainsString('AI service unavailable', $result);
    }
}