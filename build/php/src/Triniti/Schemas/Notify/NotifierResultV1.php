<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/notifier-result/1-0-0.json#
namespace Triniti\Schemas\Notify;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Triniti\Schemas\Notify\Mixin\AppleNewsNotifierResult\AppleNewsNotifierResultV1 as TrinitiNotifyAppleNewsNotifierResultV1;
use Triniti\Schemas\Notify\Mixin\AppleNewsNotifierResult\AppleNewsNotifierResultV1Mixin as TrinitiNotifyAppleNewsNotifierResultV1Mixin;

final class NotifierResultV1 extends AbstractMessage implements
    NotifierResult,
    GdbotsCommonTaggableV1,
    TrinitiNotifyAppleNewsNotifierResultV1
{

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:notify::notifier-result:1-0-0', __CLASS__,
            [
                Fb::create('ok', T\BooleanType::create())
                    ->withDefault(true)
                    ->build(),
                Fb::create('code', T\SmallIntType::create())
                    ->withDefault(0)
                    ->build(),
                Fb::create('error_name', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('error_message', T\TextType::create())
                    ->build(),
                /*
                 * When a notification is sent the platform/vendor often responds with a payload
                 * that describes the result. This field should contain a (de)serializable
                 * string, JSON is preferred.
                 */
                Fb::create('raw_response', T\TextType::create())
                    ->build(),
            ],
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
