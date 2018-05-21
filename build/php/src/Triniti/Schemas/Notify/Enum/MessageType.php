<?php

namespace Triniti\Schemas\Notify\Enum;

use Gdbots\Common\Enum;

/**
 * @method static MessageType UNKNOWN()
 * @method static MessageType ARTICLE()
 * @method static MessageType VIDEO()
 * @method static MessageType GALLERY()
 * @method static MessageType GENERAL()
 */
final class MessageType extends Enum
{
    const UNKNOWN = 'unknown';
    const ARTICLE = 'article';
    const VIDEO = 'video';
    const GALLERY = 'gallery';
    const GENERAL = 'general';
}
