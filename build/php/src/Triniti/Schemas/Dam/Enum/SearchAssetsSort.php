<?php

namespace Triniti\Schemas\Dam\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchAssetsSort UNKNOWN()
 * @method static SearchAssetsSort RELEVANCE()
 * @method static SearchAssetsSort CREATED_AT_DESC()
 * @method static SearchAssetsSort CREATED_AT_ASC()
 * @method static SearchAssetsSort UPDATED_AT_DESC()
 * @method static SearchAssetsSort UPDATED_AT_ASC()
 * @method static SearchAssetsSort TITLE_DESC()
 * @method static SearchAssetsSort TITLE_ASC()
 * @method static SearchAssetsSort MIME_TYPE_DESC()
 * @method static SearchAssetsSort MIME_TYPE_ASC()
 */
final class SearchAssetsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_DESC = 'created-at-desc';
    const CREATED_AT_ASC = 'created-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const TITLE_DESC = 'title-desc';
    const TITLE_ASC = 'title-asc';
    const MIME_TYPE_DESC = 'mime-type-desc';
    const MIME_TYPE_ASC = 'mime-type-asc';
}
