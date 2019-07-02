<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/update-gallery-image-count/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\UpdateGalleryImageCount;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class UpdateGalleryImageCountV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:update-gallery-image-count:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the gallery to update.
             */
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
