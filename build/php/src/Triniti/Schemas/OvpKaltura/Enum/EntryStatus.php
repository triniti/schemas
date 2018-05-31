<?php

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Common\Enum;

/**
 * @method static EntryStatus UNKNOWN()
 * @method static EntryStatus ERROR_IMPORTING()
 * @method static EntryStatus ERROR_CONVERTING()
 * @method static EntryStatus SCAN_FAILURE()
 * @method static EntryStatus IMPORT()
 * @method static EntryStatus INFECTED()
 * @method static EntryStatus PRECONVERT()
 * @method static EntryStatus READY()
 * @method static EntryStatus DELETED()
 * @method static EntryStatus PENDING()
 * @method static EntryStatus MODERATE()
 * @method static EntryStatus BLOCKED()
 * @method static EntryStatus NO_CONTENT()
 */
final class EntryStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const ERROR_IMPORTING = '-2';
    const ERROR_CONVERTING = '-1';
    const SCAN_FAILURE = 'virusScan.ScanFailure';
    const IMPORT = '0';
    const INFECTED = 'virusScan.Infected';
    const PRECONVERT = '1';
    const READY = '2';
    const DELETED = '3';
    const PENDING = '4';
    const MODERATE = '5';
    const BLOCKED = '6';
    const NO_CONTENT = '7';
}
