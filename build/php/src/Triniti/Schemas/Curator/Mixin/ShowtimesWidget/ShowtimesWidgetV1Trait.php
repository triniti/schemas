<?php

namespace Triniti\Schemas\Curator\Mixin\ShowtimesWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait ShowtimesWidgetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'show' => $this->get('show'),
        ];
    }
}
