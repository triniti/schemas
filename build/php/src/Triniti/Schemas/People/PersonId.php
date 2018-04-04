<?php
declare(strict_types=1);

namespace Triniti\Schemas\People;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\People\Mixin\Person\PersonV1Mixin;

final class PersonId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(PersonV1Mixin::findOne()->getQName(), $this->toString());
    }
}
