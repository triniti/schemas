<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-galleries-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchGalleriesRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Enum\SearchGalleriesSort;

final class SearchGalleriesRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:search-galleries-request:1-0-0');
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
                ->withDefault(SearchGalleriesSort::RELEVANCE())
                ->className(SearchGalleriesSort::class)
                ->build(),
        ];
    }
}
