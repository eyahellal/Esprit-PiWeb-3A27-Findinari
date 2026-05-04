<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthControllerTest extends WebTestCase
{
    public function testLoginPageIsAccessible(): void
    {
        $client = static::createClient();

        $client->request('GET', '/login');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
    }

    public function testLoginFormHasRequiredFields(): void
    {
        $client = static::createClient();

        $client->request('GET', '/login');

        $this->assertSelectorExists('input[name="_username"]');
        $this->assertSelectorExists('input[name="_password"]');
        $this->assertSelectorExists('button[type="submit"], input[type="submit"]');
    }

    public function testLoginPageDoesNotExposePasswordValue(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');

        $passwordInput = $crawler->filter('input[name="_password"]');

        $this->assertSame('password', $passwordInput->attr('type'));
        $this->assertNull($passwordInput->attr('value'));
    }

    public function testInvalidLoginDoesNotAuthenticateUser(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');

        $form = $crawler->filter('form')->form();

        $form['_username'] = 'fake@email.com';
        $form['_password'] = 'wrongpassword';

        $client->submit($form);

        $this->assertNull($client->getContainer()->get('security.token_storage')->getToken());
    }

    public function testProtectedPageRedirectsAnonymousUserToLogin(): void
    {
        $client = static::createClient();

        $client->request('GET', '/profile');

        $this->assertResponseRedirects('/login');
    }
}