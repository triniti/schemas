<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/spotify-embed-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SpotifyEmbedBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class SpotifyEmbedBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:spotify-embed-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The type portion of a Spotify URI.
             * @link https://developer.spotify.com/documentation/web-api/#spotify-uris-and-ids
             */
            Fb::create('spotify_type', T\StringType::create())
                ->required()
                ->pattern('^(album|artist|episode|playlist|show|track)$')
                ->build(),
            Fb::create('spotify_id', T\StringType::create())
                ->required()
                ->pattern('^\w+$')
                ->build(),
        ];
    }
}
