<?php

namespace Triniti\Schemas\Canvas\Mixin\ImgurPostBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait ImgurPostBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'id' => $this->get('id'),
            'context' => $this->get('context'),
        ];
    }
}
