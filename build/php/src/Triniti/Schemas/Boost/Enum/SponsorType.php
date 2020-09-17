<?php
declare(strict_types=1);

namespace Triniti\Schemas\Boost\Enum;

use Gdbots\Pbj\Enum;

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
