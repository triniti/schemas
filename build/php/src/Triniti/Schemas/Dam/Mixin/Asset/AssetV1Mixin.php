<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\Asset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class AssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset:1-0-0');
    }
}
