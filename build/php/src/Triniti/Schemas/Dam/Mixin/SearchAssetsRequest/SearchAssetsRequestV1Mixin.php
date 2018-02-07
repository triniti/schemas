<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/search-assets-request/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\SearchAssetsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Dam\Enum\SearchAssetsSort;

final class SearchAssetsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:search-assets-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchAssetsSort::RELEVANCE())
                ->className(SearchAssetsSort::class)
                ->build(),
            /*
             * A set of asset types (node must match at least one) to include in
             * the search results, such as image-asset or video-asset.
             */
            Fb::create('types', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
            /*
             * A reference to an entity to search for its associated assets.
             */
            Fb::create('associated_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
