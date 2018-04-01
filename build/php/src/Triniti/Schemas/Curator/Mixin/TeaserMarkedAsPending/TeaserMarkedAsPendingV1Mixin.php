<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-marked-as-pending/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TeaserMarkedAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class TeaserMarkedAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser-marked-as-pending:1-0-0');
    }
}
