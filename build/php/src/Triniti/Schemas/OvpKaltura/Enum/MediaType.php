<?php

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Common\Enum;

/**
 * @method static MediaType UNKNOWN()
 * @method static MediaType VIDEO()
 * @method static MediaType IMAGE()
 * @method static MediaType AUDIO()
 * @method static MediaType LIVE_STREAM_FLASH()
 * @method static MediaType LIVE_STREAM_WINDOWS_MEDIA()
 * @method static MediaType LIVE_STREAM_REAL_MEDIA()
 * @method static MediaType LIVE_STREAM_QUICKTIME()
 */
final class MediaType extends Enum
{
    const UNKNOWN = 'unknown';
    const VIDEO = '1';
    const IMAGE = '2';
    const AUDIO = '5';
    const LIVE_STREAM_FLASH = '201';
    const LIVE_STREAM_WINDOWS_MEDIA = '202';
    const LIVE_STREAM_REAL_MEDIA = '203';
    const LIVE_STREAM_QUICKTIME = '204';
}
