<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\VideoBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class VideoBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:video-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('autoplay', T\BooleanType::create())
                ->build(),
            Fb::create('muted', T\BooleanType::create())
                ->build(),
            Fb::create('start_at', T\SmallIntType::create())
                ->build(),
            Fb::create('show_more_videos', T\BooleanType::create())
                ->build(),
            /*
             * A reference to an image asset to use as the poster that will
             * override what is provided by the target video.
             */
            Fb::create('poster_image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
