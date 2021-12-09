<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum EntryStatus: string
{
    case UNKNOWN = 'unknown';
    case ERROR_IMPORTING = '-2';
    case ERROR_CONVERTING = '-1';
    case SCAN_FAILURE = 'virusScan.ScanFailure';
    case IMPORT = '0';
    case INFECTED = 'virusScan.Infected';
    case PRECONVERT = '1';
    case READY = '2';
    case DELETED = '3';
    case PENDING = '4';
    case MODERATE = '5';
    case BLOCKED = '6';
    case NO_CONTENT = '7';
}
