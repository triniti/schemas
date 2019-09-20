<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-slotting-removed/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TeaserSlottingRemoved;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class TeaserSlottingRemovedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser-slotting-removed:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('slotting_keys', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
