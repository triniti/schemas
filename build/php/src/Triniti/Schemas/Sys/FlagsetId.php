<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\WellKnown\SlugIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Sys\Mixin\Flagset\FlagsetV1Mixin;

/**
 * A flagset id is just a friendly slug identifer.
 * e.g. "prod-web", "prod-web-videos"
 *
 */
final class FlagsetId extends SlugIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(FlagsetV1Mixin::findOne()->getQName(), $this->toString());
    }
}
