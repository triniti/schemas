<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/search-categories-response/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\SearchCategoriesResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Taxonomy\Mixin\Category\Category as TrinitiTaxonomyCategory;

final class SearchCategoriesResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:search-categories-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiTaxonomyCategory::class,
                ])
                ->build(),
        ];
    }
}
