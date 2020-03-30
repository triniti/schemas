<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video/1-0-4.json#
namespace Triniti\Schemas\Ovp\Mixin\Video;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Ovp\Enum\TvpgRating;
use Triniti\Schemas\Ovp\VideoId;

final class VideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video:1-0-4');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return VideoId::generate(); })
                ->className(VideoId::class)
                ->overridable(true)
                ->build(),
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
            Fb::create('is_live', T\BooleanType::create())
                ->build(),
            /*
             * URL to the m3u8 for the live stream.
             */
            Fb::create('live_m3u8_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('is_full_episode', T\BooleanType::create())
                ->build(),
            Fb::create('is_promo', T\BooleanType::create())
                ->build(),
            Fb::create('launch_text', T\StringType::create())
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
            Fb::create('sharing_enabled', T\BooleanType::create())
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
             * Determines if the related videos should render. This is intended as a flag
             * on blogroll/lists, not the permalink of a video where you'd always expect
             * to see the related videos.
             */
            Fb::create('show_related_videos', T\BooleanType::create())
                ->build(),
            Fb::create('related_videos_heading', T\StringType::create())
                ->build(),
            Fb::create('related_video_refs', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the caption asset in DAM for this video.
             */
            Fb::create('caption_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * URL to the caption file keyed by the language code, e.g. "en", "fr".
             */
            Fb::create('caption_urls', T\TextType::create())
                ->asAMap()
                ->format(Format::URL())
                ->build(),
            Fb::create('tvpg_rating', T\StringEnumType::create())
                ->className(TvpgRating::class)
                ->build(),
            /*
             * URL to the mezzanine video asset.
             */
            Fb::create('mezzanine_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * A reference to the mezzanine asset in DAM for this video.
             */
            Fb::create('mezzanine_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * URL to the playable sources keyed by the type, e.g. "hls", "mp4".
             */
            Fb::create('source_urls', T\TextType::create())
                ->asAMap()
                ->format(Format::URL())
                ->build(),
            /*
             * A tracking code for video clips that is used to correlate
             * various metrics with payouts to talent in the clip.
             */
            Fb::create('mpm', T\StringType::create())
                ->maxLength(50)
                ->pattern('^[\w\.-]+$')
                ->build(),
            Fb::create('original_air_date', T\DateTimeType::create())
                ->build(),
            Fb::create('show', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * A reference to the audio asset for this video.
             */
            Fb::create('audio_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('youtube_video_id', T\StringType::create())
                ->pattern('^[\w-]+$')
                ->build(),
            Fb::create('youtube_custom_id', T\StringType::create())
                ->pattern('^[\w@#-]+$')
                ->build(),
        ];
    }
}
