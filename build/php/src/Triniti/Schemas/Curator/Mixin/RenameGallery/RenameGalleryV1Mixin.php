<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/rename-gallery/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\RenameGallery;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class RenameGalleryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:rename-gallery:1-0-0');
    }
}
