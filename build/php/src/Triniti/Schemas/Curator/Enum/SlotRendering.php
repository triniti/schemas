<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SlotRendering UNKNOWN()
 * @method static SlotRendering SERVER()
 * @method static SlotRendering CLIENT()
 * @method static SlotRendering LAZY()
 */
final class SlotRendering extends Enum
{
    const UNKNOWN = 'unknown';
    const SERVER = 'server';
    const CLIENT = 'client';
    const LAZY = 'lazy';
}
