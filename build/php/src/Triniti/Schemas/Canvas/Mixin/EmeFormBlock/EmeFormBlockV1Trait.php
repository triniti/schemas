<?php

namespace Triniti\Schemas\Canvas\Mixin\EmeFormBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait EmeFormBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'solicit_id' => $this->get('solicit_id'),
            'expiration_date' => $this->get('expiration_date'),
        ];
    }
}
