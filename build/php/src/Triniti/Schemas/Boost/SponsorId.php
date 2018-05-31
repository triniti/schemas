<?php
declare(strict_types=1);

namespace Triniti\Schemas\Boost;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Boost\Mixin\Sponsor\SponsorV1Mixin;

final class SponsorId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(SponsorV1Mixin::findOne()->getQName(), $this->toString());
    }
}
