<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator\Enum;

enum SlotRendering: string
{
    case UNKNOWN = 'unknown';
    case SERVER = 'server';
    case CLIENT = 'client';
    case LAZY = 'lazy';
}
