<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/poll-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PollTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PollTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:poll-teaser:1-0-0');
    }
}
