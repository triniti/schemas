<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/get-category-request/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\GetCategoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetCategoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:get-category-request:1-0-0');
    }
}
