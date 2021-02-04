<?php
declare(strict_types=1);

namespace Triniti\Schemas\Taxonomy\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static SearchChannelsSort UNKNOWN()
 * @method static SearchChannelsSort CREATED_AT_ASC()
 * @method static SearchChannelsSort CREATED_AT_DESC()
 * @method static SearchChannelsSort UPDATED_AT_ASC()
 * @method static SearchChannelsSort UPDATED_AT_DESC()
 * @method static SearchChannelsSort TITLE_ASC()
 * @method static SearchChannelsSort TITLE_DESC()
 */
final class SearchChannelsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
