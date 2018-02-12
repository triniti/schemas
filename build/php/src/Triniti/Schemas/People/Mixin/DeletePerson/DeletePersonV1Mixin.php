<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/delete-person/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\DeletePerson;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeletePersonV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:delete-person:1-0-0');
    }
}
