<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-teasers-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchTeasersRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Enum\SearchTeasersSort;

final class SearchTeasersRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:search-teasers-request:1-0-0');
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
                ->withDefault(SearchTeasersSort::ORDER_DATE_DESC())
                ->className(SearchTeasersSort::class)
                ->build(),
        ];
    }
}