<?php
declare(strict_types=1);

namespace Triniti\Schemas\Apollo;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Apollo\Mixin\Poll\PollV1Mixin;

final class PollId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(PollV1Mixin::findOne()->getQName(), $this->toString());
    }
}
