<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/iframe-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\IframeBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class IframeBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:iframe-block:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('src', T\TextType::create())
                ->required()
                ->format(Format::URL())
                ->build(),
            Fb::create('width', T\StringType::create())
                ->pattern('^\d+(%|px)?$')
                ->build(),
            Fb::create('height', T\StringType::create())
                ->pattern('^\d+(%|px)?$')
                ->build(),
            Fb::create('align', T\StringType::create())
                ->pattern('^(center|right|left)$')
                ->build(),
            /*
             * Determines of scrolling should be enabled for this iframe
             */
            Fb::create('scrolling_enabled', T\BooleanType::create())
                ->build(),
            /*
             * A map containing values for the data-* attributes
             */
            Fb::create('data', T\StringType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
