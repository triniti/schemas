<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget-has-search-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\WidgetHasSearchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
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
            Fb::create('search_request', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorWidgetSearchRequest::class,
                ])
                ->build(),
        ];
    }
}
