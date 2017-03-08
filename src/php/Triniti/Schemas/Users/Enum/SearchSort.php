<?php

namespace Triniti\Schemas\Users\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchSort UNKNOWN()
 * @method static SearchSort RELEVANCE()
 * @method static SearchSort CREATED_AT_DESC()
 * @method static SearchSort CREATED_AT_ASC()
 * @method static SearchSort UPDATED_AT_DESC()
 * @method static SearchSort UPDATED_AT_ASC()
 * @method static SearchSort FIRST_NAME_DESC()
 * @method static SearchSort FIRST_NAME_ASC()
 * @method static SearchSort LAST_NAME_DESC()
 * @method static SearchSort LAST_NAME_ASC()
 */
final class SearchSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const FIRST_NAME_DESC = 'first-name-desc';
    const FIRST_NAME_ASC = 'first-name-asc';
    const LAST_NAME_DESC = 'last-name-desc';
    const LAST_NAME_ASC = 'last-name-asc';
}
