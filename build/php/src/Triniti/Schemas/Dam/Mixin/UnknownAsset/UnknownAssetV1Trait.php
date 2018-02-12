<?php

namespace Triniti\Schemas\Dam\Mixin\UnknownAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait UnknownAssetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['_id' => (string)$this->get('_id')];
    }
}
