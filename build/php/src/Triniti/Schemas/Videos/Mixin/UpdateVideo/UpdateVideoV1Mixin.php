<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/update-video/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\UpdateVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Videos\Mixin\Video\Video as TrinitiVideosVideo;

final class UpdateVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:update-video:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('new_node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiVideosVideo::class,
                ])
                ->build(),
            /*
             * The entire node, as it appeared before it was modified.
             */
            Fb::create('old_node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiVideosVideo::class,
                ])
                ->build(),
        ];
    }
}
