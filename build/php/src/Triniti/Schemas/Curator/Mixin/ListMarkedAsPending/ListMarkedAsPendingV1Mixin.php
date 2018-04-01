<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/list-marked-as-pending/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ListMarkedAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListMarkedAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:list-marked-as-pending:1-0-0');
    }
}
