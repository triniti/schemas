<?php

namespace Triniti\Schemas\Canvas\Mixin\PinterestBoardBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PinterestBoardBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'href' => $this->get('href'),
            'size' => $this->get('size'),
        ];
    }
}
