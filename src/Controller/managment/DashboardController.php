<?php

namespace App\Controller\managment;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/management', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_wallet_index');
    }
}