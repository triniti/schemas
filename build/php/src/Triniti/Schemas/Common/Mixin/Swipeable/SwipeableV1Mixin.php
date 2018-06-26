<?php
// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/swipeable/1-0-0.json#
namespace Triniti\Schemas\Common\Mixin\Swipeable;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class SwipeableV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:common:mixin:swipeable:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A string to be used as a swipe decoration.
             */
            Fb::create('swipe', T\StringType::create())
                ->build(),
            /*
             * A string to be used as a soft swipe decoration.
             */
            Fb::create('soft_swipe', T\StringType::create())
                ->build(),
        ];
    }
}
