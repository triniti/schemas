<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/get-person-request/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\GetPersonRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPersonRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:get-person-request:1-0-0');
    }
}