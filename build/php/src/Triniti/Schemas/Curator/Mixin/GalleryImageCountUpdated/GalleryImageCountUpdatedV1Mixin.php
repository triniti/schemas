<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery-image-count-updated/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GalleryImageCountUpdated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class GalleryImageCountUpdatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:gallery-image-count-updated:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the gallery updated.
             */
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('image_count', T\MediumIntType::create())
                ->build(),
        ];
    }
}
