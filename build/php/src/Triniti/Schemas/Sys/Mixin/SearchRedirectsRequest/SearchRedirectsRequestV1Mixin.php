<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/search-redirects-request/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\SearchRedirectsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Sys\Enum\SearchRedirectsSort;

final class SearchRedirectsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:search-redirects-request:1-0-0');
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
                ->withDefault(SearchRedirectsSort::RELEVANCE())
                ->className(SearchRedirectsSort::class)
                ->build(),
        ];
    }
}
