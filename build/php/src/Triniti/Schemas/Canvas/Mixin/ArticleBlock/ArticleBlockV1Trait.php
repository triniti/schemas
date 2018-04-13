<?php

namespace Triniti\Schemas\Canvas\Mixin\ArticleBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait ArticleBlockV1Trait
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
