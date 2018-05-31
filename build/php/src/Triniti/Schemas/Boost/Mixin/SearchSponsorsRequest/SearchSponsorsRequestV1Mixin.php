<?php
// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/search-sponsors-request/1-0-0.json#
namespace Triniti\Schemas\Boost\Mixin\SearchSponsorsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Boost\Enum\SearchSponsorsSort;

final class SearchSponsorsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:boost:mixin:search-sponsors-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchSponsorsSort::RELEVANCE())
                ->className(SearchSponsorsSort::class)
                ->build(),
        ];
    }
}
