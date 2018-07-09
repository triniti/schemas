<?php

namespace Triniti\Schemas\Sys\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchRedirectsSort UNKNOWN()
 * @method static SearchRedirectsSort RELEVANCE()
 * @method static SearchRedirectsSort POPULARITY()
 * @method static SearchRedirectsSort CREATED_AT_ASC()
 * @method static SearchRedirectsSort CREATED_AT_DESC()
 * @method static SearchRedirectsSort UPDATED_AT_ASC()
 * @method static SearchRedirectsSort UPDATED_AT_DESC()
 * @method static SearchRedirectsSort TITLE_ASC()
 * @method static SearchRedirectsSort TITLE_DESC()
 */
final class SearchRedirectsSort extends Enum
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
