<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-asset-request/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\GetAssetRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetAssetRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:get-asset-request:1-0-0');
    }
}
