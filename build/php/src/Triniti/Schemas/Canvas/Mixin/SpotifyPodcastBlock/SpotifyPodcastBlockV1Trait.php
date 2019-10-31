<?php

namespace Triniti\Schemas\Canvas\Mixin\SpotifyPodcastBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait SpotifyPodcastBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'episode_id' => $this->get('episode_id'),
            'show_id' => $this->get('show_id'),
        ];
    }
}
