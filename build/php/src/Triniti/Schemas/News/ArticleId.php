<?php
declare(strict_types=1);

namespace Triniti\Schemas\News;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\News\Mixin\Article\ArticleV1Mixin;

final class ArticleId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(ArticleV1Mixin::findOne()->getQName(), $this->toString());
    }
}
