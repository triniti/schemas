<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/slider-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SliderWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class SliderWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:slider-widget:1-0-0');
    }
}
