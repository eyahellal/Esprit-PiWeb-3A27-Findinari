<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/how-it-works', name: 'app_how_it_works')]
    public function howItWorks(): Response
    {
        return $this->render('home/how-it-works.html.twig');
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('home/services.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }

    #[Route('/support', name: 'support_center')]
    public function support(): Response
    {
        return $this->render('reclamation/support_center.html.twig');
    }

    #[Route('/service/{id}', name: 'app_service_details')]
    public function serviceDetails(int $id = 1): Response|RedirectResponse
    {
        if ($id === 4) {
            return $this->redirectToRoute('community_index');
        }

        $services = [
            1 => [
                'name' => 'Budget Management',
                'description' => 'Track your income and expenses with AI-powered categorization'
            ],
            2 => [
                'name' => 'Loan Investment',
                'description' => 'Lend money, get receipts, earn returns after fixed period'
            ],
            3 => [
                'name' => 'Objective Management',
                'description' => 'Set financial goals and track progress with AI insights'
            ],
            4 => [
                'name' => 'Community',
                'description' => 'Connect with investors and learn from billionaires'
            ],
        ];

        if (!isset($services[$id])) {
            $id = 1;
        }

        return $this->render('home/service-details.html.twig', [
            'id' => $id,
            'service' => $services[$id]
        ]);
    }

    #[Route('/financial-news', name: 'app_financial_news')]
    public function financialNews(): Response
    {
        return $this->render('home/financial_news.html.twig');
    }

    #[Route('/crypto-prices', name: 'app_crypto_prices')]
    public function cryptoPrices(): Response
    {
        return $this->render('home/crypto_prices.html.twig');
    }
    #[Route('/investment/pdf-upload', name: 'app_investment_pdf_upload')]
    public function pdfUpload(): Response
    {
        return $this->redirectToRoute('app_investment_pdf_upload');
    }
}