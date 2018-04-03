<?php
declare(strict_types=1);

namespace Triniti\Schemas\Taxonomy;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Taxonomy\Mixin\Channel\ChannelV1Mixin;

final class ChannelId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(ChannelV1Mixin::findOne()->getQName(), $this->toString());
    }
}
