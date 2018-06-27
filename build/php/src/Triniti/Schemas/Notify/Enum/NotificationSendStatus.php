<?php

namespace Triniti\Schemas\Notify\Enum;

use Gdbots\Common\Enum;

/**
 * @method static NotificationSendStatus UNKNOWN()
 * @method static NotificationSendStatus DRAFT()
 * @method static NotificationSendStatus SCHEDULED()
 * @method static NotificationSendStatus SENT()
 * @method static NotificationSendStatus CANCELED()
 * @method static NotificationSendStatus FAILED()
 */
final class NotificationSendStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const DRAFT = 'draft';
    const SCHEDULED = 'scheduled';
    const SENT = 'sent';
    const CANCELED = 'canceled';
    const FAILED = 'failed';
}
