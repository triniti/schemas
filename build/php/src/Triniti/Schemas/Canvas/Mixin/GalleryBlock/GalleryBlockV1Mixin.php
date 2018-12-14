<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/gallery-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GalleryBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class GalleryBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:gallery-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('launch_text', T\StringType::create())
                ->build(),
            /*
             * A reference to an image asset to use as the poster that will
             * override what is provided by the target gallery.
             */
            Fb::create('poster_image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
