<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-marked-as-draft/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionMarkedAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PromotionMarkedAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-marked-as-draft:1-0-0');
    }
}
