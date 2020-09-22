<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/image-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\ImageBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ImageBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'node_ref' => $this->fget('node_ref'),
            'is_nswf' => $this->fget('is_nswf'),
            'url' => $this->fget('url'),
            'fallback_src_url' => $this->fget('fallback_src_url'),
        ];
    }
}
