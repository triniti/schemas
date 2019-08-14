<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/alert-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\AlertWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class AlertWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:alert-widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('dismissible', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
        ];
    }
}