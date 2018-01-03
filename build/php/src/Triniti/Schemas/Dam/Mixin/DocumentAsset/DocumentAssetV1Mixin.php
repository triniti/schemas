<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/document-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\DocumentAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DocumentAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:document-asset:1-0-0');
    }
}
