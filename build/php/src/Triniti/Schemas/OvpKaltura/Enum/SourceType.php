<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum SourceType: string
{
    case UNKNOWN = 'unknown';
    case LIMELIGHT_LIVE = 'limeLight.LIVE_STREAM';
    case VELOCIX_LIVE = 'velocix.VELOCIX_LIVE';
    case FILE = '1';
    case WEBCAM = '2';
    case URL = '5';
    case SEARCH_PROVIDER = '6';
    case AKAMAI_LIVE = '29';
    case MANUAL_LIVE_STREAM = '30';
    case AKAMAI_UNIVERSAL_LIVE = '31';
    case LIVE_STREAM = '32';
    case LIVE_CHANNEL = '33';
    case RECORDED_LIVE = '34';
    case CLIP = '35';
    case KALTURA_RECORDED_LIVE = '36';
    case LECTURE_CAPTURE = '37';
    case LIVE_STREAM_ONTEXTDATA_CAPTIONS = '42';
}
