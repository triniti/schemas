<?php
declare(strict_types=1);

namespace Triniti\Schemas\Boost\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchSponsorsSort UNKNOWN()
 * @method static SearchSponsorsSort RELEVANCE()
 * @method static SearchSponsorsSort CREATED_AT_ASC()
 * @method static SearchSponsorsSort CREATED_AT_DESC()
 * @method static SearchSponsorsSort UPDATED_AT_ASC()
 * @method static SearchSponsorsSort UPDATED_AT_DESC()
 * @method static SearchSponsorsSort PUBLISHED_AT_ASC()
 * @method static SearchSponsorsSort PUBLISHED_AT_DESC()
 * @method static SearchSponsorsSort TITLE_ASC()
 * @method static SearchSponsorsSort TITLE_DESC()
 */
final class SearchSponsorsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const PUBLISHED_AT_ASC = 'published-at-asc';
    const PUBLISHED_AT_DESC = 'published-at-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
