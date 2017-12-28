<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/get-poll-history-request/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\GetPollHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPollHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:get-poll-history-request:1-0-0');
    }
}
