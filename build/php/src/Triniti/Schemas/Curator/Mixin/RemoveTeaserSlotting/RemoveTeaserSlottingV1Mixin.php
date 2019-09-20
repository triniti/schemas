<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/remove-teaser-slotting/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\RemoveTeaserSlotting;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class RemoveTeaserSlottingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:remove-teaser-slotting:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The one node allowed to keep the slotting.
             */
            Fb::create('except_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A map of integers, e.g. {home: 1, sports: 5, tv: 9}, that must be
             * removed from nodes currently having those slotting values.
             */
            Fb::create('slotting', T\TinyIntType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
