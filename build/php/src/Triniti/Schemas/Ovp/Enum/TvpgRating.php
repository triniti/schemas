<?php

namespace Triniti\Schemas\Ovp\Enum;

use Gdbots\Common\Enum;

/**
 * @method static TvpgRating UNKNOWN()
 * @method static TvpgRating TV_G()
 * @method static TvpgRating TV_MA()
 * @method static TvpgRating TV_PG()
 * @method static TvpgRating TV_Y()
 * @method static TvpgRating TV_Y7()
 * @method static TvpgRating TV_Y7_FV()
 * @method static TvpgRating TV_14()
 */
final class TvpgRating extends Enum
{
    const UNKNOWN = 'unknown';
    const TV_G = 'TV-G';
    const TV_MA = 'TV-MA';
    const TV_PG = 'TV-PG';
    const TV_Y = 'TV-Y';
    const TV_Y7 = 'TV-Y7';
    const TV_Y7_FV = 'TV-Y7-FV';
    const TV_14 = 'TV-14';
}
