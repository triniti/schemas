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
            Fb::create('id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('autoplay', T\BooleanType::create())
                ->build(),
            Fb::create('loop', T\BooleanType::create())
                ->build(),
            /*
             * Whether or not to show the byline (eg "from Dick Tracy") in the thumbnail.
             */
            Fb::create('show_byline', T\BooleanType::create())
                ->build(),
            /*
             * Whether or not to show the portrait (profile image) in the thumbnail.
             */
            Fb::create('show_portrait', T\BooleanType::create())
                ->build(),
            /*
             * Whether or not to show the video title in the thumbnail.
             */
            Fb::create('show_title', T\BooleanType::create())
                ->build(),
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('title', T\StringType::create())
                ->build(),
            Fb::create('user_name', T\StringType::create())
                ->pattern('^[\w\.-]+$')
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
