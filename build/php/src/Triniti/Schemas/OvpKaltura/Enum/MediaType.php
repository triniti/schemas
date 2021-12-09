<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum MediaType: string
{
    case UNKNOWN = 'unknown';
    case VIDEO = '1';
    case IMAGE = '2';
    case AUDIO = '5';
    case LIVE_STREAM_FLASH = '201';
    case LIVE_STREAM_WINDOWS_MEDIA = '202';
    case LIVE_STREAM_REAL_MEDIA = '203';
    case LIVE_STREAM_QUICKTIME = '204';
}
