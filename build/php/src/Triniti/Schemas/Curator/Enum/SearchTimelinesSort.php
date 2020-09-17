<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchTimelinesSort UNKNOWN()
 * @method static SearchTimelinesSort RELEVANCE()
 * @method static SearchTimelinesSort POPULARITY()
 * @method static SearchTimelinesSort CREATED_AT_ASC()
 * @method static SearchTimelinesSort CREATED_AT_DESC()
 * @method static SearchTimelinesSort UPDATED_AT_ASC()
 * @method static SearchTimelinesSort UPDATED_AT_DESC()
 * @method static SearchTimelinesSort PUBLISHED_AT_ASC()
 * @method static SearchTimelinesSort PUBLISHED_AT_DESC()
 * @method static SearchTimelinesSort ORDER_DATE_ASC()
 * @method static SearchTimelinesSort ORDER_DATE_DESC()
 * @method static SearchTimelinesSort TITLE_ASC()
 * @method static SearchTimelinesSort TITLE_DESC()
 */
final class SearchTimelinesSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const POPULARITY = 'popularity';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const PUBLISHED_AT_ASC = 'published-at-asc';
    const PUBLISHED_AT_DESC = 'published-at-desc';
    const ORDER_DATE_ASC = 'order-date-asc';
    const ORDER_DATE_DESC = 'order-date-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
