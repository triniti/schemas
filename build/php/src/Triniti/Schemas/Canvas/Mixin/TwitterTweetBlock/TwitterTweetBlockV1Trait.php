<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterTweetBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterTweetBlockV1Trait
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
            'hide_media' => $this->get('hide_media'),
            'hide_thread' => $this->get('hide_thread'),
        ];
    }
}
