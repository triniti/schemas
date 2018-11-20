<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget-search-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\WidgetSearchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class WidgetSearchRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:widget-search-request:1-0-0');
    }
}
