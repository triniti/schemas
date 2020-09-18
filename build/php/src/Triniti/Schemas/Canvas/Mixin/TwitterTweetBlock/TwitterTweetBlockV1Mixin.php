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
            'etag' => $this->get('etag'),
            'screen_name' => $this->get('screen_name'),
            'tweet_id' => $this->get('tweet_id'),
            'hide_media' => $this->get('hide_media'),
            'hide_thread' => $this->get('hide_thread'),
        ];
    }
}
