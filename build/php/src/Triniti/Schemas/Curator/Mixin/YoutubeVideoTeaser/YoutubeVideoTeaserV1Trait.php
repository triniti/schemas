<?php

namespace Triniti\Schemas\Curator\Mixin\YoutubeVideoTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait YoutubeVideoTeaserV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'youtube_video_id' => $this->get('youtube_video_id'),
        ];
    }
}
