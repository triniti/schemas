<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.jwplayer/event/media-synced/1-0-1.json#
namespace Triniti\Schemas\OvpJwplayer\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\NodeRef;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Dam\AssetId;

final class MediaSyncedV1 extends AbstractMessage implements
    MediaSynced,
    GdbotsPbjxEventV1,
    GdbotsCommonTaggableV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp.jwplayer:event:media-synced:1-0-1', __CLASS__,
            [
                Fb::create('node_ref', T\IdentifierType::create())
                    ->required()
                    ->className(NodeRef::class)
                    ->build(),
                Fb::create('jwplayer_media_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                /*
                 * The id of the image used to generate the jwplayer thumbnail.
                 */
                Fb::create('jwplayer_thumbnail_image_id', T\IdentifierType::create())
                    ->className(AssetId::class)
                    ->build(),
                /*
                 * The keys of the jwplayer captions that were generated.
                 */
                Fb::create('jwplayer_caption_keys', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w]+$')
                    ->build(),
            ],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
