<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum FlavorAssetStatus: string
{
    case UNKNOWN = 'unknown';
    case ERROR = '-1';
    case QUEUED = '0';
    case CONVERTING = '1';
    case READY = '2';
    case DELETED = '3';
    case NOT_APPLICABLE = '4';
    case TEMP = '5';
    case WAIT_FOR_CONVERT = '6';
    case IMPORTING = '7';
    case VALIDATING = '8';
    case EXPORTING = '9';
}
