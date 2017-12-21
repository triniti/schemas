<?php

namespace Triniti\Schemas\Canvas\Mixin\FacebookVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait FacebookVideoBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'href' => $this->get('href'),
            'autoplay' => $this->get('autoplay'),
            'show_text' => $this->get('show_text'),
            'show_captions' => $this->get('show_captions'),
        ];
    }
}
