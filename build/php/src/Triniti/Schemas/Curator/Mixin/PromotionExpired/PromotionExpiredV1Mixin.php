<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-expired/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionExpired;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PromotionExpiredV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-expired:1-0-0');
    }
}
