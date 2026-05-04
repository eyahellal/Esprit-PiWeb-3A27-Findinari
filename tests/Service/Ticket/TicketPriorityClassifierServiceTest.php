<?php

namespace App\Tests\Service;

use App\Service\TicketPriorityClassifierService;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TicketPriorityClassifierServiceTest extends TestCase
{
    private TicketPriorityClassifierService $service;

    protected function setUp(): void
    {
        $httpClient = $this->createMock(HttpClientInterface::class);

        $this->service = new TicketPriorityClassifierService(
            $httpClient,
            'fake-api-key',
            'fake-model'
        );
    }

    public function testClassifyPriorityReturnsDefaultWhenTextIsEmpty(): void
    {
        $result = $this->service->classifyPriority('', '');

        $this->assertSame('normal', $result['priority']);
        $this->assertSame('default', $result['source']);
    }

    public function testClassifyPriorityDetectsUrgentViaLocalKeywords(): void
    {
        $result = $this->service->classifyPriority(
            'Urgent problem',
            'My payment failed and the app is broken'
        );

        $this->assertSame('urgent', $result['priority']);
        $this->assertSame('local_keywords', $result['source']);
    }

    public function testClassifyPriorityDetectsLowViaLocalKeywords(): void
    {
        $result = $this->service->classifyPriority(
            'Feature request',
            'This is a nice to have suggestion for the future'
        );

        $this->assertSame('low', $result['priority']);
        $this->assertSame('local_keywords', $result['source']);
    }

    public function testMapToProjectPriorityMapsUrgentToHigh(): void
    {
        $this->assertSame('High', $this->service->mapToProjectPriority('urgent'));
    }

    public function testMapToProjectPriorityMapsLowToLow(): void
    {
        $this->assertSame('Low', $this->service->mapToProjectPriority('low'));
    }

    public function testMapToProjectPriorityMapsNormalToMedium(): void
    {
        $this->assertSame('Medium', $this->service->mapToProjectPriority('normal'));
    }
}