<?php

namespace Triniti\Schemas\Curator\Mixin\BlogrollWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait BlogrollWidgetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'promotion_slot' => $this->get('promotion_slot'),
        ];
    }
}
