<?php
declare(strict_types=1);

namespace Triniti\Tests\Schemas\Sys;

use PHPUnit\Framework\TestCase;
use Triniti\Schemas\Sys\RedirectId;
use Gdbots\Pbj\Exception\InvalidArgumentException;

final class RedirectIdTest extends TestCase
{
    public function testEmptyUri(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $uri = '';
        RedirectId::fromUri($uri);
    }

    public function testFromUri(): void
    {
        $uri = '/unicode/fake/partial/url';
        $id = RedirectId::fromUri($uri);
        $this->assertInstanceOf('Triniti\Schemas\Sys\RedirectId', $id);
        $this->assertSame(true, $this->isValid($id->toString()));

        $uri = 'https://test.com/unicode/characters/✓ à la mode';
        $id = RedirectId::fromUri($uri);
        $this->assertInstanceOf('Triniti\Schemas\Sys\RedirectId', $id);
        $this->assertSame(true, $this->isValid($id->toString()));

        $uri = '/\n';
        $id = RedirectId::fromUri($uri);
        $this->assertInstanceOf('Triniti\Schemas\Sys\RedirectId', $id);
        $this->assertSame(true, $this->isValid($id->toString()));

        $uri = 'http:/test.com/test/url/here';
        $id = RedirectId::fromUri($uri);
        $this->assertInstanceOf('Triniti\Schemas\Sys\RedirectId', $id);
        $this->assertSame(true, $this->isValid($id->toString()));

        $uri = 'https:/test.com/test/url/safe';
        $id = RedirectId::fromUri($uri);
        $this->assertInstanceOf('Triniti\Schemas\Sys\RedirectId', $id);
        $this->assertSame(true, $this->isValid($id->toString()));
    }


    public function testToUri(): void
    {
        $uri = '/test/url/here';
        $id = RedirectId::fromUri($uri);
        $this->assertSame(true, $this->isValid($id->toString()));
        $this->assertSame($uri, $id->toUri());

        $uri = 'https://test.com/unicode/characters/✓ à la mode';
        $id = RedirectId::fromUri($uri);
        $this->assertSame(true, $this->isValid($id->toString()));
        $this->assertSame($uri, $id->toUri());

        $uri = '台北';
        $id = RedirectId::fromUri($uri);
        $this->assertSame(true, $this->isValid($id->toString()));
        $this->assertSame($uri, $id->toUri());

        $uri = 'http:/test.com/test/url/here';
        $id = RedirectId::fromUri($uri);
        $this->assertSame(true, $this->isValid($id->toString()));
        $this->assertSame($uri, $id->toUri());

        $uri = 'https://test.com/AaBcdC123fg23GRr';
        $id = RedirectId::fromUri($uri);
        $this->assertSame(true, $this->isValid($id->toString()));
        $this->assertSame($uri, $id->toUri());
    }



    private function isValid($input): bool
    {
        $str_input = $input;
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $padlen = 4 - $remainder;
            $str_input .= str_repeat('=', $padlen);
        }
        $decoded = base64_decode(strtr($str_input, '-_', '+/'));

        $encoded = str_replace('=', '', strtr(base64_encode($decoded), '+/', '-_'));
        if ( $encoded === $input ) {
            return true;
        }
        return false;
    }

}
