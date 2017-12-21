<?php

namespace Triniti\Schemas\Canvas\Mixin\YoutubePlaylistBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait YoutubePlaylistBlockV1Trait
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
