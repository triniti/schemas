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
        $uris = ['/unicode/fake/partial/url', 'https://test.com/unicode/characters', '5/2/3',
            'http://test.com/test/url/here', 'test', 'https://test.com/ABCDERT!@#$%^/',
            'https://test.com/AaBcdC123fg23GRr/', 'https://test.com/abcdefghyuoi/hkfhdfds',
            '&&&&&*******//////^^^^^^^^',
            '/page/1/2/'];

        foreach ($uris as $uri) {
            $id = RedirectId::fromUri($uri);
            $this->assertInstanceOf('Triniti\Schemas\Sys\RedirectId', $id);
            $this->assertSame(true, $this->isValid($id->toString()));
            $this->assertSame($uri, $id->toUri());
            $this->assertNotSame($id->toString() ,$id->toUri());
        }

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
