<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/notifier-result/1-0-0.json#
namespace Triniti\Schemas\Notify;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;

final class NotifierResultV1 extends AbstractMessage implements
    NotifierResult,
    GdbotsCommonTaggableV1
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
                Fb::create('apple_news_article_id', T\TextType::create())
                    ->build(),
                Fb::create('apple_news_share_url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
                Fb::create('apple_news_revision_token', T\TextType::create())
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
