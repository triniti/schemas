<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/timeline-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TimelineTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class TimelineTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:timeline-teaser:1-0-0');
    }
}
