<?php

namespace Triniti\Schemas\Pages\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchPagesSort UNKNOWN()
 * @method static SearchPagesSort RELEVANCE()
 * @method static SearchPagesSort CREATED_AT_DESC()
 * @method static SearchPagesSort CREATED_AT_ASC()
 * @method static SearchPagesSort UPDATED_AT_DESC()
 * @method static SearchPagesSort UPDATED_AT_ASC()
 */
final class SearchPagesSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
}
