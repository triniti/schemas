<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/spotify-podcast-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SpotifyPodcastBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class SpotifyPodcastBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:spotify-podcast-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('episode_id', T\StringType::create())
                ->required()
                ->pattern('^\w+$')
                ->build(),
            Fb::create('show_id', T\StringType::create())
                ->required()
                ->pattern('^\w+$')
                ->build(),
        ];
    }
}
