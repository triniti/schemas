<?php

namespace Triniti\Schemas\Canvas\Mixin\IframeBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait IframeBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'src' => $this->get('src'),
            'width' => $this->get('width'),
            'height' => $this->get('height'),
            'align' => $this->get('align'),
            'data' => $this->get('data'),
        ];
    }
}
