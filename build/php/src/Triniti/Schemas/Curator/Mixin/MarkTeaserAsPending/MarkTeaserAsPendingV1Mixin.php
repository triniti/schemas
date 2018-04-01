<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/mark-teaser-as-pending/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\MarkTeaserAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkTeaserAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:mark-teaser-as-pending:1-0-0');
    }
}
