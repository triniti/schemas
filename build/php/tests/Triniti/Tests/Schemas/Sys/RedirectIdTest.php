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
            (object) array('output' => 'cG9zdC9yZWluZGV4LyMvJCQlIQ', 'input' => 'post/reindex/#/$$%!'),
            (object) array('output' => 'L3VuaWNvZGUvZmFrZS9wYXJ0aWFsL3VybA', 'input' => '/unicode/fake/partial/url'),
            (object) array('output' => 'RVJUIUAjJCVeLw', 'input' => 'ERT!@#$%^/'),
            (object) array('output' => 'aHR0cHM6Ly90ZXN0LmNvbS9BYUJjZEMxMjNmZzIzR1JyLw', 'input' => 'https://test.com/AaBcdC123fg23GRr/'),
            (object) array('output' => 'aHR0cHM6Ly90ZXN0LmNvbS9hYmNkZWZnaHl1b2kvaGtmaGRmZHM', 'input' => 'https://test.com/abcdefghyuoi/hkfhdfds'),
            (object) array('output' => 'JiYmJiYqKioqKioqLy8vLy8vXl5eXl5eXl4', 'input' => '&&&&&*******//////^^^^^^^^'),
            (object) array('output' => 'L3BhZ2UvMS8yLw', 'input' => '/page/1/2/'),
            (object) array('output' => 'cG9zdC8xMjMvIT1hQmNkRWZHPw', 'input' => 'post/123/!=aBcdEfG?'),
        ];

        foreach ($uris as $uri) {
            $id = RedirectId::fromUri($uri->input);
            $this->assertSame($uri->output, $id->toString());
            $this->assertSame($uri->input, $id->toUri());
            $this->assertNotSame($id->toString(), $id->toUri());
        }
    }

}
