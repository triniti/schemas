<?php

namespace Triniti\Schemas\People\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchPeopleSort UNKNOWN()
 * @method static SearchPeopleSort RELEVANCE()
 * @method static SearchPeopleSort POPULARITY()
 * @method static SearchPeopleSort CREATED_AT_DESC()
 * @method static SearchPeopleSort CREATED_AT_ASC()
 * @method static SearchPeopleSort UPDATED_AT_DESC()
 * @method static SearchPeopleSort UPDATED_AT_ASC()
 * @method static SearchPeopleSort TITLE_DESC()
 * @method static SearchPeopleSort TITLE_ASC()
 */
final class SearchPeopleSort extends Enum
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
