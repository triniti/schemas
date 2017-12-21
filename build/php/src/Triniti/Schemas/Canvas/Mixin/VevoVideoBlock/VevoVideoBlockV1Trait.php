<?php

namespace Triniti\Schemas\Canvas\Mixin\VevoVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait VevoVideoBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'isrc' => $this->get('isrc'),
            'autoplay' => $this->get('autoplay'),
        ];
    }
}
