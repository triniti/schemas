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
            'uri' => $this->get('title'),
            'redirect_to' => $this->get('redirect_to'),
            'is_permanent' => $this->get('is_permanent'),
            'is_vanity' => $this->get('is_vanity'),
        ];
    }
}
