<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator\Enum;

enum ContentType: string
{
    case UNKNOWN = 'unknown';
    case ARTICLE = 'article';
    case AUDIO = 'audio';
    case CATEGORY = 'category';
    case FORM = 'form';
    case GALLERY = 'gallery';
    case IMAGE = 'image';
    case LINK = 'link';
    case POLL = 'poll';
    case PROFILE = 'profile';
    case QUOTE = 'quote';
    case SOLICIT = 'solicit';
    case TEXT = 'text';
    case VIDEO = 'video';
}
