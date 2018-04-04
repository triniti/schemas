<?php
declare(strict_types=1);

namespace Triniti\Schemas\Taxonomy;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Taxonomy\Mixin\Category\CategoryV1Mixin;

final class CategoryId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(CategoryV1Mixin::findOne()->getQName(), $this->toString());
    }
}
