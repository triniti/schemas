<?php
declare(strict_types=1);

namespace Triniti\Tests\Schemas\Sys;

use PHPUnit\Framework\TestCase;
use Triniti\Schemas\Sys\RedirectId;

final class RedirectIdTest extends TestCase
{
    /**
     * @expectedException \Gdbots\Pbj\Exception\InvalidArgumentException
     */
    public function testEmptyUri(): void
    {
        RedirectId::fromUri('');
    }

    public function test(): void
    {
        $uris = [
            ['input' => 'post/reindex/#/$$%!', 'output' => 'cG9zdC9yZWluZGV4LyMvJCQlIQ'],
            ['input' => '/unicode/fake/partial/url', 'output' => 'L3VuaWNvZGUvZmFrZS9wYXJ0aWFsL3VybA'],
            ['input' => 'ERT!@#$%^/', 'output' => 'RVJUIUAjJCVeLw'],
            ['input' => 'https://test.com/AaBcdC123fg23GRr/', 'output' => 'aHR0cHM6Ly90ZXN0LmNvbS9BYUJjZEMxMjNmZzIzR1JyLw'],
            ['input' => 'https://test.com/abcdefghyuoi/hkfhdfds', 'output' => 'aHR0cHM6Ly90ZXN0LmNvbS9hYmNkZWZnaHl1b2kvaGtmaGRmZHM'],
            ['input' => '&&&&&*******//////^^^^^^^^', 'output' => 'JiYmJiYqKioqKioqLy8vLy8vXl5eXl5eXl4'],
            ['input' => '/page/1/2/', 'output' => 'L3BhZ2UvMS8yLw'],
            ['input' => 'post/123/!=aBcdEfG?', 'output' => 'cG9zdC8xMjMvIT1hQmNkRWZHPw'],
        ];

        foreach ($uris as $uri) {
            $id = RedirectId::fromUri($uri['input']);
            $this->assertSame($uri['output'], $id->toString());
            $this->assertSame($uri['input'], $id->toUri());
        }
    }

}
