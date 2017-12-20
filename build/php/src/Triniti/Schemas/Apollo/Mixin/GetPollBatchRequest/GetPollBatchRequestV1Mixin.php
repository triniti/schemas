<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/get-poll-batch-request/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\GetPollBatchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPollBatchRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:get-poll-batch-request:1-0-0');
    }
}
