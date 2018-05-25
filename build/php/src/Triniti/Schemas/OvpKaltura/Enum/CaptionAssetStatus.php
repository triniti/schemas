<?php

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Common\Enum;

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
    const UNKNOWN = '0';
    const ERROR = '-1';
    const QUEUED = '0';
    const READY = '1';
    const DELETED = '2';
    const IMPORTING = '3';
    const EXPORTING = '4';
}
