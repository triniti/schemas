<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/heading-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\HeadingBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class HeadingBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:heading-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('text', T\TextType::create())
                ->maxLength(2000)
                ->build(),
            Fb::create('size', T\TinyIntType::create())
                ->max(6)
                ->build(),
            Fb::create('url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
        ];
    }
}
