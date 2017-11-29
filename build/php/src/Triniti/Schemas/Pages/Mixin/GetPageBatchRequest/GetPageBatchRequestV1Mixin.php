<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/get-page-batch-request/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\GetPageBatchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPageBatchRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:get-page-batch-request:1-0-0');
    }
}
