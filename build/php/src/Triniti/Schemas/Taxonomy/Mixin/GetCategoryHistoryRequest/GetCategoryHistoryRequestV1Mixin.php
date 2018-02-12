<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/get-category-history-request/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\GetCategoryHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetCategoryHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:get-category-history-request:1-0-0');
    }
}
