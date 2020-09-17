<?php
declare(strict_types=1);

namespace Triniti\Schemas\Ovp\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static TranscriptionStatus UNKNOWN()
 * @method static TranscriptionStatus PROCESSING()
 * @method static TranscriptionStatus CANCELED()
 * @method static TranscriptionStatus COMPLETED()
 * @method static TranscriptionStatus FAILED()
 */
final class TranscriptionStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const PROCESSING = 'processing';
    const CANCELED = 'canceled';
    const COMPLETED = 'completed';
    const FAILED = 'failed';
}
