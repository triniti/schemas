<?php

namespace Triniti\Schemas\Curator\Mixin\GalleryWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait GalleryWidgetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
        ];
    }
}
