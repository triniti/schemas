<?php
declare(strict_types=1);

namespace Triniti\Schemas\Boost\Enum;

enum SponsorType: string
{
    case UNKNOWN = 'unknown';
    case EXTERNAL = 'external';
    case INTERNAL = 'internal';
    case ADVERTORIAL = 'advertorial';
}
