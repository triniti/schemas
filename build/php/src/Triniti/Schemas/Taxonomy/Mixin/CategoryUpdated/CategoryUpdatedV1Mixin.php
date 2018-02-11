<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/category-updated/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\CategoryUpdated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Taxonomy\Mixin\Category\Category as TrinitiTaxonomyCategory;

final class CategoryUpdatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:category-updated:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('new_node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiTaxonomyCategory::class,
                ])
                ->build(),
            /*
             * The entire node, as it appeared before it was modified.
             */
            Fb::create('old_node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiTaxonomyCategory::class,
                ])
                ->build(),
        ];
    }
}
