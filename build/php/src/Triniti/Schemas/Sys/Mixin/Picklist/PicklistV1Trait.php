<?php

namespace Triniti\Schemas\Sys\Mixin\Picklist;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PicklistV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'alpha_sort' => $this->get('alpha_sort'),
            'allow_other' => $this->get('allow_other'),
            'default_value' => $this->get('default_value'),
        ];
    }
}
