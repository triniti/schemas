<?php

namespace Triniti\Schemas\Curator\Mixin\LinkTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait LinkTeaserV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'link_url' => $this->get('link_url'),
        ];
    }
}
