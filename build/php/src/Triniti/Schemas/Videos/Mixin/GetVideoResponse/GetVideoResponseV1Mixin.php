<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/get-video-response/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\GetVideoResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Videos\Mixin\Video\Video as TrinitiVideosVideo;

final class GetVideoResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:get-video-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiVideosVideo::class,
                ])
                ->build(),
        ];
    }
}
