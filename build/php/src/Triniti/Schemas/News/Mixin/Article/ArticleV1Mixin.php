<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article/1-0-4.json#
namespace Triniti\Schemas\News\Mixin\Article;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ArticleV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'slug' => $this->fget('slug'),
        ];
    }
}
