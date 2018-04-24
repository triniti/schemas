<?php

namespace Triniti\Schemas\Canvas\Mixin\SoundcloudAudioBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait SoundcloudAudioBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'track_id' => $this->get('track_id'),
            'autoplay' => $this->get('autoplay'),
            'show_comments' => $this->get('show_comments'),
            'show_recommendations' => $this->get('show_recommendations'),
            'show_overlay' => $this->get('show_overlay'),
            'poster_image_ref' => $this->get('poster_image_ref'),
        ];
    }
}
