<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/card-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\CardWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class CardWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:card-widget:1-0-0');
    }
}
