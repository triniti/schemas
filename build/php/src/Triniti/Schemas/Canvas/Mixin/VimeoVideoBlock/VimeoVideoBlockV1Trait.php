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
            'id' => $this->get('id'),
            'autoplay' => $this->get('autoplay'),
            'loop' => $this->get('loop'),
            'show_byline' => $this->get('show_byline'),
            'show_portrait' => $this->get('show_portrait'),
            'show_title' => $this->get('show_title'),
            'user_id' => $this->get('user_id'),
        ];
    }
}
