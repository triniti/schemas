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
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'alpha_sort' => $this->fget('alpha_sort'),
            'allow_other' => $this->fget('allow_other'),
            'default_value' => $this->fget('default_value'),
        ];
    }
}
