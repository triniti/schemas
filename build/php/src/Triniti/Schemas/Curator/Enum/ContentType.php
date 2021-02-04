<?php
declare(strict_types=1);

namespace Triniti\Schemas\Curator\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static ContentType UNKNOWN()
 * @method static ContentType ARTICLE()
 * @method static ContentType AUDIO()
 * @method static ContentType CATEGORY()
 * @method static ContentType GALLERY()
 * @method static ContentType IMAGE()
 * @method static ContentType LINK()
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
    const CATEGORY = 'category';
    const GALLERY = 'gallery';
    const IMAGE = 'image';
    const LINK = 'link';
    const POLL = 'poll';
    const PROFILE = 'profile';
    const QUOTE = 'quote';
    const SOLICIT = 'solicit';
    const TEXT = 'text';
    const VIDEO = 'video';
}
