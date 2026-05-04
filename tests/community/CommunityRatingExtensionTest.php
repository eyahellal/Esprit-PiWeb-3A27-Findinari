<?php

namespace App\Tests\community;

use App\community\RatingBundle\Service\RatingStorage;
use App\community\RatingBundle\Twig\CommunityRatingExtension;
use PHPUnit\Framework\TestCase;
use Twig\TwigFunction;

class CommunityRatingExtensionTest extends TestCase
{
    public function testRegistersCommunityRatingSummaryTwigFunction(): void
    {
        $storage = $this->createMock(RatingStorage::class);
        $extension = new CommunityRatingExtension($storage);

        $functions = $extension->getFunctions();

        $this->assertCount(1, $functions);
        $this->assertInstanceOf(TwigFunction::class, $functions[0]);
        $this->assertSame('community_rating_summary', $functions[0]->getName());
    }

    public function testGetSummaryDelegatesToRatingStorage(): void
    {
        $expected = [
            'average' => 4.5,
            'total' => 2,
            'userRating' => 5,
            'percent' => 90.0,
        ];

        $storage = $this->createMock(RatingStorage::class);
        $storage->expects($this->once())
            ->method('getSummary')
            ->with(12)
            ->willReturn($expected);

        $extension = new CommunityRatingExtension($storage);

        $this->assertSame($expected, $extension->getSummary(12));
    }
}
