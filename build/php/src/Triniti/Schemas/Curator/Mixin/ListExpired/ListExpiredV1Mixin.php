<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/list-expired/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ListExpired;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListExpiredV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:list-expired:1-0-0');
    }
}
