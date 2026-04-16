<?php

namespace App\Controller;

use App\Entity\user\Utilisateur;
use App\form\RegisterType;
use App\Service\FacePlusPlusService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
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

    #[Route('/login/face', name: 'app_face_login', methods: ['POST'])]
public function faceLogin(
    Request $request,
    EntityManagerInterface $entityManager,
    \App\Service\FacePlusPlusService $faceService,
    \Symfony\Bundle\SecurityBundle\Security $security
): Response {
    $email = trim((string) $request->request->get('email'));
    $base64Image = (string) $request->request->get('face_image_data');

    if (!$email) {
        $this->addFlash('danger', 'Please enter your email.');
        return $this->redirectToRoute('app_front_login');
    }

    if (!$base64Image) {
        $this->addFlash('danger', 'No face image captured.');
        return $this->redirectToRoute('app_front_login');
    }

    $user = $entityManager->getRepository(Utilisateur::class)->findOneBy([
        'gmail' => $email,
    ]);

    if (!$user) {
        $this->addFlash('danger', 'User not found.');
        return $this->redirectToRoute('app_front_login');
    }

    if (!$user->isFaceEnabled() || !$user->getFaceToken()) {
        $this->addFlash('danger', 'Face ID is not enabled for this account.');
        return $this->redirectToRoute('app_front_login');
    }

    if (!preg_match('/^data:image\/\w+;base64,/', $base64Image)) {
        $this->addFlash('danger', 'Invalid captured image.');
        return $this->redirectToRoute('app_front_login');
    }

    $imageData = substr($base64Image, strpos($base64Image, ',') + 1);
    $decodedImage = base64_decode($imageData);

    if ($decodedImage === false) {
        $this->addFlash('danger', 'Failed to decode image.');
        return $this->redirectToRoute('app_front_login');
    }

    $uploadDir = $this->getParameter('kernel.project_dir') . '/var/uploads/faces';

    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
        throw new \RuntimeException('Unable to create upload directory.');
    }

    $tempPath = $uploadDir . '/' . uniqid('face_login_', true) . '.jpg';
    file_put_contents($tempPath, $decodedImage);

    try {
        $detectedToken = $faceService->detectFaceToken($tempPath);

        if (!$detectedToken) {
            $this->addFlash('danger', 'No face detected.');
            return $this->redirectToRoute('app_front_login');
        }

        $confidence = $faceService->compare($detectedToken, $user->getFaceToken());

        if ($confidence < 80) {
            $this->addFlash('danger', 'Face not recognized.');
            return $this->redirectToRoute('app_front_login');
        }

        $security->login($user);

        return $this->redirectToRoute('app_home');
    } catch (\RuntimeException $e) {
        $this->addFlash('danger', $e->getMessage());
        return $this->redirectToRoute('app_front_login');
    } finally {
        if (is_file($tempPath)) {
            @unlink($tempPath);
        }
    }
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