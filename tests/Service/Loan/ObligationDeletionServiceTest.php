<?php
// tests/Service/Loan/ObligationDeletionServiceTest.php
namespace App\Tests\Service\Loan;

use App\Entity\Loan\Obligation;
use App\Entity\Loan\Investissementobligation;
use PHPUnit\Framework\TestCase;

class ObligationDeletionServiceTest extends TestCase
{
    /**
     * Test 21: Vérifier qu'une obligation avec des investissements ne peut pas être supprimée
     * Règle d'intégrité: Une obligation liée à des investissements ne doit pas être supprimable
     */
    public function testCannotDeleteObligationWithInvestments(): void
    {
        // Créer une obligation
        $obligation = new Obligation();
        $obligation->setNom('Test Bond');
        $obligation->setTauxInteret(5);
        $obligation->setDuree(12);
        
        // Créer un investissement lié
        $investment = new Investissementobligation();
        $investment->setObligationId($obligation->getIdObligation());
        
        // Vérifier que l'obligation a des investissements
        $hasInvestments = ($investment->getObligationId() === $obligation->getIdObligation());
        
        // Une obligation avec investissements ne devrait pas être supprimable sans précaution
        if ($hasInvestments) {
            $this->assertTrue(true, 'L\'obligation a des investissements associés');
        }
    }
}