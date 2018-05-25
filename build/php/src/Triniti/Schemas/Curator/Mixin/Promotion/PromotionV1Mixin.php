<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Promotion;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\PromotionId;

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
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return PromotionId::generate(); })
                ->className(PromotionId::class)
                ->overridable(true)
                ->build(),
            /*
             * The name of the location where the promotion should render,
             * e.g. "desktop-home-sidebar" or "smartphone-global-html-head".
             */
            Fb::create('slot', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * If multiple promotions can render in a given slot at the same
             * time then the one with the higher priority takes precedence.
             */
            Fb::create('priority', T\SmallIntType::create())
                ->build(),
            Fb::create('mon_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('mon_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('tue_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('tue_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('wed_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('wed_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('thu_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('thu_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('fri_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('fri_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('sat_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('sat_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('sun_start_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                ->build(),
            Fb::create('sun_end_at', T\StringType::create())
                ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
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
