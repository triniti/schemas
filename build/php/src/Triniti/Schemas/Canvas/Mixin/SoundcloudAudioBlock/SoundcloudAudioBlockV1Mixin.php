<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/soundcloud-audio-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SoundcloudAudioBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class SoundcloudAudioBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:soundcloud-audio-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('track_id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('autoplay', T\BooleanType::create())
                ->build(),
            Fb::create('show_comments', T\BooleanType::create())
                ->build(),
            Fb::create('show_recommendations', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('show_overlay', T\TextType::create())
                ->maxLength(500)
                ->build(),
            /*
             * A reference to an image asset to use as the poster that will
             * override what is provided by vimeo.
             */
            Fb::create('poster_image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
