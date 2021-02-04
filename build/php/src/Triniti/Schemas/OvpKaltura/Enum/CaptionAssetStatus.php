<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static CaptionAssetStatus UNKNOWN()
 * @method static CaptionAssetStatus ERROR()
 * @method static CaptionAssetStatus QUEUED()
 * @method static CaptionAssetStatus READY()
 * @method static CaptionAssetStatus DELETED()
 * @method static CaptionAssetStatus IMPORTING()
 * @method static CaptionAssetStatus EXPORTING()
 */
final class CaptionAssetStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const ERROR = '-1';
    const QUEUED = '0';
    const READY = '2';
    const DELETED = '3';
    const IMPORTING = '7';
    const EXPORTING = '9';
}
