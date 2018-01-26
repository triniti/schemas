<?php

namespace Triniti\Schemas\Canvas\Mixin\GoogleMapBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait GoogleMapBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'q' => $this->get('q'),
            'center' => (string)$this->get('center'),
            'zoom' => $this->get('zoom'),
            'maptype' => $this->get('maptype'),
        ];
    }
}
