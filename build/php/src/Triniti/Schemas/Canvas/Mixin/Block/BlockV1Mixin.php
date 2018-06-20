<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\Block;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class BlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('etag', T\StringType::create())
                ->maxLength(100)
                ->pattern('^[\w\.:-]+$')
                ->build(),
            /*
             * In rendering environments that support HTML the css_class
             * can be appended to the dom elements' class attribute.
             */
            Fb::create('css_class', T\StringType::create())
                ->pattern('^[\w\s-]+$')
                ->build(),
            /*
             * Used to visually represent an update that occurred on this block
             * that is NOT when this block was literally last modified.
             */
            Fb::create('updated_date', T\DateTimeType::create())
                ->build(),
        ];
    }
}
