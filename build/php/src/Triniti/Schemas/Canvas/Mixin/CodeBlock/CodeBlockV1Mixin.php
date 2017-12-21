<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/code-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\CodeBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class CodeBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:code-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('code', T\TextType::create())
                ->build(),
        ];
    }
}
