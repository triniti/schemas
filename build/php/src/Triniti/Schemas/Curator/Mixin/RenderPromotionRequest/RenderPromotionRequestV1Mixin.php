<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-promotion-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\RenderPromotionRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Common\RenderContext as TrinitiCommonRenderContext;

final class RenderPromotionRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:render-promotion-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('promotion_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * The name of the slot to use for finding the promotion to render.
             * If promotion_ref is supplied this should be ignored.
             */
            Fb::create('slot', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * Used to preview a time other than now of what a promotion slot will render.
             * This is primarily for CMS preview or unit testing.
             */
            Fb::create('render_at', T\DateTimeType::create())
                ->build(),
            Fb::create('context', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCommonRenderContext::class,
                ])
                ->build(),
        ];
    }
}
