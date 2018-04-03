<?php

namespace Triniti\Schemas\Curator\Mixin\Promotion;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PromotionV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slot' => (string)$this->get('slot'),
        ];
    }
}
