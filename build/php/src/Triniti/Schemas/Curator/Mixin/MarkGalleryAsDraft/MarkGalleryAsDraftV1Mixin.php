<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/mark-gallery-as-draft/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\MarkGalleryAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkGalleryAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:mark-gallery-as-draft:1-0-0');
    }
}
