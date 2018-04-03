<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Promotion;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class PromotionV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:promotion:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The name of the location where the promotion should render,
             * e.g. "desktop-home-sidebar" or "smartphone-global-html-head".
             */
            Fb::create('slot', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * A string containing (HTML, JavaScript, CSS, etc.) that is injected into
             * the application before the widgets render.
             */
            Fb::create('pre_render_code', T\TextType::create())
                ->build(),
            /*
             * A string containing (HTML, JavaScript, CSS, etc.) that is injected into
             * the application after the widgets render.
             */
            Fb::create('post_render_code', T\TextType::create())
                ->build(),
            /*
             * A list of widget node refs that this promotion will render.
             */
            Fb::create('widget_refs', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
