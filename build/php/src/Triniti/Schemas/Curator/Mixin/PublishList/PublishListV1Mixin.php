<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/publish-list/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PublishList;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PublishListV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:publish-list:1-0-0');
    }
}
