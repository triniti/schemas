<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Promotion;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PromotionV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion:1-0-0');
    }
}
