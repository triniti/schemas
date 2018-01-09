<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/has-blocks/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\HasBlocks;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Canvas\Mixin\Block\Block as TrinitiCanvasBlock;

final class HasBlocksV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:has-blocks:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('blocks', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiCanvasBlock::class,
                ])
                ->build(),
        ];
    }
}
