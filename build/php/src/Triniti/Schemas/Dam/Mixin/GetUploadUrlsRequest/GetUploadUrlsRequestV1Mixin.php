<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-upload-urls-request/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\GetUploadUrlsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Dam\AssetId;

final class GetUploadUrlsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:get-upload-urls-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('files', T\StringType::create())
                ->asAList()
                ->build(),
            /*
             * When requesting a url for a variant on an existing asset you should
             * provide the asset_id and the version and optionally the quality.
             */
            Fb::create('asset_id', T\IdentifierType::create())
                ->className(AssetId::class)
                ->build(),
            Fb::create('quality', T\StringType::create())
                ->pattern('^[\w\.-]+$')
                ->build(),
            Fb::create('version', T\StringType::create())
                ->pattern('^[\w\.-]+$')
                ->build(),
        ];
    }
}
