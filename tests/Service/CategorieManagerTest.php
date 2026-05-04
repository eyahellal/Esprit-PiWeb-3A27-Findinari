<?php

namespace App\Tests\Service;

use App\Entity\management\Categorie;
use App\Service\Management\CategorieManager;
use PHPUnit\Framework\TestCase;

class CategorieManagerTest extends TestCase
{
    private CategorieManager $manager;
    private Categorie $validCategorie;

    protected function setUp(): void
    {
        $this->manager = new CategorieManager();

        $this->validCategorie = new Categorie();
        $this->validCategorie->setNom('Food');
        $this->validCategorie->setDescription('Food expenses');
        $this->validCategorie->setStatut('Active');
        $this->validCategorie->setColor('#F27438');
        $this->validCategorie->setIcon('fa-utensils');
    }

    // ===================================
    // TESTS — validate()
    // ===================================

    // ✅ Test 1 — Valid categorie passes validation
    public function testValidCategoriePassesValidation(): void
    {
        $this->assertTrue($this->manager->validate($this->validCategorie));
    }

    // ===================================
    // TESTS — validateNom()
    // ===================================

    // ❌ Test 2 — Empty name throws exception
    public function testEmptyNomThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Category name is required.');

        $categorie = new Categorie();
        $categorie->setNom('');

        $this->manager->validateNom($categorie);
    }

    // ❌ Test 3 — Name too short throws exception
    public function testNomTooShortThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Name must be at least 2 characters.');

        $categorie = new Categorie();
        $categorie->setNom('F');

        $this->manager->validateNom($categorie);
    }

    // ❌ Test 4 — Name too long throws exception
    public function testNomTooLongThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Name cannot exceed 50 characters.');

        $categorie = new Categorie();
        $categorie->setNom(str_repeat('A', 51));

        $this->manager->validateNom($categorie);
    }

    // ✅ Test 5 — Valid name passes
    public function testValidNomPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setNom('Food');
        $this->assertTrue($this->manager->validateNom($categorie));
    }

    // ✅ Test 6 — Minimum name length passes
    public function testMinimumNomLengthPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setNom('Fo');
        $this->assertTrue($this->manager->validateNom($categorie));
    }

    // ===================================
    // TESTS — validateNomFormat()
    // ===================================

    // ❌ Test 7 — Special characters throw exception
    public function testSpecialCharactersThrowException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Name must contain only letters, numbers, and spaces.'
        );

        $categorie = new Categorie();
        $categorie->setNom('Food@#$');

        $this->manager->validateNomFormat($categorie);
    }

    // ✅ Test 8 — Valid format passes
    public function testValidNomFormatPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setNom('Food Transport');
        $this->assertTrue($this->manager->validateNomFormat($categorie));
    }

    // ===================================
    // TESTS — validateStatut()
    // ===================================

    // ❌ Test 9 — Invalid status throws exception
    public function testInvalidStatutThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Status must be either Active or Inactive.'
        );

        $categorie = new Categorie();
        $categorie->setStatut('Unknown');

        $this->manager->validateStatut($categorie);
    }

    // ✅ Test 10 — Active status passes
    public function testActiveStatutPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setStatut('Active');
        $this->assertTrue($this->manager->validateStatut($categorie));
    }

    // ✅ Test 11 — Inactive status passes
    public function testInactiveStatutPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setStatut('Inactive');
        $this->assertTrue($this->manager->validateStatut($categorie));
    }

    // ===================================
    // TESTS — validateColor()
    // ===================================

    // ❌ Test 12 — Invalid hex color throws exception
    public function testInvalidColorThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Color must be a valid hex code (e.g. #FF5733).'
        );

        $categorie = new Categorie();
        $categorie->setColor('red');

        $this->manager->validateColor($categorie);
    }

    // ❌ Test 13 — Empty color throws exception
    public function testEmptyColorThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Color is required.');

        $categorie = new Categorie();
        $categorie->setColor('');

        $this->manager->validateColor($categorie);
    }

    // ✅ Test 14 — Valid hex color passes
    public function testValidColorPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setColor('#F27438');
        $this->assertTrue($this->manager->validateColor($categorie));
    }

    // ✅ Test 15 — Valid lowercase hex passes
    public function testValidLowercaseHexPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setColor('#f27438');
        $this->assertTrue($this->manager->validateColor($categorie));
    }

    // ===================================
    // TESTS — validateIcon()
    // ===================================

    // ❌ Test 16 — Empty icon throws exception
    public function testEmptyIconThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Icon is required.');

        $categorie = new Categorie();
        $categorie->setIcon('');

        $this->manager->validateIcon($categorie);
    }

    // ✅ Test 17 — Valid icon passes
    public function testValidIconPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setIcon('fa-utensils');
        $this->assertTrue($this->manager->validateIcon($categorie));
    }

    // ===================================
    // TESTS — validateDescription()
    // ===================================

    // ❌ Test 18 — Description too long throws exception
    public function testDescriptionTooLongThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Description cannot exceed 255 characters.'
        );

        $categorie = new Categorie();
        $categorie->setDescription(str_repeat('A', 256));

        $this->manager->validateDescription($categorie);
    }

    // ✅ Test 19 — Null description passes
    public function testNullDescriptionPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setDescription(null);
        $this->assertTrue($this->manager->validateDescription($categorie));
    }

    // ✅ Test 20 — Valid description passes
    public function testValidDescriptionPasses(): void
    {
        $categorie = new Categorie();
        $categorie->setDescription('Food expenses description');
        $this->assertTrue($this->manager->validateDescription($categorie));
    }

    // ===================================
    // TESTS — isActive()
    // ===================================

    // ✅ Test 21 — Active categorie returns true
    public function testActiveCategorieReturnsTrue(): void
    {
        $categorie = new Categorie();
        $categorie->setStatut('Active');
        $this->assertTrue($this->manager->isActive($categorie));
    }

    // ✅ Test 22 — Inactive categorie returns false
    public function testInactiveCategorieReturnsFalse(): void
    {
        $categorie = new Categorie();
        $categorie->setStatut('Inactive');
        $this->assertFalse($this->manager->isActive($categorie));
    }
}