<?php
declare(strict_types=1);

namespace Triniti\Schemas\Apollo\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchPollsSort UNKNOWN()
 * @method static SearchPollsSort RELEVANCE()
 * @method static SearchPollsSort POPULARITY()
 * @method static SearchPollsSort CREATED_AT_ASC()
 * @method static SearchPollsSort CREATED_AT_DESC()
 * @method static SearchPollsSort UPDATED_AT_ASC()
 * @method static SearchPollsSort UPDATED_AT_DESC()
 * @method static SearchPollsSort PUBLISHED_AT_ASC()
 * @method static SearchPollsSort PUBLISHED_AT_DESC()
 * @method static SearchPollsSort ORDER_DATE_ASC()
 * @method static SearchPollsSort ORDER_DATE_DESC()
 * @method static SearchPollsSort TITLE_ASC()
 * @method static SearchPollsSort TITLE_DESC()
 */
final class SearchPollsSort extends Enum
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
