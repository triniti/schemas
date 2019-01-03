<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-widget-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\RenderWidgetResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\WidgetSearchResponse\WidgetSearchResponse as TrinitiCuratorWidgetSearchResponse;

final class RenderWidgetResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:render-widget-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('html', T\MediumTextType::create())
                ->build(),
            Fb::create('search_response', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorWidgetSearchResponse::class,
                ])
                ->build(),
        ];
    }
}
