<?php

namespace Triniti\Schemas\Curator\Mixin\Timeline;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TimelineV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slug' => $this->get('slug'),
        ];
    }
}
