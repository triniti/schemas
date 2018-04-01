<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/list-scheduled/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ListScheduled;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListScheduledV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:list-scheduled:1-0-0');
    }
}
