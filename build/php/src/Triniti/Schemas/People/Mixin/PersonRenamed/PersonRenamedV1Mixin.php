<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person-renamed/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\PersonRenamed;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PersonRenamedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:person-renamed:1-0-0');
    }
}
