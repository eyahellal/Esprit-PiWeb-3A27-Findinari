<?php

namespace App\community\RatingBundle\Twig;

use App\community\RatingBundle\Service\RatingStorage;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CommunityRatingExtension extends AbstractExtension
{
    public function __construct(private readonly RatingStorage $ratingStorage)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('community_rating_summary', [$this, 'getSummary']),
        ];
    }

    public function getSummary(int $postId): array
    {
        return $this->ratingStorage->getSummary($postId);
    }
}
