<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/playlist-widget/1-0-1.json#
namespace Triniti\Schemas\Curator\Mixin\PlaylistWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PlaylistWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:playlist-widget:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('autoplay', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
        ];
    }
}
