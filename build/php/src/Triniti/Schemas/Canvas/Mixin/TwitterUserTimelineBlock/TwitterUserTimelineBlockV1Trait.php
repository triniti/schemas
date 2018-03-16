<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterUserTimelineBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterUserTimelineBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'screen_name' => $this->get('screen_name'),
            'tweet_limit' => $this->get('tweet_limit'),
        ];
    }
}
