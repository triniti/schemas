<?php

namespace Triniti\Schemas\Dam\Mixin\ArchiveAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait ArchiveAssetV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['_id' => (string)$this->get('_id')];
    }
}
