<?php

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchWidgetsSort UNKNOWN()
 * @method static SearchWidgetsSort RELEVANCE()
 * @method static SearchWidgetsSort CREATED_AT_DESC()
 * @method static SearchWidgetsSort CREATED_AT_ASC()
 * @method static SearchWidgetsSort UPDATED_AT_DESC()
 * @method static SearchWidgetsSort UPDATED_AT_ASC()
 * @method static SearchWidgetsSort TITLE_DESC()
 * @method static SearchWidgetsSort TITLE_ASC()
 */
final class SearchWidgetsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const TITLE_DESC = 'title-desc';
    const TITLE_ASC = 'title-asc';
}
