<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/search-people-response/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\SearchPeopleResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\People\Mixin\Person\Person as TrinitiPeoplePerson;

final class SearchPeopleResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:search-people-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiPeoplePerson::class,
                ])
                ->build(),
        ];
    }
}
