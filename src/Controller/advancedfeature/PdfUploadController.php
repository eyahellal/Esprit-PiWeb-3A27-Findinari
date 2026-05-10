<?php

namespace App\Controller\advancedfeature;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Entity\Loan\Wallet;
use App\Entity\user\Utilisateur;
use App\Repository\ObligationRepository;
use App\Repository\WalletRepository;
use App\Service\SimpleNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Smalot\PdfParser\Parser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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

        if ($request->isMethod('POST')) {
            $uploadedFile = $request->files->get('pdf_file');

            if ($uploadedFile instanceof UploadedFile && $uploadedFile->getMimeType() === 'application/pdf') {
                try {
                    $parser = new Parser();
                    $pdf = $parser->parseFile($uploadedFile->getPathname());
                    $text = $pdf->getText();

                    $extractedData = $this->extractInvestmentData($text);

                    if ($extractedData !== null && isset($extractedData['amount'], $extractedData['obligationName'])) {
                        $obligation = $obligationRepository->findOneBy([
                            'nom' => $extractedData['obligationName'],
                        ]);

                        if (!$obligation instanceof Obligation) {
                            $bestMatch = null;
                            $bestScore = 0;

                            foreach ($obligationRepository->findAll() as $ob) {
                                $obName = $ob->getNom();

                                if ($obName !== null) {
                                    $score = similar_text(
                                        strtolower($obName),
                                        strtolower((string) $extractedData['obligationName'])
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
                        $extractedData['wallets'] = $walletRepository->findBy(['utilisateur' => $user]);
                        $extractedData['obligations'] = $obligationRepository->findAll();

                        $request->getSession()->set('pdf_extracted_data', $extractedData);

                        return $this->redirectToRoute('app_investment_pdf_upload');
                    }

                    $error = 'Could not extract required information from PDF.';
                } catch (\Throwable $e) {
                    $error = 'Failed to parse PDF: ' . $e->getMessage();
                }
            } else {
                $error = 'Please upload a valid PDF file.';
            }
        }

        $confirmData = $request->getSession()->get('pdf_extracted_data');

        if ($request->query->get('confirm') === 'yes' && is_array($confirmData)) {
            $walletId = $request->query->get('walletId');
            $obligationId = $request->query->get('obligationId');

            $wallet = $walletRepository->find($walletId);
            $obligation = $obligationRepository->find($obligationId);

            if ($wallet instanceof Wallet && $obligation instanceof Obligation) {
                $amount = (float) ($confirmData['amount'] ?? 0);
                $dateAchatStr = $confirmData['dateAchat'] ?? null;
                $dateMaturiteStr = $confirmData['dateMaturite'] ?? null;

                $investment = new Investissementobligation();
                $investment->setWalletId((string) $wallet->getId());
                $investment->setObligationId($obligation->getIdObligation());
                $investment->setMontantInvesti($amount);

                $dateAchat = is_string($dateAchatStr)
                    ? \DateTime::createFromFormat('d/m/Y', $dateAchatStr)
                    : false;

                $investment->setDateAchat(
                    $dateAchat instanceof \DateTimeInterface ? $dateAchat : new \DateTime()
                );

                $dateMaturite = is_string($dateMaturiteStr)
                    ? \DateTime::createFromFormat('d/m/Y', $dateMaturiteStr)
                    : false;

                if ($dateMaturite instanceof \DateTimeInterface) {
                    $investment->setDateMaturite($dateMaturite);
                } else {
                    $startDate = $investment->getDateAchat();

                    if (!$startDate instanceof \DateTimeInterface) {
                        $startDate = new \DateTime();
                    }

                    $maturityDate = \DateTimeImmutable::createFromInterface($startDate)
                        ->modify('+' . $obligation->getDuree() . ' months');

                    $investment->setDateMaturite($maturityDate);
                }

                $entityManager->persist($investment);
                $entityManager->flush();

                $notificationService->addNotification(
                    '📄 Investment Imported from PDF',
                    sprintf(
                        'Investment of %s DT in %s was imported from PDF',
                        number_format($amount, 2),
                        $obligation->getNom() ?? 'Unknown'
                    ),
                    'success'
                );

                $request->getSession()->remove('pdf_extracted_data');
                $this->addFlash('success', 'Investment successfully imported from PDF!');

                return $this->redirectToRoute('app_investment_index');
            }

            $this->addFlash('danger', 'Invalid wallet or obligation selected.');
            $request->getSession()->remove('pdf_extracted_data');

            return $this->redirectToRoute('app_investment_pdf_upload');
        }

        return $this->render('loan/investment/pdf_upload.html.twig', [
            'error' => $error,
            'confirmData' => $confirmData,
            'wallets' => is_array($confirmData) ? ($confirmData['wallets'] ?? []) : [],
            'obligations' => is_array($confirmData) ? ($confirmData['obligations'] ?? []) : [],
        ]);
    }

    /**
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

        preg_match('/(\d+(?:[.,]\d+)?)\s*(?:DT|TND|Dinar|Dinars?)/i', $text, $amountMatch);

        if ($amountMatch !== []) {
            $data['amount'] = (float) str_replace(',', '.', $amountMatch[1]);
        }

        foreach ([
            '/Obligation[:\s]+([A-Za-z0-9\s]+)/i',
            '/Loan Type[:\s]+([A-Za-z0-9\s]+)/i',
            '/Investment in[:\s]+([A-Za-z0-9\s]+)/i',
            '/Bond[:\s]+([A-Za-z0-9\s]+)/i',
        ] as $pattern) {
            preg_match($pattern, $text, $match);

            if ($match !== []) {
                $data['obligationName'] = trim($match[1]);
                break;
            }
        }

        preg_match('/(\d+(?:[.,]\d+)?)\s*%/i', $text, $rateMatch);

        if ($rateMatch !== []) {
            $data['interestRate'] = (float) str_replace(',', '.', $rateMatch[1]);
        }

        preg_match('/(\d{2}[\/\-]\d{2}[\/\-]\d{4})/', $text, $dateMatch);

        if ($dateMatch !== []) {
            $data['dateAchat'] = $dateMatch[1];
        }

        preg_match('/(?:Maturity|End Date|Matures)[:\s]*(\d{2}[\/\-]\d{2}[\/\-]\d{4})/i', $text, $maturityMatch);

        if ($maturityMatch !== []) {
            $data['dateMaturite'] = $maturityMatch[1];
        }

        preg_match('/(\d+)\s*(?:months|month|mois)/i', $text, $durationMatch);

        if ($durationMatch !== []) {
            $data['duration'] = (int) $durationMatch[1];
        }

        if ($data['amount'] !== null && $data['obligationName'] !== null) {
            return array_filter($data, static fn ($value): bool => $value !== null);
        }

        return null;
    }
}
