<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/youtube-playlist-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\YoutubePlaylistBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait YoutubePlaylistBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'playlist_id' => $this->fget('playlist_id'),
            'video_id' => $this->fget('video_id'),
            'autoplay' => $this->fget('autoplay'),
        ];
    }
}
