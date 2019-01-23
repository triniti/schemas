<?php

namespace Triniti\Schemas\Curator\Mixin\AlertWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait AlertWidgetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'dismissible' => $this->get('dismissible'),
        ];
    }
}
