<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/mark-gallery-as-pending/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\MarkGalleryAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkGalleryAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:mark-gallery-as-pending:1-0-0');
    }
}
