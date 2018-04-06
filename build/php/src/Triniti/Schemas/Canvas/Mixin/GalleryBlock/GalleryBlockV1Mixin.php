<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/gallery-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GalleryBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GalleryBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:gallery-block:1-0-0');
    }
}
