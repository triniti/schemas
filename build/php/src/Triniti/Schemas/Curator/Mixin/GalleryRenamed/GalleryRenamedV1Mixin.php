<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery-renamed/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GalleryRenamed;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GalleryRenamedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:gallery-renamed:1-0-0');
    }
}
