<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/get-poll-request/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\GetPollRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPollRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:get-poll-request:1-0-0');
    }
}
