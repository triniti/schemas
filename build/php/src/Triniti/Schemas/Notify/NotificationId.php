<?php
declare(strict_types=1);

namespace Triniti\Schemas\Notify;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Notify\Mixin\Notification\NotificationV1Mixin;

final class NotificationId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(NotificationV1Mixin::findOne()->getQName(), $this->toString());
    }
}
