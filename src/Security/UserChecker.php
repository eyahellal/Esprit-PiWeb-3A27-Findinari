<?php

namespace App\Security;

use App\Entity\user\Utilisateur;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof Utilisateur) {
            return;
        }

        if ($user->getStatut() === 'INACTIF') {
            throw new CustomUserMessageAccountStatusException('Please activate your account first.');
        }

        if ($user->getStatut() === 'BLOQUE') {
            throw new CustomUserMessageAccountStatusException('Your account is blocked.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
    }
}