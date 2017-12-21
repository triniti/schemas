<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/pinterest-pin-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PinterestPinBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PinterestPinBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:pinterest-pin-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('href', T\StringType::create())
                ->required()
                ->format(Format::URL())
                ->build(),
            /*
             * When true, hides the description.
             */
            Fb::create('terse', T\BooleanType::create())
                ->build(),
            Fb::create('size', T\StringType::create())
                ->pattern('^[\w-]+$')
                ->withDefault("small")
                ->build(),
        ];
    }
}
