<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum CaptionAssetStatus: string
{
    case UNKNOWN = 'unknown';
    case ERROR = '-1';
    case QUEUED = '0';
    case READY = '2';
    case DELETED = '3';
    case IMPORTING = '7';
    case EXPORTING = '9';
}
