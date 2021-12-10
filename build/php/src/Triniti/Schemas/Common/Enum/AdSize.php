<?php
declare(strict_types=1);

namespace Triniti\Schemas\Common\Enum;

enum AdSize: string
{
    case UNKNOWN = 'unknown';
    case MEDIUM_RECTANGLE = 'medium_rectangle';
    case MEDIUM_RECTANGLE_FLEX = 'medium_rectangle_flex';
    case LARGE_RECTANGLE = 'large_rectangle';
    case SQUARE = 'square';
    case SMALL_SQUARE = 'small_square';
    case LEADERBOARD = 'leaderboard';
    case LEADERBOARD_FLEX = 'leaderboard_flex';
    case LARGE_LEADERBOARD = 'large_leaderboard';
    case HALF_PAGE = 'half_page';
    case SKYSCRAPER = 'skyscraper';
    case WIDE_SKYSCRAPER = 'wide_skyscraper';
    case BANNER = 'banner';
    case HALF_BANNER = 'half_banner';
    case PORTRAIT = 'portrait';
    case BILLBOARD = 'billboard';
    case SKIN = 'skin';
    case INSTREAM = 'instream';
    case OUTSTREAM = 'outstream';
}
