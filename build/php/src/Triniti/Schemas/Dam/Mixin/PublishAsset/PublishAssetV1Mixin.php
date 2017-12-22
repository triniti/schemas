<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/publish-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\PublishAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PublishAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:publish-asset:1-0-0');
    }
}
