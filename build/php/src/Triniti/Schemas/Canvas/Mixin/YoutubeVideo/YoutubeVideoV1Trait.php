<?php

namespace Triniti\Schemas\Canvas\Mixin\YoutubeVideo;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait YoutubeVideoV1Trait
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
        ];
    }
}
