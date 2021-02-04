<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchFlagsetsSort UNKNOWN()
 * @method static SearchFlagsetsSort CREATED_AT_ASC()
 * @method static SearchFlagsetsSort CREATED_AT_DESC()
 * @method static SearchFlagsetsSort UPDATED_AT_ASC()
 * @method static SearchFlagsetsSort UPDATED_AT_DESC()
 * @method static SearchFlagsetsSort TITLE_ASC()
 * @method static SearchFlagsetsSort TITLE_DESC()
 */
final class SearchFlagsetsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
