<?php

namespace App\Tests\community;

use App\community\RatingBundle\Service\RatingStorage;
use App\Entity\community\Post;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\RequestStack;

class RatingStorageTest extends TestCase
{
    private string $projectDir;

    protected function setUp(): void
    {
        $this->projectDir = sys_get_temp_dir() . '/community_rating_test_' . bin2hex(random_bytes(6));
    }

    protected function tearDown(): void
    {
        $file = $this->projectDir . '/var/community_ratings.json';
        if (is_file($file)) {
            unlink($file);
        }

        if (is_dir($this->projectDir . '/var')) {
            rmdir($this->projectDir . '/var');
        }

        if (is_dir($this->projectDir)) {
            rmdir($this->projectDir);
        }
    }

    public function testRateClampsValueAndIncludesEngagementInSummary(): void
    {
        $storage = new RatingStorage($this->projectDir, new RequestStack());

        $summary = $storage->rate(10, 7, '42', 2, 1);

        $this->assertSame(5, $summary['userRating']);
        $this->assertSame(3, $summary['total']);
        $this->assertSame(3.3, $summary['average']);
        $this->assertSame(66.0, $summary['percent']);
        $this->assertSame(2.5, $summary['engagementRating']);
        $this->assertSame(2, $summary['likes']);
        $this->assertSame(1, $summary['comments']);
        $this->assertFileExists($this->projectDir . '/var/community_ratings.json');
    }

    public function testGetBulkSummarySkipsPostsWithoutId(): void
    {
        $storage = new RatingStorage($this->projectDir, new RequestStack());
        $storage->rate(7, 4, '99');

        $savedPost = $this->createPostWithId(7, 3, 2);
        $unsavedPost = new Post();

        $summaries = $storage->getBulkSummary([$savedPost, $unsavedPost], '99');

        $this->assertArrayHasKey(7, $summaries);
        $this->assertCount(1, $summaries);
        $this->assertSame(4, $summaries[7]['userRating']);
        $this->assertSame(4, $summaries[7]['total']);
    }

    private function createPostWithId(int $id, int $likes, int $comments): Post
    {
        $post = new Post();
        $post->setNombreLikes($likes);
        $post->setNombreCommentaires($comments);

        $reflection = new \ReflectionProperty(Post::class, 'idPost');
        $reflection->setValue($post, $id);

        return $post;
    }
}
