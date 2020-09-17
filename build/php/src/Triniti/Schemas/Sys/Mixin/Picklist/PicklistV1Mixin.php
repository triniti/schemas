<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/picklist/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\Picklist;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PicklistV1Mixin
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
