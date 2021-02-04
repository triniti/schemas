<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/imgur-post-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\ImgurPostBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ImgurPostBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'id' => $this->fget('id'),
            'show_context' => $this->fget('show_context'),
        ];
    }
}
