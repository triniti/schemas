<?php
declare(strict_types=1);

namespace Triniti\Schemas\Dam\Enum;

enum SearchAssetsSort: string
{
    case UNKNOWN = 'unknown';
    case RELEVANCE = 'relevance';
    case CREATED_AT_ASC = 'created-at-asc';
    case CREATED_AT_DESC = 'created-at-desc';
    case UPDATED_AT_ASC = 'updated-at-asc';
    case UPDATED_AT_DESC = 'updated-at-desc';
    case TITLE_ASC = 'title-asc';
    case TITLE_DESC = 'title-desc';
    case MIME_TYPE_ASC = 'mime-type-asc';
    case MIME_TYPE_DESC = 'mime-type-desc';
    case GALLERY_SEQ_ASC = 'gallery-seq-asc';
    case GALLERY_SEQ_DESC = 'gallery-seq-desc';
}
