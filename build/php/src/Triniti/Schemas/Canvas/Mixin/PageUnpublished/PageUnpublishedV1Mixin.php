<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/page-unpublished/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PageUnpublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PageUnpublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:page-unpublished:1-0-0');
    }
}