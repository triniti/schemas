<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/unpublish-gallery/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\UnpublishGallery;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishGalleryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:unpublish-gallery:1-0-0');
    }
}
