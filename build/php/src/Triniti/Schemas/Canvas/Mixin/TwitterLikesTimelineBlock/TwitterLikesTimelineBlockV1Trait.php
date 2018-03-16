<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterLikesTimelineBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterLikesTimelineBlockV1Trait
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
