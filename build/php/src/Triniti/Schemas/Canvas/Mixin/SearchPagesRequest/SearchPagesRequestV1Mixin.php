<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/search-pages-request/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SearchPagesRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Canvas\Enum\SearchPagesSort;

final class SearchPagesRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:search-pages-request:1-0-0');
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
                ->withDefault(SearchPagesSort::RELEVANCE())
                ->className(SearchPagesSort::class)
                ->build(),
        ];
    }
}
