<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/blogroll-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\BlogrollWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class BlogrollWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:blogroll-widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The name of the slot that will contain a promotion
             * with the widgets that will be used for the "in-between"
             * aka "separators" in the blogroll.
             */
            Fb::create('promotion_slot', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
