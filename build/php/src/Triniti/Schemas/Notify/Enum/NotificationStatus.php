<?php

namespace Triniti\Schemas\Notify\Enum;

use Gdbots\Common\Enum;

/**
 * @method static NotificationStatus UNKNOWN()
 * @method static NotificationStatus SENT()
 * @method static NotificationStatus CANCELLED()
 * @method static NotificationStatus SCHEDULED()
 */
final class NotificationStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const SENT = 'sent';
    const CANCELLED = 'cancelled';
    const SCHEDULED = 'scheduled';
}
