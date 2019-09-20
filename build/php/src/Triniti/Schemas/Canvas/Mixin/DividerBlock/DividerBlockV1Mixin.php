<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/divider-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\DividerBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class DividerBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:divider-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('text', T\StringType::create())
                ->build(),
            Fb::create('stroke_color', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            Fb::create('stroke_style', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
