<?php

namespace Triniti\Schemas\Taxonomy\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchCategoriesSort UNKNOWN()
 * @method static SearchCategoriesSort RELEVANCE()
 * @method static SearchCategoriesSort POPULARITY()
 * @method static SearchCategoriesSort CREATED_AT_ASC()
 * @method static SearchCategoriesSort CREATED_AT_DESC()
 * @method static SearchCategoriesSort UPDATED_AT_ASC()
 * @method static SearchCategoriesSort UPDATED_AT_DESC()
 * @method static SearchCategoriesSort TITLE_ASC()
 * @method static SearchCategoriesSort TITLE_DESC()
 */
final class SearchCategoriesSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const POPULARITY = 'popularity';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
