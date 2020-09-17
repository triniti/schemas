<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SourceType UNKNOWN()
 * @method static SourceType LIMELIGHT_LIVE()
 * @method static SourceType VELOCIX_LIVE()
 * @method static SourceType FILE()
 * @method static SourceType WEBCAM()
 * @method static SourceType URL()
 * @method static SourceType SEARCH_PROVIDER()
 * @method static SourceType AKAMAI_LIVE()
 * @method static SourceType MANUAL_LIVE_STREAM()
 * @method static SourceType AKAMAI_UNIVERSAL_LIVE()
 * @method static SourceType LIVE_STREAM()
 * @method static SourceType LIVE_CHANNEL()
 * @method static SourceType RECORDED_LIVE()
 * @method static SourceType CLIP()
 * @method static SourceType KALTURA_RECORDED_LIVE()
 * @method static SourceType LECTURE_CAPTURE()
 * @method static SourceType LIVE_STREAM_ONTEXTDATA_CAPTIONS()
 */
final class SourceType extends Enum
{
    const UNKNOWN = 'unknown';
    const LIMELIGHT_LIVE = 'limeLight.LIVE_STREAM';
    const VELOCIX_LIVE = 'velocix.VELOCIX_LIVE';
    const FILE = '1';
    const WEBCAM = '2';
    const URL = '5';
    const SEARCH_PROVIDER = '6';
    const AKAMAI_LIVE = '29';
    const MANUAL_LIVE_STREAM = '30';
    const AKAMAI_UNIVERSAL_LIVE = '31';
    const LIVE_STREAM = '32';
    const LIVE_CHANNEL = '33';
    const RECORDED_LIVE = '34';
    const CLIP = '35';
    const KALTURA_RECORDED_LIVE = '36';
    const LECTURE_CAPTURE = '37';
    const LIVE_STREAM_ONTEXTDATA_CAPTIONS = '42';
}
