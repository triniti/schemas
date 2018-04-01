<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-published/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionPublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PromotionPublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-published:1-0-0');
    }
}
