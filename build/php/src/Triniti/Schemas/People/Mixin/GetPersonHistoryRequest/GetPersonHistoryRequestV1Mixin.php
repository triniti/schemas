<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/get-person-history-request/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\GetPersonHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPersonHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:get-person-history-request:1-0-0');
    }
}
