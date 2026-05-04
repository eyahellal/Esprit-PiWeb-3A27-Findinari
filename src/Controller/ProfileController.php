<?php

namespace App\Controller;

use App\Entity\user\Utilisateur;
use App\Form\UpdatePasswordType;
use App\Form\UpdateProfileType;
use App\Service\FacePlusPlusService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_front_login');
        }

        return $this->render('profile/profile.html.twig', [
            'userData' => $user,
        ]);
    }

    #[Route('/profile/update', name: 'app_profile_update')]
    public function updateProfile(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_front_login');
        }

        $oldEmail = $user->getGmail();

        $form = $this->createForm(UpdateProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existing = $entityManager->getRepository(Utilisateur::class)->findOneBy([
                'gmail' => $user->getGmail(),
            ]);

            if ($existing && $existing->getId() !== $user->getId()) {
                $this->addFlash('danger', 'This email is already used.');
                return $this->redirectToRoute('app_profile_update');
            }

            $user->setDateModification(new \DateTime());
            $entityManager->flush();

            if ($oldEmail !== $user->getGmail()) {
                $this->addFlash('success', 'Profile updated. Please log in again.');
                return $this->redirectToRoute('app_logout');
            }

            $this->addFlash('success', 'Profile updated successfully.');
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/update_profile.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }

    #[Route('/profile/password', name: 'app_profile_password')]
    public function updatePassword(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_front_login');
        }

        $form = $this->createForm(UpdatePasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentPassword = $form->get('currentPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();

            if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                $this->addFlash('danger', 'Current password is incorrect.');
                return $this->redirectToRoute('app_profile_password');
            }

            $user->setMdp($passwordHasher->hashPassword($user, $newPassword));
            $user->setDateModification(new \DateTime());

            $entityManager->flush();

            $this->addFlash('success', 'Password updated successfully.');
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/update_password.html.twig', [
            'passwordForm' => $form->createView(),
        ]);
    }

    #[Route('/profile/face/enroll', name: 'app_profile_face_enroll', methods: ['POST'])]
    public function enrollFace(
        Request $request,
        EntityManagerInterface $entityManager,
        FacePlusPlusService $faceService
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_front_login');
        }

        $base64Image = (string) $request->request->get('face_image_data');

        if (!$base64Image) {
            $this->addFlash('danger', 'No face image captured.');
            return $this->redirectToRoute('app_profile');
        }

        if (!preg_match('/^data:image\/\w+;base64,/', $base64Image)) {
            $this->addFlash('danger', 'Invalid captured image.');
            return $this->redirectToRoute('app_profile');
        }

        $imageData = substr($base64Image, strpos($base64Image, ',') + 1);
        $decodedImage = base64_decode($imageData);

        if ($decodedImage === false) {
            $this->addFlash('danger', 'Failed to decode image.');
            return $this->redirectToRoute('app_profile');
        }

        $uploadDir = $this->getParameter('kernel.project_dir') . '/var/uploads/faces';

        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
            throw new \RuntimeException('Unable to create upload directory.');
        }

        $tempPath = $uploadDir . '/' . uniqid('face_enroll_', true) . '.jpg';
        file_put_contents($tempPath, $decodedImage);

        try {
            $faceToken = $faceService->detectFaceToken($tempPath);

            if (!$faceToken) {
                $this->addFlash('danger', 'No face detected.');
                return $this->redirectToRoute('app_profile');
            }

            $user->setFaceToken($faceToken);
            $user->setFaceEnabled(true);
            $user->setFaceEnrolledAt(new \DateTime());
            $user->setDateModification(new \DateTime());

            $entityManager->flush();

            $this->addFlash('success', 'Face ID enrolled successfully.');
            return $this->redirectToRoute('app_profile');
        } catch (\RuntimeException $e) {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('app_profile');
        } finally {
            if (is_file($tempPath)) {
                @unlink($tempPath);
            }
        }
    }

    #[Route('/profile/face/disable', name: 'app_profile_face_disable', methods: ['POST'])]
    public function disableFace(
        EntityManagerInterface $entityManager
    ): Response {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_front_login');
        }

        $user->setFaceToken(null);
        $user->setFaceEnabled(false);
        $user->setFaceEnrolledAt(null);
        $user->setDateModification(new \DateTime());

        $entityManager->flush();

        $this->addFlash('success', 'Face ID disabled successfully.');
        return $this->redirectToRoute('app_profile');
    }
}