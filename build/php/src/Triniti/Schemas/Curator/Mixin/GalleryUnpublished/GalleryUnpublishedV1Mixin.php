<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery-unpublished/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GalleryUnpublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GalleryUnpublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:gallery-unpublished:1-0-0');
    }
}
