<?php

namespace Triniti\Schemas\Boost\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SponsorType UNKNOWN()
 * @method static SponsorType EXTERNAL()
 * @method static SponsorType INTERNAL()
 * @method static SponsorType ADVERTORIAL()
 */
final class SponsorType extends Enum
{
    const UNKNOWN = 'unknown';
    const EXTERNAL = 'external';
    const INTERNAL = 'internal';
    const ADVERTORIAL = 'advertorial';
}
