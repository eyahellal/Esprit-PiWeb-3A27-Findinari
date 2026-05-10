<?php

namespace App\Service\Management;

use App\Entity\management\Categorie;

class CategorieManager
{
    // Rule 1 — Name is required and must be 2-50 chars
    public function validateNom(Categorie $categorie): bool
    {
        if (empty($categorie->getNom())) {
            throw new \InvalidArgumentException(
                'Category name is required.'
            );
        }
        if (strlen($categorie->getNom()) < 2) {
            throw new \InvalidArgumentException(
                'Name must be at least 2 characters.'
            );
        }
        if (strlen($categorie->getNom()) > 50) {
            throw new \InvalidArgumentException(
                'Name cannot exceed 50 characters.'
            );
        }
        return true;
    }

  // Rule 2 — Name must contain only letters, numbers, spaces
public function validateNomFormat(Categorie $categorie): bool
{
    // ✅ Cast to string to avoid null
    if (!preg_match('/^[a-zA-ZÀ-ÿ0-9\s\-]+$/', (string) $categorie->getNom())) {
        throw new \InvalidArgumentException(
            'Name must contain only letters, numbers, and spaces.'
        );
    }
    return true;
}

    // Rule 3 — Status must be Active or Inactive
    public function validateStatut(Categorie $categorie): bool
    {
        if (empty($categorie->getStatut())) {
            throw new \InvalidArgumentException(
                'Status is required.'
            );
        }
        if (!in_array($categorie->getStatut(), ['Active', 'Inactive'])) {
            throw new \InvalidArgumentException(
                'Status must be either Active or Inactive.'
            );
        }
        return true;
    }

    // Rule 4 — Color must be valid hex code
    public function validateColor(Categorie $categorie): bool
    {
        if (empty($categorie->getColor())) {
            throw new \InvalidArgumentException(
                'Color is required.'
            );
        }
        if (!preg_match('/^#[0-9A-Fa-f]{6}$/', $categorie->getColor())) {
            throw new \InvalidArgumentException(
                'Color must be a valid hex code (e.g. #FF5733).'
            );
        }
        return true;
    }

    // Rule 5 — Icon is required
    public function validateIcon(Categorie $categorie): bool
    {
        if (empty($categorie->getIcon())) {
            throw new \InvalidArgumentException(
                'Icon is required.'
            );
        }
        return true;
    }

    // Rule 6 — Description max 255 chars
    public function validateDescription(Categorie $categorie): bool
    {
        if ($categorie->getDescription() !== null &&
            strlen($categorie->getDescription()) > 255) {
            throw new \InvalidArgumentException(
                'Description cannot exceed 255 characters.'
            );
        }
        return true;
    }

    // Rule 7 — Check if category is active
    public function isActive(Categorie $categorie): bool
    {
        return $categorie->getStatut() === 'Active';
    }

    // Full validation
    public function validate(Categorie $categorie): bool
    {
        $this->validateNom($categorie);
        $this->validateNomFormat($categorie);
        $this->validateStatut($categorie);
        $this->validateColor($categorie);
        $this->validateIcon($categorie);
        $this->validateDescription($categorie);
        return true;
    }
}