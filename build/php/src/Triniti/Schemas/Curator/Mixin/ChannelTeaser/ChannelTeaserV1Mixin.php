<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/channel-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ChannelTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ChannelTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:channel-teaser:1-0-0');
    }
}
