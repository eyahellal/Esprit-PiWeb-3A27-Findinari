<?php
// tests/Service/Loan/PdfGeneratorServiceTest.php (version corrigée)
namespace App\Tests\Service\Loan;

use App\Entity\Loan\Investissementobligation;
use App\Entity\Loan\Obligation;
use App\Service\PdfGeneratorService;
use PHPUnit\Framework\TestCase;
use DateTime;

class PdfGeneratorServiceTest extends TestCase
{
    private string $testProjectDir;
    private string $testInvoiceFolder;
    private PdfGeneratorService $pdfGenerator;
    private Investissementobligation $investment;
    private Obligation $obligation;
    
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->testProjectDir = sys_get_temp_dir() . '/findinari_test_' . uniqid();
        $this->testInvoiceFolder = $this->testProjectDir . '/public/invoices/';
        $this->pdfGenerator = new PdfGeneratorService($this->testProjectDir);
        
        $this->obligation = new Obligation();
        $this->obligation->setNom('Obligation Test');
        $this->obligation->setTauxInteret(8.5);
        $this->obligation->setDuree(24);
        
        $this->investment = new Investissementobligation();
        $this->investment->setMontantInvesti(5000);
        $this->investment->setDateAchat(new DateTime('2024-01-01'));
        $this->investment->setDateMaturite(new DateTime('2025-01-01'));
        $this->investment->setObligationId(1);
    }
    
    protected function tearDown(): void
    {
        parent::tearDown();
        
        if (is_dir($this->testInvoiceFolder)) {
            $files = glob($this->testInvoiceFolder . '*.pdf');
            foreach ($files as $file) {
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            @rmdir($this->testInvoiceFolder);
            @rmdir(dirname($this->testInvoiceFolder));
            @rmdir($this->testProjectDir);
        }
    }
    
    public function testGenerateInvoiceReturnsFilePath(): void
    {
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        
        $this->assertIsString($filePath);
        $this->assertFileExists($filePath);
        $this->assertStringEndsWith('.pdf', $filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testGeneratedFileNameFormat(): void
    {
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        $fileName = basename($filePath);
        
        $this->assertMatchesRegularExpression('/^invoice_\d{8}_[a-f0-9]+\.pdf$/', $fileName);
    }
    
    public function testInvoiceFolderIsCreated(): void
    {
        $this->assertDirectoryExists($this->testInvoiceFolder);
    }
    
    public function testGenerateInvoiceWithoutObligation(): void
    {
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, null);
        
        $this->assertFileExists($filePath);
        $this->assertStringEndsWith('.pdf', $filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testGenerateMultipleInvoices(): void
    {
        $filePath1 = $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        $filePath2 = $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        $filePath3 = $this->pdfGenerator->generateInvoice($this->investment, null);
        
        $this->assertFileExists($filePath1);
        $this->assertFileExists($filePath2);
        $this->assertFileExists($filePath3);
        $this->assertNotEquals($filePath1, $filePath2);
        $this->assertNotEquals($filePath1, $filePath3);
        $this->assertNotEquals($filePath2, $filePath3);
    }
    
    public function testValidPdfFormat(): void
    {
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        
        $handle = fopen($filePath, 'r');
        $header = fread($handle, 4);
        fclose($handle);
        
        $this->assertEquals('%PDF', $header);
    }
    
    public function testPdfFileSize(): void
    {
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        $fileSize = filesize($filePath);
        
        $this->assertGreaterThan(5000, $fileSize);
        $this->assertLessThan(200000, $fileSize);
    }
    
    public function testGenerationTime(): void
    {
        $startTime = microtime(true);
        $this->pdfGenerator->generateInvoice($this->investment, $this->obligation);
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
        $this->assertLessThan(5, $executionTime);
    }
    
    public function testZeroAmountInvestment(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(0);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $filePath = $this->pdfGenerator->generateInvoice($investment, $this->obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testVeryLargeAmount(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(999999999.99);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $filePath = $this->pdfGenerator->generateInvoice($investment, $this->obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testVeryLowInterestRate(): void
    {
        $obligation = new Obligation();
        $obligation->setNom('Low Interest Bond');
        $obligation->setTauxInteret(0.5);
        $obligation->setDuree(12);
        
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testVeryHighInterestRate(): void
    {
        $obligation = new Obligation();
        $obligation->setNom('High Interest Bond');
        $obligation->setTauxInteret(25);
        $obligation->setDuree(12);
        
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testShortDurationInvestment(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat(new DateTime('2024-01-01'));
        $investment->setDateMaturite(new DateTime('2024-04-01'));
        
        $filePath = $this->pdfGenerator->generateInvoice($investment, $this->obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testLongDurationInvestment(): void
    {
        $investment = new Investissementobligation();
        $investment->setMontantInvesti(5000);
        $investment->setDateAchat(new DateTime('2020-01-01'));
        $investment->setDateMaturite(new DateTime('2025-01-01'));
        
        $filePath = $this->pdfGenerator->generateInvoice($investment, $this->obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    public function testHtmlSpecialCharsAreHandled(): void
    {
        $obligation = new Obligation();
        $obligation->setNom('Test & Bond <script>');
        $obligation->setTauxInteret(5);
        $obligation->setDuree(12);
        
        $filePath = $this->pdfGenerator->generateInvoice($this->investment, $obligation);
        
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }
    
    // Test corrigé - compare les chemins et le contenu, pas seulement la taille
    public function testDifferentInvestmentsProduceDifferentFiles(): void
    {
        $investment1 = new Investissementobligation();
        $investment1->setMontantInvesti(1000);
        $investment1->setDateAchat(new DateTime('2024-01-01'));
        $investment1->setDateMaturite(new DateTime('2025-01-01'));
        
        $investment2 = new Investissementobligation();
        $investment2->setMontantInvesti(5000);
        $investment2->setDateAchat(new DateTime('2024-01-01'));
        $investment2->setDateMaturite(new DateTime('2025-01-01'));
        
        $filePath1 = $this->pdfGenerator->generateInvoice($investment1, $this->obligation);
        $filePath2 = $this->pdfGenerator->generateInvoice($investment2, $this->obligation);
        
        $this->assertFileExists($filePath1);
        $this->assertFileExists($filePath2);
        
        // Les chemins des fichiers doivent être différents
        $this->assertNotEquals($filePath1, $filePath2);
        
        // Le contenu des fichiers doit être différent (meilleur test que la taille)
        $content1 = file_get_contents($filePath1);
        $content2 = file_get_contents($filePath2);
        $this->assertNotEquals($content1, $content2);
        
        // Nettoyage
        if (file_exists($filePath1)) {
            unlink($filePath1);
        }
        if (file_exists($filePath2)) {
            unlink($filePath2);
        }
    }
}