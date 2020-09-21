<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/google-map-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GoogleMapBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait GoogleMapBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'q' => $this->fget('q'),
            'center' => (string)$this->fget('center'),
            'zoom' => $this->fget('zoom'),
            'maptype' => $this->fget('maptype'),
        ];
    }
}
