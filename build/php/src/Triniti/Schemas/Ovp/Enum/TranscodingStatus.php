<?php
declare(strict_types=1);

namespace Triniti\Schemas\Ovp\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static TranscodingStatus UNKNOWN()
 * @method static TranscodingStatus PROCESSING()
 * @method static TranscodingStatus CANCELED()
 * @method static TranscodingStatus COMPLETED()
 * @method static TranscodingStatus FAILED()
 */
final class TranscodingStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const PROCESSING = 'processing';
    const CANCELED = 'canceled';
    const COMPLETED = 'completed';
    const FAILED = 'failed';
}
