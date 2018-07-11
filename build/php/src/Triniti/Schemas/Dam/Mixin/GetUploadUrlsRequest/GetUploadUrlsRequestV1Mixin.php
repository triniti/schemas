<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-upload-urls-request/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\GetUploadUrlsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

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
            Fb::create('quality', T\StringType::create())
                ->pattern('^[\w\.-]+$')
                ->build(),
            Fb::create('version', T\StringType::create())
                ->pattern('^[\w\.-]+$')
                ->build(),
        ];
    }
}
