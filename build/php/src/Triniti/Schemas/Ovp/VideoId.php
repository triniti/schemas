<?php
declare(strict_types=1);

namespace Triniti\Schemas\Ovp;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Ovp\Mixin\Video\VideoV1Mixin;

final class VideoId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(VideoV1Mixin::findOne()->getQName(), $this->toString());
    }
}
