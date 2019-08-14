<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gridler-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GridlerWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GridlerWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:gridler-widget:1-0-0');
    }
}