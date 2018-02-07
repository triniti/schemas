<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/pull-quote-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PullQuoteBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PullQuoteBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:pull-quote-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('text', T\TextType::create())
                ->maxLength(5000)
                ->build(),
        ];
    }
}