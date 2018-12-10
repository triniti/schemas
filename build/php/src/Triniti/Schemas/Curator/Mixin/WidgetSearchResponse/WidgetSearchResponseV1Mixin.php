<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget-search-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\WidgetSearchResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class WidgetSearchResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:widget-search-response:1-0-0');
    }
}
