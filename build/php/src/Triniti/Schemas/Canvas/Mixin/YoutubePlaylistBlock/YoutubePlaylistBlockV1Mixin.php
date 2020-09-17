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
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'playlist_id' => $this->get('playlist_id'),
            'video_id' => $this->get('video_id'),
            'autoplay' => $this->get('autoplay'),
        ];
    }
}
