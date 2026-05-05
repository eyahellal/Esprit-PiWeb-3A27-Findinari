<?php

namespace App\Controller\advancedfeature;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\management\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Smalot\PdfParser\Parser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/investment/pdf')]
class PdfUploadController extends AbstractController
{
    #[Route('/upload', name: 'app_investment_pdf_upload', methods: ['GET', 'POST'])]
    public function uploadPdf(
        Request $request,
        EntityManagerInterface $entityManager,
        WalletRepository $walletRepository,
        ObligationRepository $obligationRepository,
        SimpleNotificationService $notificationService
    ): Response {
        $user = $this->getUser();
       
        if (!$user instanceof Utilisateur) {
            return $this->redirectToRoute('app_front_login');
        }
       
        $error = null;
       
        // Handle direct file upload (without Symfony form)
        if ($request->isMethod('POST')) {
            $uploadedFile = $request->files->get('pdf_file');
           
            if ($uploadedFile && $uploadedFile->getMimeType() === 'application/pdf') {
                try {
                    // Parse PDF
                    $parser = new Parser();
                    $pdf = $parser->parseFile($uploadedFile->getPathname());
                    $text = $pdf->getText();
                   
                    // Extract data from PDF text
                    $extractedData = $this->extractInvestmentData($text);
                   
                    if ($extractedData !== null && isset($extractedData['amount'], $extractedData['obligationName'])) {
                        // Try to find matching obligation
                        $obligation = $obligationRepository->findOneBy([
                            'nom' => $extractedData['obligationName']
                        ]);
                       
                        if (!$obligation instanceof Obligation) {
                            // Try fuzzy search
                            $obligations = $obligationRepository->findAll();
                            $bestMatch = null;
                            $bestScore = 0;
                           
                            foreach ($obligations as $ob) {
                                $obName = $ob->getNom();
                                if ($obName !== null) {
                                    $score = similar_text(
                                        strtolower($obName),
                                        strtolower((string)$extractedData['obligationName'])
                                    );
                                    if ($score > $bestScore && $score > 50) {
                                        $bestScore = $score;
                                        $bestMatch = $ob;
                                    }
                                }
                            }
                            $obligation = $bestMatch;
                        }
                       
                        $extractedData['obligation'] = $obligation;
                        $extractedData['foundObligation'] = $obligation instanceof Obligation;
                       
                        // Get user wallets
                        $wallets = $walletRepository->findBy(['utilisateur' => $user]);
                        $extractedData['wallets'] = $wallets;
                       
                        // Get all obligations for dropdown
                        $allObligations = $obligationRepository->findAll();
                        $extractedData['obligations'] = $allObligations;
                       
                        // Store extracted data in session for confirmation
                        $request->getSession()->set('pdf_extracted_data', $extractedData);
                       
                        // Redirect to show confirmation
                        return $this->redirectToRoute('app_investment_pdf_upload');
                       
                    } else {
                        $error = 'Could not extract required information from PDF. Please ensure it contains: Amount, Obligation Name.';
                    }
                   
                } catch (\Exception $e) {
                    $error = 'Failed to parse PDF: ' . $e->getMessage();
                }
            } else {
                $error = 'Please upload a valid PDF file.';
            }
        }
       
        // Check if we have confirmation data
        $confirmData = $request->getSession()->get('pdf_extracted_data');
       
        if ($request->query->get('confirm') === 'yes' && is_array($confirmData)) {
            // Create investment
            $walletId = $request->query->get('walletId');
            $obligationId = $request->query->get('obligationId');
           
            $wallet = $walletRepository->find($walletId);
            $obligation = $obligationRepository->find($obligationId);
           
            if ($wallet instanceof Wallet && $obligation instanceof Obligation) {
                $amount = $confirmData['amount'] ?? 0;
                $dateAchatStr = $confirmData['dateAchat'] ?? null;
                $dateMaturiteStr = $confirmData['dateMaturite'] ?? null;
               
                $investment = new Investissementobligation();
                // Convert wallet ID to string as expected by setWalletId
                $investment->setWalletId((string)$wallet->getId());
                $investment->setObligationId($obligation->getIdObligation());
                $investment->setMontantInvesti((float)$amount);
               
                // Parse dates
                $dateAchat = null;
                if ($dateAchatStr !== null && is_string($dateAchatStr)) {
                    $dateAchat = \DateTime::createFromFormat('d/m/Y', $dateAchatStr);
                }
               
                if ($dateAchat instanceof \DateTime) {
                    $investment->setDateAchat($dateAchat);
                } else {
                    $investment->setDateAchat(new \DateTime());
                }
               
                $dateMaturite = null;
                if ($dateMaturiteStr !== null && is_string($dateMaturiteStr)) {
                    $dateMaturite = \DateTime::createFromFormat('d/m/Y', $dateMaturiteStr);
                }
               
                if ($dateMaturite instanceof \DateTime) {
                    $investment->setDateMaturite($dateMaturite);
                } else {
                    // Calculate based on duration
                    $durationMonths = $obligation->getDuree();
                    $startDate = $investment->getDateAchat();
                    if ($startDate instanceof \DateTime) {
                        $maturityDate = clone $startDate;
                        $maturityDate->modify("+{$durationMonths} months");
                        $investment->setDateMaturite($maturityDate);
                    } else {
                        $investment->setDateMaturite(new \DateTime());
                    }
                }
               
                $entityManager->persist($investment);
                $entityManager->flush();
               
                $notificationService->addNotification(
                    '📄 Investment Imported from PDF',
                    sprintf('Investment of %s DT in %s was imported from PDF', number_format((float)$amount, 2), $obligation->getNom() ?? 'Unknown'),
                    'success'
                );
               
                $request->getSession()->remove('pdf_extracted_data');
                $this->addFlash('success', 'Investment successfully imported from PDF!');
                return $this->redirectToRoute('app_investment_index');
            } else {
                $this->addFlash('danger', 'Invalid wallet or obligation selected.');
                $request->getSession()->remove('pdf_extracted_data');
                return $this->redirectToRoute('app_investment_pdf_upload');
            }
        }
       
        return $this->render('loan/investment/pdf_upload.html.twig', [
            'error' => $error,
            'confirmData' => $confirmData,
            'wallets' => is_array($confirmData) ? ($confirmData['wallets'] ?? []) : [],
            'obligations' => is_array($confirmData) ? ($confirmData['obligations'] ?? []) : [],
        ]);
    }
   
