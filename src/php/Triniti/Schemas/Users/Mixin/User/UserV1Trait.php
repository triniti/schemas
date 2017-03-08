<?php

namespace Triniti\Schemas\Users\Mixin\User;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait UserV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['user_id' => (string)$this->get('_id')];
    }
}
