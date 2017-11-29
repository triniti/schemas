<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/search-videos-response/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\SearchVideosResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Videos\Mixin\Video\Video as TrinitiVideosVideo;

final class SearchVideosResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:search-videos-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiVideosVideo::class,
                ])
                ->build(),
        ];
    }
}
