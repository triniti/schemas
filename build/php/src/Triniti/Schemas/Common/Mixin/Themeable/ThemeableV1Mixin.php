<?php
// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/themeable/1-0-0.json#
namespace Triniti\Schemas\Common\Mixin\Themeable;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class ThemeableV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:common:mixin:themeable:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A string used to indicate that a visual treatment should be
             * applied to a piece of content, e.g. "christmas" or "taco".
             */
            Fb::create('theme', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
