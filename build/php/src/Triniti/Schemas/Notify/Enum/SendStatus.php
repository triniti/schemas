<?php

namespace Triniti\Schemas\Notify\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SendStatus UNKNOWN()
 * @method static SendStatus SENT()
 * @method static SendStatus CANCELED()
 * @method static SendStatus SCHEDULED()
 * @method static SendStatus FAILED()
 */
final class SendStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const SENT = 'sent';
    const CANCELED = 'canceled';
    const SCHEDULED = 'scheduled';
    const FAILED = 'failed';
}
