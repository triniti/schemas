<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/mark-page-as-draft/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\MarkPageAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkPageAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:mark-page-as-draft:1-0-0');
    }
}
