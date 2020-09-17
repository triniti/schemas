<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static CaptionType UNKNOWN()
 * @method static CaptionType SRT()
 * @method static CaptionType DFXP()
 * @method static CaptionType WEBVTT()
 * @method static CaptionType CAP()
 */
final class CaptionType extends Enum
{
    const UNKNOWN = 'unknown';
    const SRT = '1';
    const DFXP = '2';
    const WEBVTT = '3';
    const CAP = '4';
}
