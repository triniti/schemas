<?php

namespace Triniti\Schemas\Canvas\Mixin\PinterestPinBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PinterestPinBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'href' => $this->get('href'),
            'terse' => $this->get('terse'),
            'size' => $this->get('size'),
        ];
    }
}
