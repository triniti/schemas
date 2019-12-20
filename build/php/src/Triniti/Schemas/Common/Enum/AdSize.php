<?php

namespace Triniti\Schemas\Common\Enum;

use Gdbots\Common\Enum;

/**
 * @method static AdSize UNKNOWN()
 * @method static AdSize MEDIUM_RECTANGLE()
 * @method static AdSize MEDIUM_RECTANGLE_FLEX()
 * @method static AdSize LARGE_RECTANGLE()
 * @method static AdSize SQUARE()
 * @method static AdSize SMALL_SQUARE()
 * @method static AdSize LEADERBOARD()
 * @method static AdSize LEADERBOARD_FLEX()
 * @method static AdSize LARGE_LEADERBOARD()
 * @method static AdSize HALF_PAGE()
 * @method static AdSize SKYSCRAPER()
 * @method static AdSize WIDE_SKYSCRAPER()
 * @method static AdSize BANNER()
 * @method static AdSize HALF_BANNER()
 * @method static AdSize PORTRAIT()
 * @method static AdSize BILLBOARD()
 * @method static AdSize SKIN()
 * @method static AdSize INSTREAM()
 * @method static AdSize OUTSTREAM()
 */
final class AdSize extends Enum
{
    const UNKNOWN = 'unknown';
    const MEDIUM_RECTANGLE = 'medium_rectangle';
    const MEDIUM_RECTANGLE_FLEX = 'medium_rectangle_flex';
    const LARGE_RECTANGLE = 'large_rectangle';
    const SQUARE = 'square';
    const SMALL_SQUARE = 'small_square';
    const LEADERBOARD = 'leaderboard';
    const LEADERBOARD_FLEX = 'leaderboard_flex';
    const LARGE_LEADERBOARD = 'large_leaderboard';
    const HALF_PAGE = 'half_page';
    const SKYSCRAPER = 'skyscraper';
    const WIDE_SKYSCRAPER = 'wide_skyscraper';
    const BANNER = 'banner';
    const HALF_BANNER = 'half_banner';
    const PORTRAIT = 'portrait';
    const BILLBOARD = 'billboard';
    const SKIN = 'skin';
    const INSTREAM = 'instream';
    const OUTSTREAM = 'outstream';
}
