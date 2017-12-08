<?php

namespace Triniti\Schemas\News\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchArticlesSort UNKNOWN()
 * @method static SearchArticlesSort RELEVANCE()
 * @method static SearchArticlesSort POPULARITY()
 * @method static SearchArticlesSort CREATED_AT_DESC()
 * @method static SearchArticlesSort CREATED_AT_ASC()
 * @method static SearchArticlesSort UPDATED_AT_DESC()
 * @method static SearchArticlesSort UPDATED_AT_ASC()
 * @method static SearchArticlesSort TITLE_DESC()
 * @method static SearchArticlesSort TITLE_ASC()
 */
final class SearchArticlesSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const POPULARITY = 'popularity';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const TITLE_DESC = 'title-desc';
    const TITLE_ASC = 'title-asc';
}
