<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-widget-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetWidgetRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetWidgetRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-widget-request:1-0-0');
    }
}
