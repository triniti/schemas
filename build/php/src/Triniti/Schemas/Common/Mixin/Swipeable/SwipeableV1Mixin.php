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
             * A swipe (aka banner/label/overlay) is a short string used in a visual treatment
             * on the node. e.g. "Exclusive", "NSFW", "Breaking Bad Mojo".
             */
            Fb::create('swipe', T\StringType::create())
                ->build(),
            /*
             * You know, for a softer swipe. Mainly here for legacy content that couldn't
             * think of a better name for whatever this was supposed to be.
             */
            Fb::create('soft_swipe', T\StringType::create())
                ->build(),
        ];
    }
}
