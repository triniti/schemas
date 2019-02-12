<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/tetris-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TetrisWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TetrisWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:tetris-widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('layout', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
