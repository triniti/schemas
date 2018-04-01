<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/unpublish-list/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\UnpublishList;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishListV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:unpublish-list:1-0-0');
    }
}
