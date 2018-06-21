<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/quote-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\QuoteBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class QuoteBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:quote-block:1-0-0');
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
            Fb::create('source', T\StringType::create())
                ->build(),
            Fb::create('source_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('is_pull_quote', T\BooleanType::create())
                ->build(),
        ];
    }
}
