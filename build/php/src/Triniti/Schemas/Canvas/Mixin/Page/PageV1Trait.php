<?php

namespace Triniti\Schemas\Canvas\Mixin\Page;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PageV1Trait
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
