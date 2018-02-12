<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/rename-category/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\RenameCategory;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class RenameCategoryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:rename-category:1-0-0');
    }
}
