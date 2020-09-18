<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/spotify-embed-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SpotifyEmbedBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SpotifyEmbedBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->get('etag'),
            'spotify_type' => $this->get('spotify_type'),
            'spotify_id' => $this->get('spotify_id'),
        ];
    }
}
