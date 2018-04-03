<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\Mixin\Promotion\PromotionV1Mixin;

final class PromotionId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(PromotionV1Mixin::findOne()->getQName(), $this->toString());
    }
}
