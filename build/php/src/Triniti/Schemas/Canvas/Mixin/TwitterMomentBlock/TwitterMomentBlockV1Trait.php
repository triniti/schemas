<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterMomentBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterMomentBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'id' => $this->get('id'),
            'title' => $this->get('title'),
            'limit' => $this->get('limit'),
        ];
    }
}
