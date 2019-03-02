<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/search-articles-request/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\SearchArticlesRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\News\Enum\SearchArticlesSort;

final class SearchArticlesRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:search-articles-request:1-0-0');
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
            Fb::create('is_locked', T\TrinaryType::create())
                ->build(),
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchArticlesSort::RELEVANCE())
                ->className(SearchArticlesSort::class)
                ->build(),
            /*
             * The name of the slotting key to use to determine the order of
             * articles returned in the response. e.g. "home", "sports", "tv"
             */
            Fb::create('slotting_key', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            Fb::create('channel_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('category_refs', T\IdentifierType::create())
                ->asASet()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('person_refs', T\IdentifierType::create())
                ->asASet()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
