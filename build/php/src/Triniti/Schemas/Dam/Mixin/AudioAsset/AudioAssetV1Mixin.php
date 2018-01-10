<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/audio-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\AudioAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class AudioAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:audio-asset:1-0-0');
    }
}
