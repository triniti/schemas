<?php

namespace Triniti\Schemas\Canvas\Mixin\Iframe;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait IframeV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'src' => $this->get('src'),
        ];
    }
}
