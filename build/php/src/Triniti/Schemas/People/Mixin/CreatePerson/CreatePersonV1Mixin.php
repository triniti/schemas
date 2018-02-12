<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/create-person/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\CreatePerson;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\People\Mixin\Person\Person as TrinitiPeoplePerson;

final class CreatePersonV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:create-person:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiPeoplePerson::class,
                ])
                ->build(),
        ];
    }
}
