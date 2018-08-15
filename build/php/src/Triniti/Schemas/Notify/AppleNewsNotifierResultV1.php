<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/apple-news-notifier-result/1-0-0.json#
namespace Triniti\Schemas\Notify;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Triniti\Schemas\Notify\Mixin\AppleNewsNotifierResult\AppleNewsNotifierResultV1 as TrinitiNotifyAppleNewsNotifierResultV1;
use Triniti\Schemas\Notify\Mixin\AppleNewsNotifierResult\AppleNewsNotifierResultV1Mixin as TrinitiNotifyAppleNewsNotifierResultV1Mixin;

final class AppleNewsNotifierResultV1 extends AbstractMessage implements
    AppleNewsNotifierResult,
    GdbotsCommonTaggableV1,
    TrinitiNotifyAppleNewsNotifierResultV1
{

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:notify::apple-news-notifier-result:1-0-0', __CLASS__,
            [],
            [
                GdbotsCommonTaggableV1Mixin::create(),
                TrinitiNotifyAppleNewsNotifierResultV1Mixin::create(),
            ]
        );
    }

    /**
     * @param string $tag
     * @return MessageRef
     */
    public function generateMessageRef($tag = null)
    {
        return new MessageRef(static::schema()->getCurie(), $this->generateEtag(), $tag);
    }
    
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [];
    }
}
