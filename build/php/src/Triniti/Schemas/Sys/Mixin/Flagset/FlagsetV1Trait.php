<?php

namespace Triniti\Schemas\Sys\Mixin\Flagset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait FlagsetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'value' => $this->get('value'),
        ];
    }
}
