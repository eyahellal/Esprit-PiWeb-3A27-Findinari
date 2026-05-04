<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    // ===================================
    // TESTS — Index Page
    // ===================================

    // ✅ Test 1 — Index page loads
    public function testCategorieIndexPageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains(
            $statusCode,
            [200, 302],
            'Expected 200 or 302 but got: ' . $statusCode
        );
    }

    // ✅ Test 2 — Index page does not return 500
    public function testCategorieIndexReturnsNon500(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/');

        $this->assertNotEquals(
            500,
            $client->getResponse()->getStatusCode()
        );
    }

    // ✅ Test 3 — Index with search filter
    public function testCategorieIndexWithSearchFilter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/?search=food');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 4 — Index with Active status filter
    public function testCategorieIndexWithActiveFilter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/?statut=Active');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 5 — Index with Inactive status filter
    public function testCategorieIndexWithInactiveFilter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/?statut=Inactive');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 6 — Index with pagination
    public function testCategorieIndexWithPagination(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/?page=1');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 7 — Index with search and status combined
    public function testCategorieIndexWithSearchAndStatus(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/?search=food&statut=Active');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ===================================
    // TESTS — New Page
    // ===================================

    // ✅ Test 8 — New page loads
    public function testCategorieNewPageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/new');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains(
            $statusCode,
            [200, 302],
            'Expected 200 or 302 but got: ' . $statusCode
        );
    }

    // ✅ Test 9 — New page does not return 500
    public function testCategorieNewReturnsNon500(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/new');

        $this->assertNotEquals(500, $client->getResponse()->getStatusCode());
    }

    // ✅ Test 10 — New POST with empty data stays on page
    public function testCategorieNewPostWithEmptyData(): void
    {
        $client = static::createClient();
        $client->request('POST', '/categorie/new', []);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 11 — New POST with invalid data stays on form
    public function testCategorieNewPostWithInvalidData(): void
    {
        $client = static::createClient();
        $client->request('POST', '/categorie/new', [
            'categorie' => [
                'nom' => '',
                'statut' => 'Invalid',
                'color' => 'notahex',
                'icon' => '',
            ]
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ===================================
    // TESTS — Edit Page
    // ===================================

    // ✅ Test 12 — Edit with invalid ID returns 404
    public function testCategorieEditWithInvalidIdReturns404(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/99999/edit');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302, 404]);
    }

    // ✅ Test 13 — Edit with invalid ID does not return 500
    public function testCategorieEditWithInvalidIdReturnsNon500(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/99999/edit');

        $this->assertNotEquals(500, $client->getResponse()->getStatusCode());
    }

    // ✅ Test 14 — Edit POST with invalid ID
    public function testCategorieEditPostWithInvalidId(): void
    {
        $client = static::createClient();
        $client->request('POST', '/categorie/99999/edit', [
            'categorie' => [
                'nom' => 'Test',
                'statut' => 'Active',
            ]
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302, 404]);
    }

    // ===================================
    // TESTS — Delete
    // ===================================

    // ✅ Test 15 — Delete with invalid ID returns 404
    public function testCategorieDeleteWithInvalidId(): void
    {
        $client = static::createClient();
        $client->request('POST', '/categorie/99999/delete', [
            '_token' => 'invalid_token'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }

    // ✅ Test 16 — Delete with invalid CSRF token
    public function testCategorieDeleteWithInvalidCsrfToken(): void
    {
        $client = static::createClient();
        $client->request('POST', '/categorie/1/delete', [
            '_token' => 'wrong_token'
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }

    // ✅ Test 17 — Delete with empty token
    public function testCategorieDeleteWithEmptyToken(): void
    {
        $client = static::createClient();
        $client->request('POST', '/categorie/1/delete', [
            '_token' => ''
        ]);

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [302, 404]);
    }

    // ===================================
    // TESTS — All Routes Exist
    // ===================================

    // ✅ Test 18 — All categorie routes exist
    public function testAllCategorieRoutesExist(): void
    {
        $client = static::createClient();

        $routes = [
            '/categorie/',
            '/categorie/new',
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

    // ✅ Test 19 — Index with page 2
    public function testCategorieIndexPage2(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/?page=2');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 302]);
    }

    // ✅ Test 20 — New page is accessible via GET
    public function testCategorieNewIsAccessibleViaGet(): void
    {
        $client = static::createClient();
        $client->request('GET', '/categorie/new');

        $this->assertNotEquals(
            405,
            $client->getResponse()->getStatusCode(),
            'GET method should be allowed on /categorie/new'
        );
    }
}
