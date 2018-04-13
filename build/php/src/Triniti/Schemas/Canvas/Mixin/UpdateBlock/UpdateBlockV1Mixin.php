<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/update-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\UpdateBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class UpdateBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:update-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('text', T\TextType::create())
                ->build(),
            Fb::create('date', T\DateTimeType::create())
                ->build(),
        ];
    }
}
