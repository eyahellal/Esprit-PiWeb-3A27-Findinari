<?php

namespace App\Service;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use TCPDF;
use DateTime;

class PdfGeneratorService
{
    private string $invoiceFolder;
    
    public function __construct(string $projectDir)
    {
        $this->invoiceFolder = $projectDir . '/public/invoices/';
        
        // Create the invoices folder if it doesn't exist
        if (!is_dir($this->invoiceFolder)) {
            mkdir($this->invoiceFolder, 0777, true);
        }
    }
    
    /**
     * Generates a PDF invoice for an investment
     * @param Investissementobligation $investment The investment
     * @param Obligation|null $obligation The associated loan type
     * @return string The path of the generated PDF file
     */
    public function generateInvoice(Investissementobligation $investment, ?Obligation $obligation): string
    {
        $dateStr = (new DateTime())->format('Ymd');
        $uniqueId = uniqid();
        $fileName = sprintf('invoice_%s_%s.pdf', $dateStr, $uniqueId);
        $filePath = $this->invoiceFolder . $fileName;
        
        // Create PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
        // Set document information
        $pdf->SetCreator('Fin-Dinari');
        $pdf->SetAuthor('Fin-Dinari');
        $pdf->SetTitle('Investment Invoice');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        
        // Add a page
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 11);
        
        // ===== HEADER =====
        $html = '
        <style>
            .header { text-align: center; margin-bottom: 20px; }
            .title-main { font-size: 24px; font-weight: bold; color: #2d6a4f; }
            .title-sub { font-size: 16px; color: #4b6b4b; }
            .info-box { text-align: right; margin-bottom: 20px; }
            .section-title { font-size: 14px; font-weight: bold; background: #f0f0f0; padding: 5px; margin-top: 15px; margin-bottom: 10px; }
            table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
            td { padding: 6px; border-bottom: 1px solid #ddd; }
            .label { font-weight: bold; width: 35%; color: #2d6a4f; }
            .signature { margin-top: 30px; width: 100%; }
            .sign-left { float: left; width: 45%; text-align: center; }
            .sign-right { float: right; width: 45%; text-align: center; }
            .sign-line { border-top: 1px solid #000; margin-top: 35px; padding-top: 5px; }
            .clearfix { clear: both; }
            .footer { text-align: center; margin-top: 30px; font-size: 10px; color: #999; border-top: 1px solid #ddd; padding-top: 10px; }
            .thanks { text-align: center; font-size: 12px; margin-top: 20px; color: #2d6a4f; font-weight: bold; }
            .amount { font-size: 14px; font-weight: bold; color: #b45309; }
            .interest { color: #059669; }
        </style>
        
        <div class="header">
            <div class="title-main"> FIN-DINARI</div>
            <div class="title-sub">Investment Invoice</div>
        </div>';
        
        // ===== INVOICE NUMBER AND DATE =====
        $invoiceNumber = 'INV-' . $dateStr . '-' . rand(1000, 9999);
        $currentDate = (new DateTime())->format('d/m/Y H:i');
        
        $html .= '
        <div class="info-box">
            <strong>Invoice N° :</strong> ' . $invoiceNumber . '<br>
            <strong>Date :</strong> ' . $currentDate . '
        </div>';
        
        // ===== INVESTMENT DETAILS =====
        $amount = $investment->getMontantInvesti();
        $rate = $obligation ? $obligation->getTauxInteret() : 0;
        $durationDays = $investment->getDateAchat()->diff($investment->getDateMaturite())->days;
        $interest = $amount * ($rate / 100) * ($durationDays / 365);
        $total = $amount + $interest;
        
        $loanType = $obligation ? $obligation->getNom() : 'N/A';
        $startDate = $investment->getDateAchat()->format('d/m/Y');
        $endDate = $investment->getDateMaturite()->format('d/m/Y');
        
        $html .= '
        <div class="section-title">INVESTMENT DETAILS</div>
        
        <table>
            <tr><td class="label">Loan Type:</td><td>' . htmlspecialchars($loanType) . '</td></tr>
            <tr><td class="label">Interest Rate:</td><td>' . number_format($rate, 2) . ' %</td></tr>
            <tr><td class="label">Invested Amount:</td><td>' . number_format($amount, 2) . ' DT</td></tr>
            <tr><td class="label">Start Date:</td><td>' . $startDate . '</td></tr>
            <tr><td class="label">End Date:</td><td>' . $endDate . '</td></tr>
            <tr><td class="label">Duration:</td><td>' . $durationDays . ' days</td></tr>
        </table>';
        
        // ===== FINANCIAL SUMMARY =====
        $html .= '
        <div class="section-title">FINANCIAL SUMMARY</div>
        
        <table>
            <tr><td class="label">Invested amount:</td><td>' . number_format($amount, 2) . ' DT</td></tr>
            <tr><td class="label">Calculated interest:</td><td class="interest">' . number_format($interest, 2) . ' DT</td></tr>
            <tr style="background:#e8f5e9;"><td class="amount">TOTAL TO REPAY:</td><td class="amount">' . number_format($total, 2) . ' DT</td></tr>
        </table>';
        
        // ===== SIGNATURES =====
        $signDate = (new DateTime())->format('d/m/Y');
        
        $html .= '
        <div class="signature">
            <div class="sign-left">
                <div class="sign-line">_________________________</div>
                <p><strong>LENDER SIGNATURE</strong></p>
                <p>Name: ____________________</p>
                <p>Date: ' . $signDate . '</p>
            </div>
            <div class="sign-right">
                <div class="sign-line">_________________________</div>
                <p><strong>BORROWER SIGNATURE</strong></p>
                <p>Name: ____________________</p>
                <p>Date: ' . $signDate . '</p>
            </div>
            <div class="clearfix"></div>
        </div>';
        
        // ===== FOOTER =====
        $html .= '
        <div class="thanks">
            Thank you for your trust.<br>
            Fin-Dinari - Your financial partner
        </div>
        
        <div class="footer">
             Fin-Dinari
        </div>';
        
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // Save the PDF to file
        $pdf->Output($filePath, 'F');
        
        return $filePath;
    }
}