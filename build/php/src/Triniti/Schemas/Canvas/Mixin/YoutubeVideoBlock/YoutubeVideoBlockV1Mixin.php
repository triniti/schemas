<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/youtube-video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\YoutubeVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait YoutubeVideoBlockV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'id' => $this->get('id'),
            'autoplay' => $this->get('autoplay'),
            'start_at' => $this->get('start_at'),
        ];
    }
}
