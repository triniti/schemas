<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/youtube-video-teaser/1-0-1.json#
namespace Triniti\Schemas\Curator\Mixin\YoutubeVideoTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class YoutubeVideoTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:youtube-video-teaser:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('youtube_video_id', T\StringType::create())
                ->required()
                ->pattern('^[\w-]+$')
                ->build(),
            Fb::create('youtube_custom_id', T\StringType::create())
                ->pattern('^[\w@#-]+$')
                ->build(),
        ];
    }
}
