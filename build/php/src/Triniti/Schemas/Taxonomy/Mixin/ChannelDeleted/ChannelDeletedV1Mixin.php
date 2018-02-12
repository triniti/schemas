<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/channel-deleted/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\ChannelDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ChannelDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:channel-deleted:1-0-0');
    }
}
