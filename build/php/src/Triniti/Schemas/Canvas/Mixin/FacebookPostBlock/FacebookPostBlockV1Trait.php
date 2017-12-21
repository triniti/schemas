<?php

namespace Triniti\Schemas\Canvas\Mixin\FacebookPostBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait FacebookPostBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'href' => $this->get('href'),
            'show_text' => $this->get('show_text'),
        ];
    }
}
