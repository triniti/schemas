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
