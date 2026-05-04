<?php

namespace App\Tests\Controller;
// php bin/phpunit tests/Controller/StatsControllerTest.php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StatsControllerTest extends WebTestCase
{
    // ===================================
    // TESTS — Index Page
    // ===================================

    public function testStatsIndexPageLoads(): void
{
    $client = static::createClient();
    $client->catchExceptions(false);

    $client->request('GET', '/stats/');

    $this->assertNotEquals(500, $client->getResponse()->getStatusCode());
}

    // ✅ Test 2 — Index page does not return 500
    public function testStatsIndexReturnsNon500(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/');

        $this->assertNotEquals(
            500,
            $client->getResponse()->getStatusCode()
        );
    }

    // ✅ Test 3 — Index with all wallets filter
    public function testStatsIndexWithAllWalletsFilter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/?wallet=all');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 4 — Index with specific wallet ID
    public function testStatsIndexWithSpecificWalletId(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/?wallet=1');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 5 — Index with invalid wallet ID
    public function testStatsIndexWithInvalidWalletId(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/?wallet=99999');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
        $this->assertNotEquals(500, $statusCode);
    }

    // ✅ Test 6 — Route exists and is GET only
    public function testStatsRouteIsGetOnly(): void
    {
        $client = static::createClient();
        $client->request('POST', '/stats/');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [405, 302, 404]);
    }

    // ✅ Test 7 — Stats route does not crash
    public function testStatsRouteDoesNotCrash(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/');

        $this->assertNotEquals(
            500,
            $client->getResponse()->getStatusCode(),
            'Stats page should not crash'
        );
    }

    // ✅ Test 8 — Stats with wallet=0 does not crash
    public function testStatsWithZeroWalletId(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/?wallet=0');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertNotEquals(500, $statusCode);
    }

    // ✅ Test 9 — Stats with string wallet ID
    public function testStatsWithStringWalletId(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/?wallet=invalid');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertNotEquals(500, $statusCode);
    }

    // ✅ Test 10 — Stats route is accessible
    public function testStatsRouteIsAccessible(): void
    {
        $client = static::createClient();
        $client->request('GET', '/stats/');

        $this->assertContains(
            $client->getResponse()->getStatusCode(),
            [200, 302]
        );
    }
}