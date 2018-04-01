<?php

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchPromotionsSort UNKNOWN()
 * @method static SearchPromotionsSort RELEVANCE()
 * @method static SearchPromotionsSort CREATED_AT_DESC()
 * @method static SearchPromotionsSort CREATED_AT_ASC()
 * @method static SearchPromotionsSort UPDATED_AT_DESC()
 * @method static SearchPromotionsSort UPDATED_AT_ASC()
 * @method static SearchPromotionsSort PUBLISHED_AT_DESC()
 * @method static SearchPromotionsSort PUBLISHED_AT_ASC()
 * @method static SearchPromotionsSort TITLE_DESC()
 * @method static SearchPromotionsSort TITLE_ASC()
 */
final class SearchPromotionsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const PUBLISHED_AT_DESC = 'published-at-desc';
    const PUBLISHED_AT_ASC = 'published-at-asc';
    const TITLE_DESC = 'title-desc';
    const TITLE_ASC = 'title-asc';
}
