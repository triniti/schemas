<?php
declare(strict_types=1);

namespace Triniti\Schemas\Ovp\Enum;

enum TvpgRating: string
{
    case UNKNOWN = 'unknown';
    case TV_G = 'TV-G';
    case TV_MA = 'TV-MA';
    case TV_PG = 'TV-PG';
    case TV_Y = 'TV-Y';
    case TV_Y7 = 'TV-Y7';
    case TV_Y7_FV = 'TV-Y7-FV';
    case TV_14 = 'TV-14';
}
