<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-promotion-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\RenderPromotionResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\Promotion\Promotion as TrinitiCuratorPromotion;
use Triniti\Schemas\Curator\Mixin\RenderWidgetResponse\RenderWidgetResponse as TrinitiCuratorRenderWidgetResponse;

final class RenderPromotionResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:render-promotion-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('from_cache', T\BooleanType::create())
                ->build(),
            Fb::create('promotion', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorPromotion::class,
                ])
                ->build(),
            Fb::create('widgets', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiCuratorRenderWidgetResponse::class,
                ])
                ->build(),
        ];
    }
}