    /**
     * Extrait les données d'investissement à partir du texte PDF
     *
     * @param string $text Le texte extrait du PDF
     * @return array{
     *     amount?: float,
     *     obligationName?: string,
     *     interestRate?: float,
     *     dateAchat?: string,
     *     dateMaturite?: string,
     *     duration?: int
     * }|null
     */
    private function extractInvestmentData(string $text): ?array
    {
        $data = [
            'amount' => null,
            'obligationName' => null,
            'interestRate' => null,
            'dateAchat' => null,
            'dateMaturite' => null,
            'duration' => null,
        ];
       
        // Extract Amount (DT, TND, Dinar)
        preg_match('/(\d+(?:[.,]\d+)?)\s*(?:DT|TND|Dinar|Dinars?)/i', $text, $amountMatch);
        if (!empty($amountMatch)) {
            $data['amount'] = (float)str_replace(',', '.', $amountMatch[1]);
        } else {
            // Try to find any number with "amount" or "invested"
            preg_match('/(?:Amount|Invested|Montant|Investi)[:\s]*(\d+(?:[.,]\d+)?)/i', $text, $amountMatch2);
            if (!empty($amountMatch2)) {
                $data['amount'] = (float)str_replace(',', '.', $amountMatch2[1]);
            }
        }
       
        // Extract Obligation Name
        $obligationPatterns = [
            '/Obligation[:\s]+([A-Za-z0-9\s]+)/i',
            '/Loan Type[:\s]+([A-Za-z0-9\s]+)/i',
            '/Investment in[:\s]+([A-Za-z0-9\s]+)/i',
            '/Bond[:\s]+([A-Za-z0-9\s]+)/i',
        ];
       
        foreach ($obligationPatterns as $pattern) {
            preg_match($pattern, $text, $obligationMatch);
            if (!empty($obligationMatch)) {
                $data['obligationName'] = trim($obligationMatch[1]);
                break;
            }
        }
       
        // Extract Interest Rate
        preg_match('/(\d+(?:[.,]\d+)?)\s*%/i', $text, $rateMatch);
        if (!empty($rateMatch)) {
            $data['interestRate'] = (float)str_replace(',', '.', $rateMatch[1]);
        }
       
        // Extract Dates
        preg_match('/(\d{2}[\/\-]\d{2}[\/\-]\d{4})/', $text, $dateMatch);
        if (!empty($dateMatch)) {
            $data['dateAchat'] = $dateMatch[1];
        }
       
        preg_match('/(?:Maturity|End Date|Matures)[:\s]*(\d{2}[\/\-]\d{2}[\/\-]\d{4})/i', $text, $maturityMatch);
        if (!empty($maturityMatch)) {
            $data['dateMaturite'] = $maturityMatch[1];
        } elseif (!empty($dateMatch)) {
            $data['dateMaturite'] = $dateMatch[1];
        }
       
        // Extract Duration
        preg_match('/(\d+)\s*(?:months|month|mois)/i', $text, $durationMatch);
        if (!empty($durationMatch)) {
            $data['duration'] = (int)$durationMatch[1];
        }
       
        // Return only if amount and obligationName are found
        if ($data['amount'] !== null && $data['obligationName'] !== null) {
            // Retourner seulement les valeurs non-null
            return array_filter($data, fn($value) => $value !== null);
        }
       
        return null;
    }
}