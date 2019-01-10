<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-promotions-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchPromotionsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Enum\SearchPromotionsSort;

final class SearchPromotionsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:search-promotions-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('slot', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * Used to search for promotions that will render at this time.
             */
            Fb::create('render_at', T\DateTimeType::create())
                ->build(),
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchPromotionsSort::RELEVANCE())
                ->className(SearchPromotionsSort::class)
                ->build(),
        ];
    }
}
