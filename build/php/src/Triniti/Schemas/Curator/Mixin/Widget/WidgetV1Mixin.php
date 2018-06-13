<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Widget;

use Gdbots\Pbj\AbstractMixin;
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
        ];
    }
}
