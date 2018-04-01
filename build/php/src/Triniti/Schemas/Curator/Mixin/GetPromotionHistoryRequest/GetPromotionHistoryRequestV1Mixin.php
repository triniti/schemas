<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-promotion-history-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetPromotionHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPromotionHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-promotion-history-request:1-0-0');
    }
}
