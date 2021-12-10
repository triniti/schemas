<?php
declare(strict_types=1);

namespace Triniti\Schemas\Taxonomy\Enum;

enum SearchCategoriesSort: string
{
    case UNKNOWN = 'unknown';
    case RELEVANCE = 'relevance';
    case POPULARITY = 'popularity';
    case CREATED_AT_ASC = 'created-at-asc';
    case CREATED_AT_DESC = 'created-at-desc';
    case UPDATED_AT_ASC = 'updated-at-asc';
    case UPDATED_AT_DESC = 'updated-at-desc';
    case TITLE_ASC = 'title-asc';
    case TITLE_DESC = 'title-desc';
}
