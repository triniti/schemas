<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-promotion-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetPromotionRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPromotionRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-promotion-request:1-0-0');
    }
}
