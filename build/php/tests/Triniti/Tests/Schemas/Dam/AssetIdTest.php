<?php
declare(strict_types=1);

namespace Triniti\Tests\Schemas\Dam;

use Gdbots\Pbj\Exception\AssertionFailed;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Triniti\Schemas\Dam\AssetId;

final class AssetIdTest extends TestCase
{
    public function testFromString(): void
    {
        $id = AssetId::fromString('image_jpg_20151201_cb9c3c8c5c88453b960933a59ede6505');

        $this->assertSame('image', $id->getType());
        $this->assertSame('jpg', $id->getExt());
        $this->assertSame(
            UuidIdentifier::fromString('cb9c3c8c-5c88-453b-9609-33a59ede6505')->toString(),
            UuidIdentifier::fromString($id->getUuid(true)->toString())->toString()
        );
        $this->assertSame('image/cb/2015/12/01/cb9c3c8c5c88453b960933a59ede6505.jpg', $id->toFilePath());
        $this->assertSame('image/cb/o/2015/12/01/cb9c3c8c5c88453b960933a59ede6505.jpg', $id->toFilePath('o'));
    }

    public function testCreate(): void
    {
        $id = AssetId::create('image', 'jpg', \DateTimeImmutable::createFromFormat('Ymd', '20151201'), UuidIdentifier::fromString('cb9c3c8c-5c88-453b-9609-33a59ede6505'));

        $this->assertSame('image', $id->getType());
        $this->assertSame('jpg', $id->getExt());
        $this->assertSame(
            UuidIdentifier::fromString('cb9c3c8c-5c88-453b-9609-33a59ede6505')->toString(),
            UuidIdentifier::fromString($id->getUuid(true)->toString())->toString()
        );
        $this->assertSame('image/cb/2015/12/01/cb9c3c8c5c88453b960933a59ede6505.jpg', $id->toFilePath());
        $this->assertSame('image/cb/250x/2015/12/01/cb9c3c8c5c88453b960933a59ede6505_n.jpg', $id->toFilePath('250x', 'n'));
    }

    public function testGenerate(): void
    {
        $date = new \DateTimeImmutable();
        $id = AssetId::create('image', 'jpg');

        $this->assertSame('image', $id->getType());
        $this->assertSame('jpg', $id->getExt());
        $this->assertSame(
            sprintf(
                'image/%s/%s/%s.jpg',
                substr($id->getUuid(), 0, 2),
                $date->format('Y/m/d'),
                $id->getUuid()
            ),
            $id->toFilePath()
        );

        $this->assertInstanceOf(UuidIdentifier::class, UuidIdentifier::fromString($id->getUuid(true)->toString()));
    }

    /**
     * @dataProvider getInvalidIds
     *
     * @param string $string
     */
    public function testInvalid(string $string): void
    {
        $this->expectException(AssertionFailed::class);
        AssetId::fromString($string);
    }

    /**
     * @return array
     */
    public function getInvalidIds(): array
    {
        return [
            ['test::what'],
            ['superlongtype_reallylongextension_invaliduuid'],
            ['image_jpg_invaliduuid'],
            ['__cb9c3c8c-5c88-453b-9609-33a59ede6505'],
            ['__cb9c3c8c5c88453b960933a59ede6505'],
            ['john@doe.com'],
            ['#hashtag'],
            ['http://www.what.com/'],
            ['test.value:2015/01/01/test:what'],
            ['cool~topic'],
            ['some:thin!@##$%$%&^^&**()-=+'],
            ['some:test%20'],
        ];
    }
}
