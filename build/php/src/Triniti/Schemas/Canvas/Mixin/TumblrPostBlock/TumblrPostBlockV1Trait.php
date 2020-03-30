<?php

namespace Triniti\Schemas\Canvas\Mixin\TumblrPostBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TumblrPostBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'href' => $this->get('href'),
            'canonical_url' => $this->get('canonical_url'),
        ];
    }
}
