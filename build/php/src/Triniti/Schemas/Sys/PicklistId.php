<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\WellKnown\SlugIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Sys\Mixin\Picklist\PicklistV1Mixin;

/**
 * A picklist id is just a friendly slug identifer.
 * e.g. "credits", "swipes", "countries-iso2"
 *
 */
final class PicklistId extends SlugIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(PicklistV1Mixin::findOne()->getQName(), $this->toString());
    }
}
