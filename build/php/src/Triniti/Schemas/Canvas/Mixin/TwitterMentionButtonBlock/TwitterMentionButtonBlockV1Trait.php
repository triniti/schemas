<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterMentionButtonBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterMentionButtonBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'screen_name' => $this->get('screen_name'),
            'recommended_accounts' => $this->get('recommended_accounts'),
        ];
    }
}
