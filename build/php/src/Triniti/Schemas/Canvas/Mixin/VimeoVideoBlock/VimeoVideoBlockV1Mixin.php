<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/vimeo-video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\VimeoVideoBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class VimeoVideoBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:vimeo-video-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('video_id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('autoplay', T\BooleanType::create())
                ->build(),
            Fb::create('loop', T\BooleanType::create())
                ->build(),
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('title', T\TextType::create())
                ->maxLength(500)
                ->build(),
            Fb::create('user_name', T\TextType::create())
                ->maxLength(50)
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
