<?php
declare(strict_types=1);

namespace Triniti\Schemas\Canvas;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Canvas\Mixin\Page\PageV1Mixin;

final class PageId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(PageV1Mixin::findOne()->getQName(), $this->toString());
    }
}
