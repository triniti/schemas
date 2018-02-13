<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\Video;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Ovp\Enum\TvpgRating;

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
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the image asset to use as the poster.
             */
            Fb::create('poster_image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
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
             * A credit is a short string used to publicly acknowledge the source/creator
             * of the video. e.g. "Fox News", "CNN".
             */
            Fb::create('credit', T\StringType::create())
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
            /*
             * URL to the caption file keyed by the language code, e.g. "en", "fr".
             */
            Fb::create('caption_urls', T\StringType::create())
                ->asAMap()
                ->format(Format::URL())
                ->build(),
            Fb::create('tvpg_rating', T\StringEnumType::create())
                ->className(TvpgRating::class)
                ->build(),
            /*
             * URL to the mezzanine video asset.
             */
            Fb::create('mezzanine_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * A reference to the mezzanine asset in DAM for this video.
             */
            Fb::create('mezzanine_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A tracking code for video clips that is used to correlate
             * various metrics with payouts to talent in the clip.
             */
            Fb::create('mpm', T\StringType::create())
                ->maxLength(50)
                ->pattern('^[\w\.-]+$')
                ->build(),
        ];
    }
}
