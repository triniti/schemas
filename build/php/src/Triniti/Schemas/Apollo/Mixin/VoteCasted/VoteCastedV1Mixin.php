<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/vote-casted/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\VoteCasted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class VoteCastedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:vote-casted:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('poll_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('answer_id', T\UuidType::create())
                ->build(),
            /*
             * "s256" means shard 256. Used to distribute read/write from storage and speed up
             * replay/reindex processes. It can also be used to distribute workload in front end
             * user interfaces or notifications (like isles in a grocery store).
             * This value should NOT change once set.
             */
            Fb::create('s256', T\TinyIntType::create())
                ->build(),
            /*
             * "s32" means shard 32. See field "s256" for explanation.
             */
            Fb::create('s32', T\TinyIntType::create())
                ->build(),
            /*
             * "s16" means shard 16. See field "s256" for explanation.
             */
            Fb::create('s16', T\TinyIntType::create())
                ->build(),
        ];
    }
}
