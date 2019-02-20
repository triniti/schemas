<?php

namespace Triniti\Schemas\News\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchArticlesSort UNKNOWN()
 * @method static SearchArticlesSort RELEVANCE()
 * @method static SearchArticlesSort POPULARITY()
 * @method static SearchArticlesSort CREATED_AT_ASC()
 * @method static SearchArticlesSort CREATED_AT_DESC()
 * @method static SearchArticlesSort UPDATED_AT_ASC()
 * @method static SearchArticlesSort UPDATED_AT_DESC()
 * @method static SearchArticlesSort PUBLISHED_AT_ASC()
 * @method static SearchArticlesSort PUBLISHED_AT_DESC()
 * @method static SearchArticlesSort ORDER_DATE_ASC()
 * @method static SearchArticlesSort ORDER_DATE_DESC()
 * @method static SearchArticlesSort TITLE_ASC()
 * @method static SearchArticlesSort TITLE_DESC()
 * @method static SearchArticlesSort COMMENTS()
 */
final class SearchArticlesSort extends Enum
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
    const COMMENTS = 'comments';
}
