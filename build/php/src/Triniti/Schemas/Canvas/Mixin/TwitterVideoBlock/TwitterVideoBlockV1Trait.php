<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterVideoBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'screen_name' => $this->get('screen_name'),
            'tweet_id' => $this->get('tweet_id'),
        ];
    }
}
