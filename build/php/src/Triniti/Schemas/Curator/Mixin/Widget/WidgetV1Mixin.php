<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Widget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesRequest\SearchNodesRequest as GdbotsNcrSearchNodesRequest;
use Triniti\Schemas\Curator\WidgetId;

final class WidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return WidgetId::generate(); })
                ->className(WidgetId::class)
                ->overridable(true)
                ->build(),
            Fb::create('search_request', T\MessageType::create())
                ->anyOfClassNames([
                    GdbotsNcrSearchNodesRequest::class,
                ])
                ->build(),
            /*
             * The href/url for the view all option.
             */
            Fb::create('view_all_link_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * The label for the view all option.
             */
            Fb::create('view_all_link_text', T\StringType::create())
                ->build(),
            /*
             * The text to be rendered in the header.
             */
            Fb::create('header_text', T\StringType::create())
                ->build(),
            /*
             * The href/url for the header button.
             */
            Fb::create('header_button_link_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * The label to be rendered in the header button.
             */
            Fb::create('header_button_link_text', T\StringType::create())
                ->build(),
            /*
             * Whether or not to render the header.
             */
            Fb::create('show_header', T\BooleanType::create())
                ->build(),
            /*
             * The text to be rendered in the footer.
             */
            Fb::create('footer_text', T\StringType::create())
                ->build(),
            /*
             * The href/url for the footer button.
             */
            Fb::create('footer_button_link_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * The label to be rendered in the footer button.
             */
            Fb::create('footer_button_link_text', T\StringType::create())
                ->build(),
            /*
             * Whether or not to render the footer.
             */
            Fb::create('show_footer', T\BooleanType::create())
                ->build(),
        ];
    }
}
