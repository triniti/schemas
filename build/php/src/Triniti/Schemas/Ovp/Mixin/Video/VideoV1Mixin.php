<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\Video;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class VideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * Duration of the video in seconds.
             */
            Fb::create('duration', T\SmallIntType::create())
                ->build(),
            Fb::create('has_music', T\TrinaryType::create())
                ->build(),
            Fb::create('allow_comments', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * A description of the video (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            /*
             * A swipe (aka banner/label/overlay) is a short string used in a visual treatment
             * on the video. e.g. "Exclusive", "NSFW", "Breaking Bad Mojo".
             */
            Fb::create('swipe', T\StringType::create())
                ->build(),
            Fb::create('related_videos', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
