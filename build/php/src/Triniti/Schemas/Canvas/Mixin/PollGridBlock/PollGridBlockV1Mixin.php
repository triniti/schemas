<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/poll-grid-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PollGridBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class PollGridBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:poll-grid-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * An array of poll refs to include in this block. It is
             * a list vs a set to allow sorting.
             */
            Fb::create('poll_refs', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
