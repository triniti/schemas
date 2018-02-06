<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\Asset;

use Gdbots\Pbj\AbstractMixin;
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
             * A set of noderefs that identify entities which have been associated with
             * this asset.
             */
            Fb::create('associated_refs', T\IdentifierType::create())
                ->asASet()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
