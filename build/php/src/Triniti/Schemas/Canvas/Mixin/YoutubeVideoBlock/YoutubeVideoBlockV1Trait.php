<?php

namespace Triniti\Schemas\Canvas\Mixin\YoutubeVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait YoutubeVideoBlockV1Trait
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
