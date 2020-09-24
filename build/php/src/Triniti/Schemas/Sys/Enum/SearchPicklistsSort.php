<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchPicklistsSort UNKNOWN()
 * @method static SearchPicklistsSort CREATED_AT_ASC()
 * @method static SearchPicklistsSort CREATED_AT_DESC()
 * @method static SearchPicklistsSort UPDATED_AT_ASC()
 * @method static SearchPicklistsSort UPDATED_AT_DESC()
 * @method static SearchPicklistsSort TITLE_ASC()
 * @method static SearchPicklistsSort TITLE_DESC()
 */
final class SearchPicklistsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
