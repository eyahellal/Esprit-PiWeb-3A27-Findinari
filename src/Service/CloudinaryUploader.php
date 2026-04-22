<?php

namespace App\Service;

use Cloudinary\Cloudinary;

class CloudinaryUploader
{
    private Cloudinary $cloudinary;

    public function __construct(string $cloudinaryUrl)
    {
        $this->cloudinary = new Cloudinary($cloudinaryUrl);
    }

    public function uploadAudio(string $filePath): ?string
    {
        $result = $this->cloudinary
            ->uploadApi()
            ->upload($filePath, [
                'resource_type' => 'video',
                'folder' => 'findinari/messages',
                'overwrite' => false,
            ]);

        return $result['secure_url'] ?? null;
    }
}