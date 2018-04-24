<?php

namespace Triniti\Schemas\Canvas\Mixin\VimeoVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait VimeoVideoBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'video_id' => $this->get('video_id'),
            'autoplay' => $this->get('autoplay'),
            'loop' => $this->get('autoplay'),
            'description' => $this->get('description'),
            'title' => $this->get('title'),
            'user_name' => $this->get('user_name'),
            'poster_image_ref' => $this->get('poster_image_ref'),
        ];
    }
}
