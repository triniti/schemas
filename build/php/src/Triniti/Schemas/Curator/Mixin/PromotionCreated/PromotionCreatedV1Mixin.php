<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion-created/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PromotionCreated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\Promotion\Promotion as TrinitiCuratorPromotion;

final class PromotionCreatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion-created:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiCuratorPromotion::class,
                ])
                ->build(),
        ];
    }
}
