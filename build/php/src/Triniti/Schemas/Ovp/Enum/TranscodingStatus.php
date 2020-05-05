<?php

namespace Triniti\Schemas\Ovp\Enum;

use Gdbots\Common\Enum;

/**
 * @method static TranscodingStatus UNKNOWN()
 * @method static TranscodingStatus PROCESSING()
 * @method static TranscodingStatus COMPLETE()
 * @method static TranscodingStatus FAILED()
 */
final class TranscodingStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const PROCESSING = 'processing';
    const COMPLETE = 'complete';
    const FAILED = 'failed';
}
