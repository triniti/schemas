<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/facebook-video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\FacebookVideoBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class FacebookVideoBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:facebook-video-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('href', T\StringType::create())
                ->required()
                ->format(Format::URL())
                ->build(),
            Fb::create('autoplay', T\BooleanType::create())
                ->build(),
            Fb::create('show_text', T\BooleanType::create())
                ->build(),
            Fb::create('show_captions', T\BooleanType::create())
                ->build(),
            /*
             * A reference to an image asset to use as the poster that will
             * override what is provided by facebook.
             */
            Fb::create('poster_image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
