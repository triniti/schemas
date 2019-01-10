<?php

namespace Triniti\Schemas\Canvas\Mixin\SpotifyTrackBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait SpotifyTrackBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'track_id' => $this->get('track_id'),
        ];
    }
}
