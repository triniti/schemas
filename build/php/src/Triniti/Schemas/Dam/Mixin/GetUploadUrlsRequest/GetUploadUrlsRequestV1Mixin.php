<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-upload-urls-request/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\GetUploadUrlsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetUploadUrlsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:get-upload-urls-request:1-0-0');
    }
}
