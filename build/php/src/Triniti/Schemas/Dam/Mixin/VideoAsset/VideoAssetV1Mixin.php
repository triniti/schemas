<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/video-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\VideoAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class VideoAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:video-asset:1-0-0');
    }
}
