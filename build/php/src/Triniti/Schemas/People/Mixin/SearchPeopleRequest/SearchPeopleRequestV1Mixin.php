<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/search-people-request/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\SearchPeopleRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\People\Enum\SearchPeopleSort;

final class SearchPeopleRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:search-people-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('is_unlisted', T\TrinaryType::create())
                ->withDefault(2)
                ->build(),
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchPeopleSort::RELEVANCE())
                ->className(SearchPeopleSort::class)
                ->build(),
        ];
    }
}
