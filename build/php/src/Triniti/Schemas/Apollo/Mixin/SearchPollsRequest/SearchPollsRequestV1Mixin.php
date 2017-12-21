<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/search-polls-request/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\SearchPollsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Apollo\Enum\SearchPollsSort;

final class SearchPollsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:search-polls-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchPollsSort::RELEVANCE())
                ->className(SearchPollsSort::class)
                ->build(),
        ];
    }
}