<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\Mixin\Gallery\GalleryV1Mixin;

final class GalleryId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(GalleryV1Mixin::findOne()->getQName(), $this->toString());
    }
}
