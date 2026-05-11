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

    public function upload(string $filePath, string $folder = 'findinari/general'): ?string
    {
        $result = $this->cloudinary
            ->uploadApi()
            ->upload($filePath, [
                'folder' => $folder,
                'resource_type' => 'auto',
                'overwrite' => false,
            ]);

        return $result['secure_url'] ?? null;
    }

    public function uploadAudio(string $filePath): ?string
    {
        return $this->upload($filePath, 'findinari/messages');
    }
}