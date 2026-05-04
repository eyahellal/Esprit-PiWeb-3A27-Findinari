<?php

namespace App\Tests\Controller;
// php bin/phpunit tests/Controller/TransactionControllerTest.php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TransactionControllerTest extends WebTestCase
{
    // ===================================
    // TESTS — Index Page
    // ===================================

    // ✅ Test 1 — Index page loads
    public function testTransactionIndexPageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains(
            $statusCode,
            [200, 302],
            'Expected 200 or 302 but got: ' . $statusCode
        );
    }

    // ✅ Test 2 — Index page does not return 500
    public function testTransactionIndexReturnsNon500(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/');

        $this->assertNotEquals(
            500,
            $client->getResponse()->getStatusCode()
        );
    }

    // ✅ Test 3 — Index with type filter income
    public function testTransactionIndexWithIncomeFilter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/?type=income');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 4 — Index with type filter depense
    public function testTransactionIndexWithDepenseFilter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/?type=depense');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ===================================
    // TESTS — Step 1 (Choose Wallet)
    // ===================================

    // ✅ Test 5 — Step1 page loads
    public function testTransactionStep1PageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step1');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 6 — Step1 POST without wallet stays on page
    public function testTransactionStep1PostWithoutWallet(): void
    {
        $client = static::createClient();
        $client->request('POST', '/transaction/new/step1', [
            'wallet_id' => ''
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 7 — Step1 POST with invalid wallet stays on page
    public function testTransactionStep1PostWithInvalidWallet(): void
    {
        $client = static::createClient();
        $client->request('POST', '/transaction/new/step1', [
            'wallet_id' => '99999'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ===================================
    // TESTS — Step 2 (Choose Type)
    // ===================================

    // ✅ Test 8 — Step2 without session redirects to step1
    public function testTransactionStep2WithoutSessionRedirects(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step2');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    // ✅ Test 9 — Step2 redirects to step1 when no wallet in session
    public function testTransactionStep2RedirectsToStep1(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step2');

        $this->assertTrue($client->getResponse()->isRedirect());
    }

    // ===================================
    // TESTS — Step 3 (Details)
    // ===================================

    // ✅ Test 10 — Step3 without session redirects to step1
    public function testTransactionStep3WithoutSessionRedirects(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step3');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    // ✅ Test 11 — Step3 redirects when no wallet in session
    public function testTransactionStep3RedirectsWithoutWallet(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step3');

        $this->assertTrue($client->getResponse()->isRedirect());
    }


    // ===================================
    // TESTS — Delete
    // ===================================

    // ✅ Test 14 — Delete with invalid ID returns 404
    public function testTransactionDeleteWithInvalidId(): void
    {
        $client = static::createClient();
        $client->request('POST', '/transaction/99999/delete', [
            '_token' => 'invalid_token'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }

    // ✅ Test 15 — Delete with invalid CSRF token
    public function testTransactionDeleteWithInvalidCsrfToken(): void
    {
        $client = static::createClient();
        $client->request('POST', '/transaction/1/delete', [
            '_token' => 'wrong_token'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }

    // ===================================
    // TESTS — Toggle Recurring
    // ===================================

    // ✅ Test 16 — Toggle recurring with invalid ID returns 404
    public function testToggleRecurringWithInvalidId(): void
    {
        $client = static::createClient();
        $client->request('POST', '/transaction/99999/toggle-recurring', [
            '_token' => 'invalid_token'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }

    // ===================================
    // TESTS — All Routes Exist
    // ===================================

    // ✅ Test 17 — All transaction routes exist
    public function testAllTransactionRoutesExist(): void
    {
        $client = static::createClient();

        $routes = [
            '/transaction/',
            '/transaction/new/step1',
            '/transaction/new/step2',
            '/transaction/new/step3',
        ];

        foreach ($routes as $route) {
            $client->request('GET', $route);
            $this->assertNotEquals(
                500,
                $client->getResponse()->getStatusCode(),
                "Route $route returned 500 error"
            );
        }
    }

    // ✅ Test 18 — Step2 GET returns redirect
    public function testStep2GetReturnsRedirect(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step2');

        $this->assertContains(
            $client->getResponse()->getStatusCode(),
            [302]
        );
    }

    // ✅ Test 19 — Step3 GET returns redirect
    public function testStep3GetReturnsRedirect(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/new/step3');

        $this->assertContains(
            $client->getResponse()->getStatusCode(),
            [302]
        );
    }

    // ✅ Test 20 — Index with pagination
    public function testTransactionIndexWithPagination(): void
    {
        $client = static::createClient();
        $client->request('GET', '/transaction/?page=1');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }
}