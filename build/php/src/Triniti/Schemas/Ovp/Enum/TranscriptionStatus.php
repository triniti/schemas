<?php
declare(strict_types=1);

namespace Triniti\Schemas\Ovp\Enum;

enum TranscriptionStatus: string
{
    case UNKNOWN = 'unknown';
    case PROCESSING = 'processing';
    case CANCELED = 'canceled';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
}
