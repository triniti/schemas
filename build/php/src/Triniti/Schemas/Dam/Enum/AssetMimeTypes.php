<?php

namespace Triniti\Schemas\Dam\Enum;

use Gdbots\Common\Enum;

/**
 * @method static AssetMimeTypes AUDIO()
 * @method static AssetMimeTypes DOCUMENT()
 * @method static AssetMimeTypes IMAGE()
 * @method static AssetMimeTypes TEXT()
 * @method static AssetMimeTypes UNKNOWN()
 * @method static AssetMimeTypes VIDEO()
 */
final class AssetMimeTypes extends Enum
{
    const AUDIO = 'audio';
    const DOCUMENT = 'document';
    const IMAGE = 'image';
    const TEXT = 'text';
    const UNKNOWN = 'unknown';
    const VIDEO = 'video';
}
