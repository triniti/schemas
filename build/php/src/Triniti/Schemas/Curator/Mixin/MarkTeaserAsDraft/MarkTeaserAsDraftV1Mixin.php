<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/mark-teaser-as-draft/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\MarkTeaserAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkTeaserAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:mark-teaser-as-draft:1-0-0');
    }
}
