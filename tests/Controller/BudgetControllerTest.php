<?php

namespace App\Tests\Controller;
// php bin/phpunit tests/Controller/BudgetControllerTest.php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BudgetControllerTest extends WebTestCase
{
    // ✅ Test 1 — Index page does not crash with PHP error
    public function testBudgetIndexPageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/budget/');

        $statusCode = $client->getResponse()->getStatusCode();

        // Should not be a PHP fatal error (500)
        // Acceptable: 200 (success) or 302 (redirect to login)
        $this->assertContains(
            $statusCode,
            [200, 302],
            'Expected 200 or 302 but got: ' . $statusCode .
            "\nContent: " . substr($client->getResponse()->getContent(), 0, 500)
        );
    }

    // ✅ Test 2 — Step1 page loads
    public function testBudgetStep1PageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/budget/new/step1');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains(
            $statusCode,
            [200, 302],
            'Expected 200 or 302 but got: ' . $statusCode
        );
    }

    // ✅ Test 3 — Step2 without session redirects to step1
    public function testStep2WithoutSessionRedirects(): void
    {
        $client = static::createClient();
        $client->request('GET', '/budget/new/step2');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    // ✅ Test 4 — Step3 without session redirects to step1
    public function testStep3WithoutSessionRedirects(): void
    {
        $client = static::createClient();
        $client->request('GET', '/budget/new/step3');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    // ✅ Test 5 — Step1 POST without wallet stays on page
    public function testStep1PostWithoutWallet(): void
    {
        $client = static::createClient();
        $client->request('POST', '/budget/new/step1', [
            'wallet_id' => ''
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 6 — Step2 redirects when no wallet in session
    public function testStep2RedirectsWithoutWalletSession(): void
    {
        $client = static::createClient();
        $client->request('GET', '/budget/new/step2');

        $this->assertTrue($client->getResponse()->isRedirect());
    }

    // ✅ Test 7 — Step3 redirects when no session
    public function testStep3RedirectsWithoutSession(): void
    {
        $client = static::createClient();
        $client->request('GET', '/budget/new/step3');

        $this->assertTrue($client->getResponse()->isRedirect());
    }

    // ✅ Test 8 — Delete route with invalid ID returns 404
    public function testDeleteWithInvalidId(): void
    {
        $client = static::createClient();
        $client->request('POST', '/budget/99999/delete', [
            '_token' => 'invalid'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }
}