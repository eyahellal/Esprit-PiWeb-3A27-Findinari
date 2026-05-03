<?php

namespace App\Tests\Services;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Service\PdfGeneratorService;
use PHPUnit\Framework\TestCase;

class PdfGeneratorServiceTest extends TestCase
{
    public function testGenerateInvoiceCreatesPdfFile(): void
    {
        $projectDir = sys_get_temp_dir() . '/fin_dinari_test_' . uniqid();
        mkdir($projectDir . '/public', 0777, true);

        $investment = new Investissementobligation();
        $investment->setMontantInvesti(1000);
        $investment->setDateAchat(new \DateTime('2026-01-01'));
        $investment->setDateMaturite(new \DateTime('2026-04-01'));

        $obligation = new Obligation();
        $obligation->setNom('Test Obligation');
        $obligation->setTauxInteret(10);

        $service = new PdfGeneratorService($projectDir);

        $pdfPath = $service->generateInvoice($investment, $obligation);

        $this->assertFileExists($pdfPath);
        $this->assertStringEndsWith('.pdf', $pdfPath);
        $this->assertGreaterThan(0, filesize($pdfPath));

        unlink($pdfPath);
        rmdir($projectDir . '/public/invoices');
        rmdir($projectDir . '/public');
        rmdir($projectDir);
    }

    public function testGenerateInvoiceWorksWithoutObligation(): void
    {
        $projectDir = sys_get_temp_dir() . '/fin_dinari_test_' . uniqid();
        mkdir($projectDir . '/public', 0777, true);

        $investment = new Investissementobligation();
        $investment->setMontantInvesti(500);
        $investment->setDateAchat(new \DateTime('2026-01-01'));
        $investment->setDateMaturite(new \DateTime('2026-02-01'));

        $service = new PdfGeneratorService($projectDir);

        $pdfPath = $service->generateInvoice($investment, null);

        $this->assertFileExists($pdfPath);
        $this->assertStringEndsWith('.pdf', $pdfPath);

        unlink($pdfPath);
        rmdir($projectDir . '/public/invoices');
        rmdir($projectDir . '/public');
        rmdir($projectDir);
    }
}