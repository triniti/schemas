<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/delete-promotion/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\DeletePromotion;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeletePromotionV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:delete-promotion:1-0-0');
    }
}
