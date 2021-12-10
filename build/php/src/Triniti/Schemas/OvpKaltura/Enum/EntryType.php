<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum EntryType: string
{
    case UNKNOWN = 'unknown';
    case AUTOMATIC = '-1';
    case CONFERENCE_ENTRY_SERVER = 'conference.CONFERENCE_ENTRY_SERVER';
    case EXTERNAL_MEDIA = 'externalMedia.externalMedia';
    case MEDIA_CLIP = '1';
    case MIX = '2';
    case PLAYLIST = '5';
    case DATA = '6';
    case LIVE_STREAM = '7';
    case LIVE_CHANNEL = '8';
    case DOCUMENT = '10';
}
