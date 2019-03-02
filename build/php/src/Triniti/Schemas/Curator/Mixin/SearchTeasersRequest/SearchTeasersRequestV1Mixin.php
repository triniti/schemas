<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-teasers-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchTeasersRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
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
            /*
             * A set of teaser types (node must match at least one) to include in
             * the search results, such as image-teaser or video-teaser.
             */
            Fb::create('types', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
            /*
             * A node ref of a gallery that a teaser must be associated with to match the search request.
             */
            Fb::create('gallery_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A node ref of a timeline that a teaser must be associated with to match the search request.
             */
            Fb::create('timeline_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
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
