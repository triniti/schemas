<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\Asset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Dam\AssetId;

final class AssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->className(AssetId::class)
                ->build(),
            /*
             * The title for public display.
             */
            Fb::create('display_title', T\StringType::create())
                ->build(),
            Fb::create('mime_type', T\StringType::create())
                ->required()
                ->pattern('^[\w-]+\/[\w\+\.-]+$')
                ->build(),
            /*
             * The file size in bytes.
             */
            Fb::create('file_size', T\BigIntType::create())
                ->build(),
            /*
             * An etag created from the file itself. The file etag is different from the
             * node's etag because the node tracks metadata, which can be updated without
             * the file being changed.
             */
            Fb::create('file_etag', T\StringType::create())
                ->maxLength(100)
                ->pattern('^[\w\.:-]+$')
                ->build(),
            /*
             * A description of the asset (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            /*
             * A credit is a short string used to publicly acknowledge the source/creator
             * of the asset. e.g. "Fox News", "CNN".
             */
            Fb::create('credit', T\StringType::create())
                ->build(),
            /*
             * A URL to the credited source/creator of the asset.
             */
            Fb::create('credit_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * A call to action for the asset. e.g. "Click here for more".
             */
            Fb::create('cta_text', T\StringType::create())
                ->build(),
            /*
             * A URL to use with the call to action.
             */
            Fb::create('cta_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * A set of node refs which have been linked to this asset.
             */
            Fb::create('linked_refs', T\IdentifierType::create())
                ->asASet()
                ->className(NodeRef::class)
                ->build(),
            /*
             * A node ref referencing the gallery where the asset is used.
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
