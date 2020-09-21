<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-tweet-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterTweetBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait TwitterTweetBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'screen_name' => $this->fget('screen_name'),
            'tweet_id' => $this->fget('tweet_id'),
            'hide_media' => $this->fget('hide_media'),
            'hide_thread' => $this->fget('hide_thread'),
        ];
    }
}
