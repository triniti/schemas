<?php

namespace Triniti\Schemas\Canvas\Mixin\AudioBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait AudioBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'node_ref' => (string)$this->get('node_ref'),
        ];
    }
}
