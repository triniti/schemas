<?php

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchTeasersSort UNKNOWN()
 * @method static SearchTeasersSort RELEVANCE()
 * @method static SearchTeasersSort POPULARITY()
 * @method static SearchTeasersSort CREATED_AT_DESC()
 * @method static SearchTeasersSort CREATED_AT_ASC()
 * @method static SearchTeasersSort UPDATED_AT_DESC()
 * @method static SearchTeasersSort UPDATED_AT_ASC()
 * @method static SearchTeasersSort PUBLISHED_AT_DESC()
 * @method static SearchTeasersSort PUBLISHED_AT_ASC()
 * @method static SearchTeasersSort ORDER_DATE_DESC()
 * @method static SearchTeasersSort ORDER_DATE_ASC()
 * @method static SearchTeasersSort TITLE_DESC()
 * @method static SearchTeasersSort TITLE_ASC()
 */
final class SearchTeasersSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const POPULARITY = 'popularity';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const PUBLISHED_AT_DESC = 'published-at-desc';
    const PUBLISHED_AT_ASC = 'published-at-asc';
    const ORDER_DATE_DESC = 'order-date-desc';
    const ORDER_DATE_ASC = 'order-date-asc';
    const TITLE_DESC = 'title-desc';
    const TITLE_ASC = 'title-asc';
}
