<?php

namespace Triniti\Schemas\News\Mixin\Article;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait ArticleV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slug' => $this->get('slug'),
        ];
    }
}
