<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/spotify-track-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SpotifyTrackBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SpotifyTrackBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'track_id' => $this->fget('track_id'),
        ];
    }
}
