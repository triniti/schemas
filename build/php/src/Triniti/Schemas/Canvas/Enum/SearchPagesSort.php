<?php
declare(strict_types=1);

namespace Triniti\Schemas\Canvas\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchPagesSort UNKNOWN()
 * @method static SearchPagesSort RELEVANCE()
 * @method static SearchPagesSort CREATED_AT_ASC()
 * @method static SearchPagesSort CREATED_AT_DESC()
 * @method static SearchPagesSort UPDATED_AT_ASC()
 * @method static SearchPagesSort UPDATED_AT_DESC()
 * @method static SearchPagesSort PUBLISHED_AT_ASC()
 * @method static SearchPagesSort PUBLISHED_AT_DESC()
 * @method static SearchPagesSort ORDER_DATE_ASC()
 * @method static SearchPagesSort ORDER_DATE_DESC()
 * @method static SearchPagesSort TITLE_ASC()
 * @method static SearchPagesSort TITLE_DESC()
 */
final class SearchPagesSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
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
