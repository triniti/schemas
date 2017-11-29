<?php

namespace Triniti\Schemas\Videos\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchVideosSort UNKNOWN()
 * @method static SearchVideosSort RELEVANCE()
 * @method static SearchVideosSort CREATED_AT_DESC()
 * @method static SearchVideosSort CREATED_AT_ASC()
 * @method static SearchVideosSort UPDATED_AT_DESC()
 * @method static SearchVideosSort UPDATED_AT_ASC()
 */
final class SearchVideosSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
}
