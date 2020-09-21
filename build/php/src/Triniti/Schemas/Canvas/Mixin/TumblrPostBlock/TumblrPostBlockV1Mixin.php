<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/tumblr-post-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TumblrPostBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait TumblrPostBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'href' => $this->fget('href'),
            'canonical_url' => $this->fget('canonical_url'),
        ];
    }
}
