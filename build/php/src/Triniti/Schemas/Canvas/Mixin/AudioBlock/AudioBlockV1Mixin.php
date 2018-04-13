<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/audio-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\AudioBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class AudioBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:audio-block:1-0-0');
    }
}
