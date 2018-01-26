<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-upload-urls-response/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\GetUploadUrlsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Dam\AssetId;

final class GetUploadUrlsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:get-upload-urls-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A map of asset ids with an md5 hash of the client file name as the
             * key and the generated asset id as the value.
             */
            Fb::create('asset_ids', T\IdentifierType::create())
                ->asAMap()
                ->className(AssetId::class)
                ->build(),
            /*
             * A map of URLs with an md5 hash of the client file name as the key
             * and the S3 presigned URL as the value.
             */
            Fb::create('s3_presigned_urls', T\TextType::create())
                ->asAMap()
                ->format(Format::URL())
                ->build(),
        ];
    }
}
