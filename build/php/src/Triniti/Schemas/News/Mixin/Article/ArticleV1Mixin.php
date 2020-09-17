<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article/1-0-3.json#
namespace Triniti\Schemas\News\Mixin\Article;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ArticleV1Mixin
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
