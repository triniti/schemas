<?php

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Common\Enum;

/**
 * @method static ContentType UNKNOWN()
 * @method static ContentType ARTICLE()
 * @method static ContentType AUDIO()
 * @method static ContentType GALLERY()
 * @method static ContentType LINK()
 * @method static ContentType PHOTO()
 * @method static ContentType POLL()
 * @method static ContentType PROFILE()
 * @method static ContentType QUOTE()
 * @method static ContentType SOLICIT()
 * @method static ContentType TEXT()
 * @method static ContentType VIDEO()
 */
final class ContentType extends Enum
{
    const UNKNOWN = 'unknown';
    const ARTICLE = 'article';
    const AUDIO = 'audio';
    const GALLERY = 'gallery';
    const LINK = 'link';
    const PHOTO = 'photo';
    const POLL = 'poll';
    const PROFILE = 'profile';
    const QUOTE = 'quote';
    const SOLICIT = 'solicit';
    const TEXT = 'text';
    const VIDEO = 'video';
}
