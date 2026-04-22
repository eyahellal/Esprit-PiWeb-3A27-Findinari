<?php

namespace App\Controller\Api;

use App\Repository\InvestissementobligationRepository;
use App\Repository\ObligationRepository;
use App\Service\PdfGeneratorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class ContractApiController extends AbstractController
{
    #[Route('/investment/contract/{id}', name: 'api_investment_contract', methods: ['GET'])]
    public function generateContract(
        int $id,
        InvestissementobligationRepository $investmentRepository,
        ObligationRepository $obligationRepository,
        PdfGeneratorService $pdfGenerator
    ): Response {
        $investment = $investmentRepository->find($id);
        
        if (!$investment) {
            return $this->json(['error' => 'Investment not found'], 404);
        }
        
        $obligation = $obligationRepository->find($investment->getObligationId());
        
        $filePath = $pdfGenerator->generateInvoice($investment, $obligation);
        
        if (!$filePath || !file_exists($filePath)) {
            return $this->json(['error' => 'Failed to generate PDF'], 500);
        }
        
        $pdfContent = file_get_contents($filePath);
        
        // Delete file after sending
        @unlink($filePath);
        
        $filename = sprintf('Investment_Invoice_%d_%s.pdf', 
            $investment->getIdInvestissement(), 
            date('Ymd_His')
        );
        
        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}