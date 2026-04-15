<?php

namespace App\Controller;

use App\Entity\user\Utilisateur;
use App\form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'app_front_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        return $this->render('login/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/register', name: 'app_front_register')]
    public function register(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        HttpClientInterface $httpClient
    ): Response {
        $user = new Utilisateur();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                $this->addFlash('danger', 'Please fill in the form correctly.');
            } else {
                $recaptcha = $request->request->get('g-recaptcha-response');

                if (!$recaptcha) {
                    $this->addFlash('danger', 'Please verify captcha.');
                } else {
                    $secret = $_ENV['RECAPTCHA_SECRET'];

                    $response = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                        'body' => [
                            'secret' => $secret,
                            'response' => $recaptcha,
                            'remoteip' => $request->getClientIp(),
                        ],
                    ]);

                    $result = $response->toArray(false);

                    if (empty($result['success'])) {
                        $this->addFlash('danger', 'Captcha failed.');
                    } else {
                        $existingUser = $entityManager->getRepository(Utilisateur::class)->findOneBy([
                            'gmail' => $user->getGmail(),
                        ]);

                        if ($existingUser) {
                            $this->addFlash('danger', 'This email already exists.');
                        } else {
                            $plainPassword = $form->get('plainPassword')->getData();
                            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);

                            $user->setMdp($hashedPassword);
                            $user->setRole('USER');
                            $user->setStatut('ACTIF');
                            $user->setDateCreation(new \DateTime());
                            $user->setDateModification(new \DateTime());

                            $entityManager->persist($user);
                            $entityManager->flush();

                            $this->addFlash('success', 'Account created successfully. You can now log in.');
                            return $this->redirectToRoute('app_front_login');
                        }
                    }
                }
            }
        }

        return $this->render('register/register.html.twig', [
            'registrationForm' => $form->createView(),
            'recaptcha_site_key' => $_ENV['RECAPTCHA_SITE_KEY'],
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): never
    {
        throw new \LogicException('This is intercepted by Symfony logout.');
    }
}