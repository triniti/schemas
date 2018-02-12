<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/category-deleted/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\CategoryDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class CategoryDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:category-deleted:1-0-0');
    }
}
