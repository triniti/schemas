<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/archive-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\ArchiveAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ArchiveAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:archive-asset:1-0-0');
    }
}
