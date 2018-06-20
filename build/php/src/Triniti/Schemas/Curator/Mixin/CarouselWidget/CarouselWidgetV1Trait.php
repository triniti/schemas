<?php

namespace Triniti\Schemas\Curator\Mixin\CarouselWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait CarouselWidgetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'show_captions' => $this->get('show_captions'),
            'show_controls' => $this->get('show_controls'),
            'show_position_indicators' => $this->get('show_position_indicators'),
        ];
    }
}
