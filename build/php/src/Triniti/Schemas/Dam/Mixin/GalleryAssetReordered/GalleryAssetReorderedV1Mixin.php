<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/gallery-asset-reordered/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\GalleryAssetReordered;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class GalleryAssetReorderedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:gallery-asset-reordered:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            /*
             * The node ref for the gallery where the asset is used.
             */
            Fb::create('gallery_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * An integer value representing the order in which this asset will appear in a gallery.
             */
            Fb::create('gallery_seq', T\IntType::create())
                ->build(),
        ];
    }
}
