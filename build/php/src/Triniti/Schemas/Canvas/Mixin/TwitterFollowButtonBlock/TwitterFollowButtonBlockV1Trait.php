<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterFollowButtonBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterFollowButtonBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'screen_name' => $this->get('screen_name'),
            'show_screen_name' => $this->get('show_screen_name'),
            'show_count' => $this->get('show_count'),
        ];
    }
}
