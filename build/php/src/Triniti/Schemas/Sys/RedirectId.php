<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\WellKnown\SlugIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Sys\Mixin\Redirect\RedirectV1Mixin;

/**
 * A redirect id is just a friendly slug identifer.
 * e.g. "credits", "swipes", "countries-iso2"
 *
 */
final class RedirectId extends SlugIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(RedirectV1Mixin::findOne()->getQName(), $this->toString());
    }
}
