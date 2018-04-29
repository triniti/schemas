<?php

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchGalleriesSort UNKNOWN()
 * @method static SearchGalleriesSort RELEVANCE()
 * @method static SearchGalleriesSort POPULARITY()
 * @method static SearchGalleriesSort CREATED_AT_ASC()
 * @method static SearchGalleriesSort CREATED_AT_DESC()
 * @method static SearchGalleriesSort UPDATED_AT_ASC()
 * @method static SearchGalleriesSort UPDATED_AT_DESC()
 * @method static SearchGalleriesSort PUBLISHED_AT_ASC()
 * @method static SearchGalleriesSort PUBLISHED_AT_DESC()
 * @method static SearchGalleriesSort ORDER_DATE_ASC()
 * @method static SearchGalleriesSort ORDER_DATE_DESC()
 * @method static SearchGalleriesSort TITLE_ASC()
 * @method static SearchGalleriesSort TITLE_DESC()
 */
final class SearchGalleriesSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const POPULARITY = 'popularity';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const PUBLISHED_AT_ASC = 'published-at-asc';
    const PUBLISHED_AT_DESC = 'published-at-desc';
    const ORDER_DATE_ASC = 'order-date-asc';
    const ORDER_DATE_DESC = 'order-date-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
