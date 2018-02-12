<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/search-categories-request/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\SearchCategoriesRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class SearchCategoriesRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:search-categories-request:1-0-0');
    }
}
