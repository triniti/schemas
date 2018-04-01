<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-scheduled/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionScheduled;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PromotionScheduledV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-scheduled:1-0-0');
    }
}
