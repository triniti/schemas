<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static FlavorAssetStatus UNKNOWN()
 * @method static FlavorAssetStatus ERROR()
 * @method static FlavorAssetStatus QUEUED()
 * @method static FlavorAssetStatus CONVERTING()
 * @method static FlavorAssetStatus READY()
 * @method static FlavorAssetStatus DELETED()
 * @method static FlavorAssetStatus NOT_APPLICABLE()
 * @method static FlavorAssetStatus TEMP()
 * @method static FlavorAssetStatus WAIT_FOR_CONVERT()
 * @method static FlavorAssetStatus IMPORTING()
 * @method static FlavorAssetStatus VALIDATING()
 * @method static FlavorAssetStatus EXPORTING()
 */
final class FlavorAssetStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const ERROR = '-1';
    const QUEUED = '0';
    const CONVERTING = '1';
    const READY = '2';
    const DELETED = '3';
    const NOT_APPLICABLE = '4';
    const TEMP = '5';
    const WAIT_FOR_CONVERT = '6';
    const IMPORTING = '7';
    const VALIDATING = '8';
    const EXPORTING = '9';
}
