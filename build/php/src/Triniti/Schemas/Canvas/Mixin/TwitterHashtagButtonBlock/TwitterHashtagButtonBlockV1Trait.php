<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterHashtagButtonBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterHashtagButtonBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'hashtag' => $this->get('hashtag'),
            'secondary_hashtags' => $this->get('secondary_hashtags'),
            'recommended_accounts' => $this->get('recommended_accounts'),
        ];
    }
}
