<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterSearchTimelineBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterSearchTimelineBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'widget_id' => $this->get('widget_id'),
            'show_replies' => $this->get('show_replies'),
            'tweet_limit' => $this->get('tweet_limit'),
        ];
    }
}
