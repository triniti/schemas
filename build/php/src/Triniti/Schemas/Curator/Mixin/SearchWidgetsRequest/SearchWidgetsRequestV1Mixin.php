<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-widgets-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchWidgetsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Enum\SearchWidgetsSort;

final class SearchWidgetsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:search-widgets-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchWidgetsSort::RELEVANCE())
                ->className(SearchWidgetsSort::class)
                ->build(),
            /*
             * A set of widget types (node must match at least one) to include in
             * the search results, such as carousel-widget.
             */
            Fb::create('types', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
