<?php

namespace Triniti\Schemas\Curator\Mixin\AssetTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait AssetTeaserV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'target_ref' => (string)$this->get('target_ref'),
        ];
    }
}
