<?php

namespace App\Controller;

use App\Entity\user\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GoogleAuthController extends AbstractController
{
    #[Route('/connect/google', name: 'app_google_start')]
    public function connect(): RedirectResponse
    {
        $params = http_build_query([
            'client_id' => $_ENV['GOOGLE_CLIENT_ID'],
            'redirect_uri' => $_ENV['GOOGLE_REDIRECT_URI'],
            'response_type' => 'code',
            'scope' => 'openid email profile',
            'prompt' => 'select_account',
        ]);

        return $this->redirect('https://accounts.google.com/o/oauth2/v2/auth?' . $params);
    }

    #[Route('/connect/google/check', name: 'app_google_check')]
    public function check(
        Request $request,
        HttpClientInterface $httpClient,
        EntityManagerInterface $entityManager,
        Security $security
    ): Response {
        $code = $request->query->get('code');
        $error = $request->query->get('error');

        if ($error) {
            $this->addFlash('danger', 'Google login failed: ' . $error);
            return $this->redirectToRoute('app_front_login');
        }

        if (!$code) {
            $this->addFlash('danger', 'No authorization code received from Google.');
            return $this->redirectToRoute('app_front_login');
        }

        $tokenResponse = $httpClient->request('POST', 'https://oauth2.googleapis.com/token', [
            'body' => [
                'client_id' => $_ENV['GOOGLE_CLIENT_ID'],
                'client_secret' => $_ENV['GOOGLE_CLIENT_SECRET'],
                'code' => $code,
                'redirect_uri' => $_ENV['GOOGLE_REDIRECT_URI'],
                'grant_type' => 'authorization_code',
            ],
        ]);

        $tokenData = $tokenResponse->toArray(false);

        if (empty($tokenData['access_token'])) {
            $this->addFlash('danger', 'Google token exchange failed.');
            return $this->redirectToRoute('app_front_login');
        }

        $userInfoResponse = $httpClient->request('GET', 'https://openidconnect.googleapis.com/v1/userinfo', [
            'headers' => [
                'Authorization' => 'Bearer ' . $tokenData['access_token'],
            ],
        ]);

        $googleUser = $userInfoResponse->toArray(false);

        $email = $googleUser['email'] ?? null;
        $givenName = $googleUser['given_name'] ?? '';
        $familyName = $googleUser['family_name'] ?? '';

        if (!$email) {
            $this->addFlash('danger', 'Google did not return an email address.');
            return $this->redirectToRoute('app_front_login');
        }

        $user = $entityManager->getRepository(Utilisateur::class)->findOneBy([
            'gmail' => $email,
        ]);

        if (!$user) {
            $user = new Utilisateur();
            $user->setGmail($email);
            $user->setPrenom($givenName);
            $user->setNom($familyName);
            $user->setRole('USER');
            $user->setStatut('ACTIF');
            $user->setDateCreation(new \DateTime());
            $user->setDateModification(new \DateTime());
            $user->setMdp(bin2hex(random_bytes(16)));

            $entityManager->persist($user);
            $entityManager->flush();
        }

        $security->login($user);

        return $this->redirectToRoute('app_home');
    }
}