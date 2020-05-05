<?php

namespace Triniti\Schemas\Ovp\Enum;

use Gdbots\Common\Enum;

/**
 * @method static TranscriptionStatus UNKNOWN()
 * @method static TranscriptionStatus PROCESSING()
 * @method static TranscriptionStatus COMPLETE()
 * @method static TranscriptionStatus FAILED()
 */
final class TranscriptionStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const PROCESSING = 'processing';
    const COMPLETE = 'complete';
    const FAILED = 'failed';
}
