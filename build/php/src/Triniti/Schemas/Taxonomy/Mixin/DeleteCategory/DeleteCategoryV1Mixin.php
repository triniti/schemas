<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/delete-category/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\DeleteCategory;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeleteCategoryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:delete-category:1-0-0');
    }
}
