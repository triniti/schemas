<?php

namespace Triniti\Schemas\Canvas\Mixin\InstagramMediaBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait InstagramMediaBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'id' => $this->get('id'),
            'hidecaption' => $this->get('hidecaption'),
        ];
    }
}
