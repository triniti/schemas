<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget-has-search-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\WidgetHasSearchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Mixin\Node\Node as GdbotsNcrNode;
use Triniti\Schemas\Curator\Mixin\WidgetSearchRequest\WidgetSearchRequest as TrinitiCuratorWidgetSearchRequest;

final class WidgetHasSearchRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:widget-has-search-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * When nodes have been acquired by another process you can populate
             * this field instead of "search_request".
             */
            Fb::create('prefetched_nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    GdbotsNcrNode::class,
                ])
                ->build(),
            Fb::create('search_request', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorWidgetSearchRequest::class,
                ])
                ->build(),
            Fb::create('show_pagination', T\BooleanType::create())
                ->build(),
            Fb::create('show_item_cta_text', T\BooleanType::create())
                ->build(),
            Fb::create('show_item_date', T\BooleanType::create())
                ->build(),
            Fb::create('show_item_duration', T\BooleanType::create())
                ->build(),
            Fb::create('show_item_excerpt', T\BooleanType::create())
                ->build(),
            Fb::create('show_item_icon', T\BooleanType::create())
                ->build(),
            Fb::create('show_item_media_count', T\BooleanType::create())
                ->build(),
        ];
    }
}
