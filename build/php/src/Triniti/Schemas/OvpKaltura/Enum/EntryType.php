<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static EntryType UNKNOWN()
 * @method static EntryType AUTOMATIC()
 * @method static EntryType CONFERENCE_ENTRY_SERVER()
 * @method static EntryType EXTERNAL_MEDIA()
 * @method static EntryType MEDIA_CLIP()
 * @method static EntryType MIX()
 * @method static EntryType PLAYLIST()
 * @method static EntryType DATA()
 * @method static EntryType LIVE_STREAM()
 * @method static EntryType LIVE_CHANNEL()
 * @method static EntryType DOCUMENT()
 */
final class EntryType extends Enum
{
    const UNKNOWN = 'unknown';
    const AUTOMATIC = '-1';
    const CONFERENCE_ENTRY_SERVER = 'conference.CONFERENCE_ENTRY_SERVER';
    const EXTERNAL_MEDIA = 'externalMedia.externalMedia';
    const MEDIA_CLIP = '1';
    const MIX = '2';
    const PLAYLIST = '5';
    const DATA = '6';
    const LIVE_STREAM = '7';
    const LIVE_CHANNEL = '8';
    const DOCUMENT = '10';
}
