<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-updated/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionUpdated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\Promotion\Promotion as TrinitiCuratorPromotion;

final class PromotionUpdatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-updated:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('new_node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiCuratorPromotion::class,
                ])
                ->build(),
            /*
             * The entire node, as it appeared before it was modified.
             */
            Fb::create('old_node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorPromotion::class,
                ])
                ->build(),
        ];
    }
}
