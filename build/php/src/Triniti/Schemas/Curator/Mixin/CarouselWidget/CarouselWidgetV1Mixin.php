<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/carousel-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\CarouselWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class CarouselWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:carousel-widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('show_captions', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            Fb::create('show_controls', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            Fb::create('show_position_indicators', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
        ];
    }
}
