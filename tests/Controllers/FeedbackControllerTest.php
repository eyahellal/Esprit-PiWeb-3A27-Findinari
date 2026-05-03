<?php

namespace App\Tests\Controllers;

use App\Entity\user\Feedback;
use App\Entity\user\Utilisateur;
use PHPUnit\Framework\TestCase;

class FeedbackControllerTest extends TestCase
{
    public function testUserCanEditOwnFeedback(): void
    {
        $user = new Utilisateur();
        $user->setGmail('user@gmail.com');

        $feedback = new Feedback();
        $feedback->setUserEmail('user@gmail.com');

        $this->assertSame($user->getGmail(), $feedback->getUserEmail());
    }

    public function testUserCannotEditOtherUserFeedback(): void
    {
        $user = new Utilisateur();
        $user->setGmail('user@gmail.com');

        $feedback = new Feedback();
        $feedback->setUserEmail('other@gmail.com');

        $this->assertNotSame($user->getGmail(), $feedback->getUserEmail());
    }
}