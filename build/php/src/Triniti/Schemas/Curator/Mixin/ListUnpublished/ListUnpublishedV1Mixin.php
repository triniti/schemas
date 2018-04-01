<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/list-unpublished/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ListUnpublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListUnpublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:list-unpublished:1-0-0');
    }
}
