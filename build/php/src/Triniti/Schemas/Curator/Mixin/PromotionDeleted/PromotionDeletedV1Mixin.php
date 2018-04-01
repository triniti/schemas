<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-deleted/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PromotionDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-deleted:1-0-0');
    }
}
