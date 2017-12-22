<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-expired/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\AssetExpired;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class AssetExpiredV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset-expired:1-0-0');
    }
}
