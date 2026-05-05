<?php

namespace App\Controller;

use App\Entity\user\Utilisateur;
use App\Form\RegisterType;
use App\Service\FacePlusPlusService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
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
        FacePlusPlusService $faceService,
        Security $security
    ): Response {
        $email = trim((string) $request->request->get('email'));
        $base64Image = (string) $request->request->get('face_image_data');

        if ($email === '') {
            $this->addFlash('danger', 'Please enter your email.');
            return $this->redirectToRoute('app_front_login');
        }

        if ($base64Image === '') {
            $this->addFlash('danger', 'No face image captured.');
            return $this->redirectToRoute('app_front_login');
        }

        $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => $email]);

        if (!$user instanceof Utilisateur) {
            $this->addFlash('danger', 'User not found.');
            return $this->redirectToRoute('app_front_login');
        }

        if ($user->getStatut() !== 'ACTIF') {
            $this->addFlash('danger', 'Please activate your account first.');
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

        $commaPosition = strpos($base64Image, ',');

        if ($commaPosition === false) {
            $this->addFlash('danger', 'Invalid captured image.');
            return $this->redirectToRoute('app_front_login');
        }

        $imageData = substr($base64Image, $commaPosition + 1);
        $decodedImage = base64_decode($imageData, true);

        if ($decodedImage === false || $decodedImage === '') {
            $this->addFlash('danger', 'Failed to decode image.');
            return $this->redirectToRoute('app_front_login');
        }

        $projectDir = $this->getParameter('kernel.project_dir');

        if (!is_string($projectDir)) {
            throw new \RuntimeException('Invalid project directory.');
        }

        $uploadDir = $projectDir . '/var/uploads/faces';

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

            $confidence = $faceService->compare($detectedToken, (string) $user->getFaceToken());

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
                    $response = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                        'body' => [
                            'secret' => $this->env('RECAPTCHA_SECRET'),
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

                        if ($existingUser instanceof Utilisateur) {
                            $this->addFlash('danger', 'This email already exists.');
                        } else {
                            $plainPassword = (string) $form->get('plainPassword')->getData();

                            $user->setMdp($passwordHasher->hashPassword($user, $plainPassword));
                            $user->setRole('USER');
                            $user->setStatut('INACTIF');
                            $user->setDateCreation(new \DateTime());
                            $user->setDateModification(new \DateTime());

                            $entityManager->persist($user);
                            $entityManager->flush();

                            $expires = time() + 86400;
                            $email = (string) $user->getGmail();
                            $signature = hash_hmac('sha256', $email . '|' . $expires, $this->env('APP_SECRET'));

                            $activationLink = $this->generateUrl(
                                'app_activate_account',
                                [
                                    'email' => $email,
                                    'expires' => $expires,
                                    'signature' => $signature,
                                ],
                                UrlGeneratorInterface::ABSOLUTE_URL
                            );

                            $this->sendBrevoEmail(
                                $httpClient,
                                (string) $user->getGmail(),
                                trim(($user->getPrenom() ?? '') . ' ' . ($user->getNom() ?? '')),
                                'Welcome ' . ($user->getPrenom() ?? 'User'),
                                '
                                    <html>
                                        <body>
                                            <p>Dear ' . htmlspecialchars((string) $user->getPrenom(), ENT_QUOTES, 'UTF-8') . ',</p>
                                            <p>You joined our community. We are proud to have you here.</p>
                                            <p>Please activate your account by clicking the link below:</p>
                                            <p><a href="' . htmlspecialchars($activationLink, ENT_QUOTES, 'UTF-8') . '">Activate my account</a></p>
                                            <p>This link expires in 24 hours.</p>
                                        </body>
                                    </html>
                                '
                            );

                            $this->addFlash('success', 'Account created successfully. Please check your email to activate your account.');
                            return $this->redirectToRoute('app_front_login');
                        }
                    }
                }
            }
        }

        return $this->render('register/register.html.twig', [
            'registrationForm' => $form->createView(),
            'recaptcha_site_key' => $this->env('RECAPTCHA_SITE_KEY'),
        ]);
    }

    #[Route('/activate', name: 'app_activate_account', methods: ['GET'])]
    public function activate(Request $request, EntityManagerInterface $entityManager): Response
    {
        $email = (string) $request->query->get('email', '');
        $expires = (string) $request->query->get('expires', '');
        $signature = (string) $request->query->get('signature', '');

        if ($email === '' || $expires === '' || $signature === '') {
            $this->addFlash('danger', 'Invalid activation link.');
            return $this->redirectToRoute('app_front_login');
        }

        if (!ctype_digit($expires) || (int) $expires < time()) {
            $this->addFlash('danger', 'Activation link expired.');
            return $this->redirectToRoute('app_front_login');
        }

        $expectedSignature = hash_hmac('sha256', $email . '|' . $expires, $this->env('APP_SECRET'));

        if (!hash_equals($expectedSignature, $signature)) {
            $this->addFlash('danger', 'Invalid activation signature.');
            return $this->redirectToRoute('app_front_login');
        }

        $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => $email]);

        if (!$user instanceof Utilisateur) {
            $this->addFlash('danger', 'User not found.');
            return $this->redirectToRoute('app_front_login');
        }

        if ($user->getStatut() === 'ACTIF') {
            $this->addFlash('success', 'Your account is already activated. You can log in.');
            return $this->redirectToRoute('app_front_login');
        }

        $user->setStatut('ACTIF');
        $user->setDateModification(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', 'Account activated successfully. You can now log in.');

        return $this->redirectToRoute('app_front_login');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): never
    {
        throw new \LogicException('This is intercepted by Symfony logout.');
    }

    #[Route('/register/voice-parse', name: 'app_register_voice_parse', methods: ['POST'])]
    public function parseVoiceData(Request $request, HttpClientInterface $httpClient): Response
    {
        $data = json_decode($request->getContent(), true);
        $transcript = is_array($data) ? trim((string) ($data['transcript'] ?? '')) : '';

        if ($transcript === '') {
            return $this->json([
                'success' => false,
                'message' => 'Empty transcript.',
            ], 400);
        }

        try {
            $parsed = $this->parseWithOllama($transcript, $httpClient);

            return $this->json([
                'success' => true,
                'transcript' => $transcript,
                'prenom' => $parsed['prenom'],
                'nom' => $parsed['nom'],
                'gmail' => $parsed['gmail'],
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'success' => false,
                'message' => 'AI parsing failed: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @return array{prenom:string, nom:string, gmail:string}
     */
    private function parseWithOllama(string $transcript, HttpClientInterface $httpClient): array
    {
        $prompt = <<<PROMPT
Extract the following fields from the user's speech:
- prenom
- nom
- gmail

Return JSON only with this exact structure:
{"prenom":"","nom":"","gmail":""}

Rules:
- "prenom" = first name
- "nom" = surname / family name
- "gmail" = email address
- If a field is missing, return it as an empty string
- Do not add explanation
- Do not add markdown
- Output valid JSON only

User speech:
"$transcript"
PROMPT;

        $response = $httpClient->request('POST', 'http://localhost:11434/api/generate', [
            'json' => [
                'model' => 'gemma3:1b',
                'prompt' => $prompt,
                'stream' => false,
            ],
            'timeout' => 60,
        ]);

        $data = $response->toArray(false);
        $rawResponse = $data['response'] ?? '';

        if (!is_string($rawResponse)) {
            throw new \RuntimeException('Invalid response from Ollama.');
        }

        $rawText = trim($rawResponse);

        if ($rawText === '') {
            throw new \RuntimeException('Empty response from Ollama.');
        }

        $cleaned = preg_replace('/^```json\s*/i', '', $rawText);
        $cleaned = is_string($cleaned) ? $cleaned : $rawText;

        $cleaned = preg_replace('/^```\s*/i', '', $cleaned);
        $cleaned = is_string($cleaned) ? $cleaned : $rawText;

        $cleaned = preg_replace('/\s*```$/', '', $cleaned);
        $cleaned = is_string($cleaned) ? trim($cleaned) : $rawText;

        $parsed = json_decode($cleaned, true);

        if (!is_array($parsed)) {
            throw new \RuntimeException('Invalid JSON returned by Ollama: ' . $cleaned);
        }

        return [
            'prenom' => is_string($parsed['prenom'] ?? null) ? $parsed['prenom'] : '',
            'nom' => is_string($parsed['nom'] ?? null) ? $parsed['nom'] : '',
            'gmail' => is_string($parsed['gmail'] ?? null) ? $parsed['gmail'] : '',
        ];
    }

    #[Route('/forgot-password', name: 'app_forgot_password')]
    public function forgotPassword(
        Request $request,
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient
    ): Response {
        $form = $this->createFormBuilder()
            ->add('gmail', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank(['message' => 'Email is required']),
                    new Email(['message' => 'Invalid email']),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Send reset link',
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = trim((string) $form->get('gmail')->getData());

            $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => $email]);

            if ($user instanceof Utilisateur) {
                $expires = time() + 3600;
                $signature = hash_hmac(
                    'sha256',
                    (string) $user->getGmail() . '|' . $expires . '|' . $user->getPassword(),
                    $this->env('APP_SECRET')
                );

                $resetLink = $this->generateUrl(
                    'app_reset_password',
                    [
                        'email' => $user->getGmail(),
                        'expires' => $expires,
                        'signature' => $signature,
                    ],
                    UrlGeneratorInterface::ABSOLUTE_URL
                );

                $this->sendBrevoEmail(
                    $httpClient,
                    (string) $user->getGmail(),
                    trim(($user->getPrenom() ?? '') . ' ' . ($user->getNom() ?? '')),
                    'Reset your password',
                    '
                        <html>
                            <body>
                                <p>Hello ' . htmlspecialchars((string) $user->getPrenom(), ENT_QUOTES, 'UTF-8') . ',</p>
                                <p>Click the link below to change your password:</p>
                                <p><a href="' . htmlspecialchars($resetLink, ENT_QUOTES, 'UTF-8') . '">Change my password</a></p>
                                <p>This link expires in 1 hour.</p>
                            </body>
                        </html>
                    '
                );
            }

            $this->addFlash('success', 'If this email exists, a reset link has been sent.');
            return $this->redirectToRoute('app_front_login');
        }

        return $this->render('security/forgot_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reset-password', name: 'app_reset_password')]
    public function resetPassword(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $email = (string) $request->query->get('email', '');
        $expires = (string) $request->query->get('expires', '');
        $signature = (string) $request->query->get('signature', '');

        if ($email === '' || $expires === '' || $signature === '') {
            $this->addFlash('danger', 'Invalid reset link.');
            return $this->redirectToRoute('app_forgot_password');
        }

        if (!ctype_digit($expires) || (int) $expires < time()) {
            $this->addFlash('danger', 'Reset link expired.');
            return $this->redirectToRoute('app_forgot_password');
        }

        $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['gmail' => $email]);

        if (!$user instanceof Utilisateur) {
            $this->addFlash('danger', 'User not found.');
            return $this->redirectToRoute('app_forgot_password');
        }

        $expectedSignature = hash_hmac(
            'sha256',
            (string) $user->getGmail() . '|' . $expires . '|' . $user->getPassword(),
            $this->env('APP_SECRET')
        );

        if (!hash_equals($expectedSignature, $signature)) {
            $this->addFlash('danger', 'Invalid reset signature.');
            return $this->redirectToRoute('app_forgot_password');
        }

        $form = $this->createFormBuilder()
            ->add('plainPassword', PasswordType::class, [
                'label' => 'New password',
                'constraints' => [
                    new NotBlank(['message' => 'Password is required']),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Password must be at least 6 characters',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Update password',
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = (string) $form->get('plainPassword')->getData();

            $user->setMdp($passwordHasher->hashPassword($user, $plainPassword));
            $user->setDateModification(new \DateTime());

            $entityManager->flush();

            $this->addFlash('success', 'Password updated successfully. You can now log in.');
            return $this->redirectToRoute('app_front_login');
        }

        return $this->render('security/reset_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function env(string $key, ?string $default = null): string
    {
        $value = $_SERVER[$key] ?? $_ENV[$key] ?? getenv($key);

        if ($value === false || $value === '' || $value === null) {
            if ($default !== null) {
                return $default;
            }

            throw new \RuntimeException(sprintf('Missing environment variable: %s', $key));
        }

        return trim((string) $value);
    }

    private function sendBrevoEmail(
        HttpClientInterface $httpClient,
        string $toEmail,
        string $toName,
        string $subject,
        string $htmlContent
    ): void {
        $mailResponse = $httpClient->request('POST', 'https://api.brevo.com/v3/smtp/email', [
            'headers' => [
                'accept' => 'application/json',
                'api-key' => trim($this->env('BREVO_API_KEY')),
                'content-type' => 'application/json',
            ],
            'json' => [
                'sender' => [
                    'name' => trim($this->env('BREVO_SENDER_NAME')),
                    'email' => trim($this->env('BREVO_SENDER_EMAIL')),
                ],
                'to' => [
                    [
                        'email' => $toEmail,
                        'name' => $toName,
                    ],
                ],
                'subject' => $subject,
                'htmlContent' => $htmlContent,
            ],
        ]);

        $statusCode = $mailResponse->getStatusCode();

        if ($statusCode < 200 || $statusCode >= 300) {
            throw new \RuntimeException('Brevo mail error: ' . $mailResponse->getContent(false));
        }
    }
}