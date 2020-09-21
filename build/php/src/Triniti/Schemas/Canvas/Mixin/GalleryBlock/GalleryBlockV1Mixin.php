<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/gallery-block/1-0-2.json#
namespace Triniti\Schemas\Canvas\Mixin\GalleryBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait GalleryBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'node_ref' => (string)$this->fget('node_ref'),
        ];
    }
}
