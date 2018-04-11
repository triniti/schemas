<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/carousel-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\CarouselWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class CarouselWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:carousel-widget:1-0-0');
    }
}
