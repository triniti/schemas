<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/search-videos-request/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\SearchVideosRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Ovp\Enum\SearchVideosSort;

final class SearchVideosRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:search-videos-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchVideosSort::RELEVANCE())
                ->className(SearchVideosSort::class)
                ->build(),
        ];
    }
}
