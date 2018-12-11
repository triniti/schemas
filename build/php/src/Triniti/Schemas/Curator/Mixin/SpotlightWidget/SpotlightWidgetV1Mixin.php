<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/spotlight-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SpotlightWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class SpotlightWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:spotlight-widget:1-0-0');
    }
}
