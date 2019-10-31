<?php

namespace Triniti\Schemas\Canvas\Mixin\SpotifyEmbedBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait SpotifyEmbedBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'spotify_type' => $this->get('spotify_type'),
            'spotify_id' => $this->get('spotify_id'),
        ];
    }
}
