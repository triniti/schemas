<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/youtube-video-teaser/1-0-1.json#
namespace Triniti\Schemas\Curator\Mixin\YoutubeVideoTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait YoutubeVideoTeaserV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->fget('_id'),
            'youtube_video_id' => $this->fget('youtube_video_id'),
        ];
    }
}
