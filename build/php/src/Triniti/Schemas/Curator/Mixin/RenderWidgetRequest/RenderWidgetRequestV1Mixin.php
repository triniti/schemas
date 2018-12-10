<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-widget-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\RenderWidgetRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Common\RenderContext as TrinitiCommonRenderContext;
use Triniti\Schemas\Curator\Mixin\Widget\Widget as TrinitiCuratorWidget;

final class RenderWidgetRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:render-widget-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('widget_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('widget', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorWidget::class,
                ])
                ->build(),
            Fb::create('context', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCommonRenderContext::class,
                ])
                ->build(),
        ];
    }
}
