<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\Asset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

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
            Fb::create('mime_type', T\StringType::create())
                ->required()
                ->pattern('^[-\w]+\/[-\w\+\.]+$')
                ->build(),
            /*
             * The file size of the uploaded asset in bytes.
             */
            Fb::create('file_size', T\BigIntType::create())
                ->build(),
            /*
             * An etag created from the contents of the uploaded asset. The asset etag is different from the
             * node's etag because the node tracks metadata, which can be updated without the asset being
             * changed. We should be able to determine whether the asset has changed based on the etag
             * of the asset regardless of its metadata.
             */
            Fb::create('asset_etag', T\StringType::create())
                ->maxLength(100)
                ->pattern('^[\w\.:-]+$')
                ->build(),
        ];
    }
}
