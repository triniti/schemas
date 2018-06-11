<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/reorder-gallery-assets/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\ReorderGalleryAssets;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ReorderGalleryAssetsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:reorder-gallery-assets:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A map of asset ids to gallery sequence numbers.
             */
            Fb::create('gallery_seq_numbers', T\IntType::create())
                ->asAMap()
                ->required()
                ->build(),
            /*
             * The node ref for the gallery containing the assets being reordered.
             */
            Fb::create('gallery_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
