<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/list-deleted/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ListDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:list-deleted:1-0-0');
    }
}
