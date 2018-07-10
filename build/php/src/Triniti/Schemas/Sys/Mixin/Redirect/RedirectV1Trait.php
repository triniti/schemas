<?php

namespace Triniti\Schemas\Sys\Mixin\Redirect;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait RedirectV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'redirect_uri' => $this->get('redirect_uri'),
            'request_uri' => $this->get('request_uri'),
            'is_vanity' => $this->get('is_vanity'),
        ];
    }
}
