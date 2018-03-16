<?php

namespace Triniti\Schemas\Canvas\Mixin\TwitterCollectionTimelineBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TwitterCollectionTimelineBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'screen_name' => $this->get('screen_name'),
            'collection_id' => $this->get('collection_id'),
            'collection_title' => $this->get('collection_title'),
            'tweet_limit' => $this->get('tweet_limit'),
            'grid_view' => $this->get('grid_view'),
        ];
    }
}
