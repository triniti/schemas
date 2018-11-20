<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/code-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\CodeAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class CodeAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:code-asset:1-0-0');
    }
}