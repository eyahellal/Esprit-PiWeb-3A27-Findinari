<?php

namespace App\Controller;

use App\Entity\user\Utilisateur;
use App\Form\UpdatePasswordType;
use App\Form\UpdateProfileType;
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
}