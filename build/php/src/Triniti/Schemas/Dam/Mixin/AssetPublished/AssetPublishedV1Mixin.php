<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-published/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\AssetPublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class AssetPublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset-published:1-0-0');
    }
}
