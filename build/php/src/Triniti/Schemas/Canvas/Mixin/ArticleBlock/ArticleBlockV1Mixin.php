<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/article-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\ArticleBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ArticleBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'node_ref' => $this->fget('node_ref'),
            'show_image' => $this->fget('show_image'),
        ];
    }
}
