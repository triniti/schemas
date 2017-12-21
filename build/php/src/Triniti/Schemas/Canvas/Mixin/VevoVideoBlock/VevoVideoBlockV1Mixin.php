<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/vevo-video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\VevoVideoBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class VevoVideoBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:vevo-video-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('isrc', T\StringType::create())
                ->required()
                ->pattern('^[\w-]+$')
                ->build(),
            Fb::create('autoplay', T\BooleanType::create())
                ->build(),
        ];
    }
}
