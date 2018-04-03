<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\Mixin\Timeline\TimelineV1Mixin;

final class TimelineId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(TimelineV1Mixin::findOne()->getQName(), $this->toString());
    }
}
